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

export default class AdminQuestionnaire extends Component {
  constructor(props) {
    super(props);
    this.state = {
      questionnaire: {},  newQuestion: "", questions: [], question_response: "",
      responsesChoices: [
        {
          response: "", state: false, actionOnFollowers: ""
        },
        {
          response: "", state: false, actionOnFollowers: ""
        },
        {
          response: "", state: false, actionOnFollowers: ""
        }
      ]
    };
    this.onDragEnd = this.onDragEnd.bind(this);
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/' + 'questionnaire/' + this.props.match.params.slug)
      .then( (response) => {
        this.setState({questionnaire: response.data, questions: response.data.timeline.events});
        console.log(response);
      })
      .catch( (error) => {
        console.log(error);
      })
  }
  onDragEnd(result) {
    if (!result.destination) {
      return;
    }
    const items = reorder(
      this.state.questions,
      result.source.index,
      result.destination.index
    );
    this.setState({
      questions: items,
    });
    this.reorderStateQuestions();
  }
  reorderStateQuestions(){
    axios.post('http://localhost:8000/api/' + 'events/reorder', {
      messages: this.state.questions,
    }).then( (response) => {
      console.log(response);
      this.setState({questionnaire: response.data, questions: response.data.timeline.events});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  addQuestion(){
    axios.post('http://localhost:8000/api/' + 'question/add', {
      questionnaire_slug: this.props.match.params.slug,
      question: this.state.newQuestion,
      media: null,
      question_response: this.state.question_response,
      responses_choices: this.state.responsesChoices
    }).then( (response) => {
      console.log(response);
      this.setState({questionnaire: response.data, questions: response.data.timeline.events});
    }).catch( (error) => {
      console.log(error.response.data)
    });
  }
  handleQuestionContent(e){
    let value = e.target.value;
    this.setState({ newQuestion: value });
  }
  handleResponse(e){
    let val = e.target.value;
    this.setState({question_response: val});
  }
  handleQuestionResponseChoice(e){
    let val = e.target.value;
    let indexInState = e.target.dataset.responseItem;
    let inputType = e.target.dataset.responseType;
    let tempItem = this.state.responsesChoices;
    if(inputType == "state"){
      if(val == "on"){
        val = true;
      }else{
        val = false;
      }
    }
    tempItem[indexInState][inputType] = val;
    this.setState({ responsesChoices: tempItem});
  }
  handleQuestionCheckbox(e){

  }

  renderResponsesList(){
    let maxResponses = 3;
    let placeHoldersNb = [+100, -20, +85];
    let items = [];
    for(let i = 0; i < maxResponses; i++){
      items.push(
        <div className="response">
          <label htmlFor="">Réponse {i + 1}</label>
          <textarea type="text" placeholder={"Text de ma réponse " + (i + 1) } data-response-item={i} data-response-type="response" onKeyUp={this.handleQuestionResponseChoice.bind(this)} defaultValue={this.state.responsesChoices[i].response} />
          <label htmlFor="">réponse juste à la question : <input type="checkbox" data-response-item={i} data-response-type="state" onClick={this.handleQuestionResponseChoice.bind(this)}  defaultChecked={this.state.responsesChoices[i].state} /></label>
          <div className="input-group">
            <label htmlFor="">Perte/Gain de followers</label>
            <input type="number" placeholder={placeHoldersNb[i]} data-response-item={i} data-response-type="actionOnFollowers" onKeyUp={this.handleQuestionResponseChoice.bind(this)} defaultValue={this.state.responsesChoices[i].actionOnFollowers} />
          </div>
        </div>
      );
    }
    return items;
  }

  render() {
    return (
      <div className="container">
        <div className="page-header"><h1 className="page-title">Jeu</h1></div>
        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header"><h3 className="card-title">Time line de la partie</h3></div>
            <div className="row">
              <DragDropContext onDragEnd={this.onDragEnd}>
                <Droppable droppableId="droppable">
                  {(provided, snapshot) => (
                    <div
                      ref={provided.innerRef}
                      style={getListStyle(snapshot.isDraggingOver)}
                    >
                      {this.state.questions.map((item, index) => (
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
                              <div className="message" id={'message_' +  item.id }>
                                {item.question.question}
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
        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header">
              <h3>Ajouter une question</h3>
            </div>
            <div className="row add-question-form">
                <div className="input-group">
                  <label htmlFor="">Question</label>
                  <input type="text" placeholder="Question" onKeyUp={this.handleQuestionContent.bind(this)} />
                </div>
                <div className="input-group">
                  <span class="sub-title">Réponses à la question</span>
                  <div className="responses-list">
                    {this.renderResponsesList()}
                    <div className="input-group">
                      <label htmlFor="">Message à afficher pour cette question lorsque répondue</label>
                      <textarea name="" id="" cols="30" rows="2" onChange={this.handleResponse.bind(this)} />
                    </div>
                    <div className="input-group">
                      <button onClick={this.addQuestion.bind(this)}>Ajouter</button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div className="row row-cards">
          <div className="col-lg-12">
            <div className="card-header">
              <h3>Ajouter une notification</h3>
            </div>
            <div className="row">
              <form action="" className="add-question-form">
                <div className="input-group">
                  <label htmlFor="">Contenu de la notification</label>
                  <input type="text" placeholder="Vous recevez une proposition de partenariat pour une société d'armement"/>
                </div>
                <div className="input-group">
                  <label htmlFor="">Action</label>
                  <div>
                    <input type="radio" id="Oui" name="action" checked />
                    <label htmlFor="Oui" >Oui</label>
                  </div>
                  <div>
                    <input type="radio" id="Non" name="action" />
                    <label htmlFor="Non">Non</label>
                  </div>
                </div>
                <div className="input-group">
                  <label htmlFor="">Conséquence sur les followers</label>
                  <input type="number"/>
                </div>
                <div className="input-group">
                  <label htmlFor="">Si la notification est acceptée</label>
                  <input type="text"/>
                </div>
                <div className="input-group">
                  <label htmlFor="">Si la notification est refusée</label>
                  <input type="text"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
