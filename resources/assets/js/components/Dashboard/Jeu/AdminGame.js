import React, { Component } from 'react';
import axios from 'axios';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
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

export default class AdminGame extends Component {
  constructor(props) {
    super(props);
    this.state = {
      questionnaires: [], messages: [], newMessage: "", newQuestionnaireName: ''
    };
    this.onDragEnd = this.onDragEnd.bind(this);
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/' + 'questionnaires/')
      .then( (response) => {
        this.setState({questionnaires: response.data});
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
    let value = e.target.value;
    this.state.newMessage = value;
  }
  addQuestionnaire(){
    axios.post('http://localhost:8000/api/' + 'questionnaire/add', {
      name: this.state.newQuestionnaireName,
    }).then( (response) => {
      console.log(response);
      this.setState({questionnaires: response.data});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  listQuestionnaires(){
    let items = this.state.questionnaires.map( item => {
      return (<div>
        <h2>{item.name}</h2>
        <Link to={"/dashboard/game/" + item.slug}>{item.name}</Link>
      </div>)
    });
    return items;
  }
  handleQuestionnaireName(e){
    let val = e.target.value;
    console.log(val);
    this.setState({newQuestionnaireName: val});
  }
  render() {
    return (
      <div className="container">
        <div className="page-header">
          <h1 className="page-title">
            Administration du jeu
          </h1>
        </div>
        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header">
              <h3 className="card-title">Liste des questionnaires</h3>
            </div>
            <div className="row">
              {this.listQuestionnaires()}
            </div>
          </div>
        </div>        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header">
              <h3 className="card-title">Ajouter un questionnaire</h3>
            </div>
            <div className="row">
                <div className="input-group">
                  <label htmlFor="">Nom du questionnaire</label>
                  <input placeholder="Luxe Lifestyle" type="text" onChange={this.handleQuestionnaireName.bind(this)} />
                  <button onClick={this.addQuestionnaire.bind(this)}>Ajouter</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
