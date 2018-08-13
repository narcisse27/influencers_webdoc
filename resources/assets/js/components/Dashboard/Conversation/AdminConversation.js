import React, { Component } from 'react';
import axios from 'axios';
import uniqueId from 'lodash/uniqueId';
import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';
const getItems = count =>
  Array.from({ length: count }, (v, k) => k).map(k => ({
    id: `item-${k}`,
    content: `item ${k}`,
  }));

const reorder = (list, startIndex, endIndex) => {
  const result = Array.from(list);
  const [removed] = result.splice(startIndex, 1);
  result.splice(endIndex, 0, removed);
  return result;
};

const grid = 8;

const getItemStyle = (isDragging, draggableStyle) => ({
  // some basic styles to make the items look a bit nicer
  userSelect: 'none',
  padding: grid * 2,
  margin: `0 0 ${grid}px 0`,
  display: 'inline-block',
  height: 'auto',
  width: '100%',
  // change background colour if dragging
  background: isDragging ? 'lightgreen' : 'grey',
  // styles we need to apply on draggables
  ...draggableStyle,
});

const getListStyle = isDraggingOver => ({
  background: isDraggingOver ? 'lightblue' : 'lightgrey',
  padding: grid,
  width: '100%',
  height: 'auto'
});

export default class AdminConversation extends Component {
  constructor(props) {
    super(props);
    this.state = {
      conversation: {}, messages: [], newMessage: "",
    };
    this.onDragEnd = this.onDragEnd.bind(this);
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/' + 'conversation/' + this.props.match.params.slug)
      .then( (response) => {
        this.setState({conversation: response.data, messages: response.data.messages});
        console.log(response);
      })
      .catch( (error) => {
        console.log(error);
      })
  }

  switchMessageSection(e){
    let self = this;
    let item = e.target;
    let thisMessage = {};
    let data = this.state.messages.map( (message) => {
        if(message.id == item.dataset.messageId){
          if(message.user_name == this.state.conversation.expediteur_name){
            message.user_name = this.state.conversation.destinataire_name;
          }else{
            message.user_name = this.state.conversation.expediteur_name;
          }
          thisMessage = message;// message to update in database
        }
        return message;
    });
    this.setState({messages: data});
    console.log(thisMessage, 'message to update ins store');
    this.updateMessage(thisMessage);
  }

  onDragEnd(result) {
    // dropped outside the list
    if (!result.destination) {
      return;
    }
    const items = reorder(
      this.state.messages,
      result.source.index,
      result.destination.index
    );
    this.setState({
      messages: items,
    });
    this.reorderStateMessages();
  }
  updateMessage(item){
    axios.post('http://localhost:8000/api/' + 'message/update', {
      message: item,
      slug: this.props.match.params.slug
    }).then( (response) => {
      console.log(response);
      this.setState({conversation: response.data, messages: response.data.messages});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  reorderStateMessages(){
    axios.post('http://localhost:8000/api/' + 'conversation/reorder', {
      messages: this.state.messages,
      slug: this.props.match.params.slug
    }).then( (response) => {
      console.log(response);
      this.setState({conversation: response.data, messages: response.data.messages});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  deleteMessage(e){
    let item = e.target;
    let itemId = item.dataset.messageId;
    axios.post('http://localhost:8000/api/' + 'message/delete', {
      id: itemId,
      slug: this.props.match.params.slug
    }).then( (response) => {
      console.log(response);
      this.setState({conversation: response.data, messages: response.data.messages});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  handleUpdateMessage(e){
    let self = this;
    let value = e.target.value;
    this.state.newMessage = value;
  }
  addMessage(e){
    axios.post('http://localhost:8000/api/' + 'message/add', {
      content: this.state.newMessage,
      conversation_id: this.state.conversation.id,
      user_name: this.state.conversation.expediteur_name,
      slug: this.props.match.params.slug
    }).then( (response) => {
      console.log(response);
      this.setState({conversation: response.data, messages: response.data.messages, newMessage: ""});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }

  render() {
    return (
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            Conversation entre <strong>{this.state.conversation.expediteur_name}</strong> et <strong>{this.state.conversation.destinataire_name}</strong>
          </h1>
        </div>
        <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
        <div class="row row-cards">
          <div class="col-lg-12">
            <div class="card-header">
              <h3 class="card-title">Messages</h3>
            </div>
            <DragDropContext onDragEnd={this.onDragEnd}>
              <Droppable droppableId="droppable">
                {(provided, snapshot) => (
                  <div
                    ref={provided.innerRef}
                    style={getListStyle(snapshot.isDraggingOver)}
                  >
                    {this.state.messages.map((item, index) => (
                      <Draggable key={item.id} draggableId={item.id} index={index}>
                        {(provided, snapshot) => (
                          <div
                            ref={provided.innerRef}
                            {...provided.draggableProps}
                            {...provided.dragHandleProps}
                            style={getItemStyle(
                              snapshot.isDragging,
                              provided.draggableProps.style
                            )}
                          >
                            <div class="message" id={'message_' +  item.id }>
                              <div class="message-recieved">
                                {item.user_name == this.state.conversation.destinataire_name &&
                                <div class="message__content_wrap" data-message-id={item.id}>
                                  <div class="message__content" >
                                    <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)" defaultValue={item.content} />
                                  </div>
                                  <div class="message__content_handle" onClick={this.switchMessageSection.bind(this)} data-message-id={item.id} ></div>
                                </div>
                                }
                              </div>
                              <div class="message-sended">
                              {item.user_name == this.state.conversation.expediteur_name &&
                              <div class="message__content_wrap" data-message-id={item.id}>
                                <div class="message__content">
                                  <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)" defaultValue={item.content} />
                                </div>
                                <div class="message__content_handle" onClick={this.switchMessageSection.bind(this)} data-message-id={item.id}></div>
                              </div>
                              }
                              <span onClick={this.deleteMessage.bind(this)} data-message-id={item.id}>Delete</span>
                              </div>
                            </div>
                          </div>
                        )}
                      </Draggable>
                    ))}
                    {provided.placeholder}
                  </div>
                )}
              </Droppable>
            </DragDropContext>
            <div className="row">
                <textarea ref="newMessageInput" name="" id="" cols="30" rows="10" defaultValue={this.state.newMessage} onKeyUp={this.handleUpdateMessage.bind(this)} />
                <button onClick={this.addMessage.bind(this)}>Ajouter à la conv.</button>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
