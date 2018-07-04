import React, { Component } from 'react';
import axios from 'axios';
import uniqueId from 'lodash/uniqueId';
import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';
// fake data generator
const getItems = count =>
  Array.from({ length: count }, (v, k) => k).map(k => ({
    id: `item-${k}`,
    content: `item ${k}`,
  }));

// a little function to help us with reordering the result
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

class AdminConversation extends Component {
  constructor(props) {
    super(props);
    this.state = {
      conversation: {}, messages: []
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
    console.log(e);
    console.log(this);
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
  }
  render() {
    return (
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            Conversation entre <strong>{this.state.conversation.expediteur_name}</strong> et <strong>{this.state.conversation.destinataire_name}</strong>
          </h1>
        </div>
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
                                {item.user_id != 0 &&
                                <div class="message__content_wrap">
                                  <div class="message__content">
                                                    <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)">
                                                        { item.content }
                                                    </textarea>
                                  </div>
                                  <div class="message__content_handle" onClick={this.switchMessageSection}></div>
                                </div>
                                }
                              </div>
                              <div class="message-sended">
                              {item.user_id == 0 &&
                              <div class="message__content_wrap">
                                <div class="message__content">
                                                    <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)">
                                                        { item.content }
                                                    </textarea>
                                </div>
                                <div class="message__content_handle" onClick={this.switchMessageSection}></div>
                              </div>
                              }
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
          </div>
        </div>
      </div>
    );
  }
}
export default AdminConversation;