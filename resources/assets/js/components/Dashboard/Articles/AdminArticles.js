import React, { Component } from 'react';
import axios from 'axios';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import uniqueId from 'lodash/uniqueId';
import { DragDropContext, Droppable, Draggable } from 'react-beautiful-dnd';
import CKEditor from "react-ckeditor-component";
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

export default class AdminArticles extends Component {
  constructor(props) {
    super(props);
    this.state = {
      title: '', accroche: '', cover: '', content: ''
    };
    this.onDragEnd = this.onDragEnd.bind(this);
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/' + 'articles/')
      .then( (response) => {
        this.setState({articles: response.data});
        console.log(response);
      })
      .catch( (error) => {
        console.log(error);
      })
  }

  handleTitle(e){
    this.setState({title: e.target.value});
  }

  handleAccroche(e){
    this.setState({accroche: e.target.value});
  }

  handleCover(e){
    this.setState({cover: e.target.value});
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

  addArticle(){
    axios.post('http://localhost:8000/api/' + 'article/add', {
      title: this.state.title,
      accroche: this.state.accroche,
      cover: this.state.cover,
      content: this.state.content

    }).then( (response) => {
      console.log(response);
      alert("article added");
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  listArticles(){
    let items = this.state.articles.map( item => {
    });
  }
  updateContent(newContent) {
    this.setState({
      content: newContent
    })
  }

  onChange(evt){
    console.log("onChange fired with event info: ", evt);
    var newContent = evt.editor.getData();
    this.setState({
      content: newContent
    })
  }

  onBlur(evt){
    console.log("onBlur event called with event info: ", evt);
  }

  afterPaste(evt){
    console.log("afterPaste event called with event info: ", evt);
  }


  render() {
    return (
      <div className="container">
        <div className="page-header">
          <h1 className="page-title">
            Administration des section d'articles
          </h1>
        </div>
        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header">
              <h3 className="card-title">Article</h3>
            </div>
          </div>
        </div>
        <div className="row row-cards">
          <div className="col-lg-12">

            <div className="row">
              <div className="input-group">
                <label htmlFor="">titre de l'article</label>
                <input placeholder="Luxe Lifestyle" type="text" onKeyUp={this.handleTitle.bind(this)} />
              </div>
              <div className="input-group">
                <label htmlFor="">Accroche</label>
                <input type="text" placeholder="Accroche" onKeyUp={this.handleAccroche.bind(this)} />
              </div>
              <div className="input-group">
                <label htmlFor="">Couverture</label>
                <input type="text" placeholder="Accroche" onKeyUp={this.handleCover.bind(this)} />
              </div>
              <div className="input-group">
                <label htmlFor="">Contenu</label>
                <CKEditor
                  activeClass="p10"
                  content={this.state.content}
                  events={{
                    "blur": this.onBlur.bind(this),
                    "afterPaste": this.afterPaste.bind(this),
                    "change": this.onChange.bind(this)
                  }}
                />
              </div>
              <button onClick={this.addArticle.bind(this)}>Ajouter</button>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
