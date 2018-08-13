import React, { Component } from 'react';
import CountUp from 'react-countup';
class GamePartie extends Component{
  constructor(){
    super();
    this.state = {showRightAndFalsesResponses: false, username: '', showResponse: false, questionnaire_slug: '', questionnaire: {}, oldFollowersNb: 100, currentFollowers: 100, currentQuestion: 0, events: []}
  }
  componentDidMount(){
    axios.get('http://8-24.ch/api/questionnaire/' + this.props.match.params.slug)
      .then( (response) => {
        console.log(response);
        this.setState({questionnaire: response.data, events: response.data.timeline.events});
      })
      .catch( (error) => {
      });
  }
  renderAllQuestions(){
    let item = [];
    for(let i = 0; i < this.state.events.length; i++){
      if(i == this.state.currentQuestion){
        item.push(
          <div key={Math.random(1, 100)}>
            <div dangerouslySetInnerHTML={{__html: this.state.events[i].question.media }} />
            <div>{this.state.events[i].question.question}</div>
          </div>
        )
      }
    }
    return item;
  }
  renderAllResponses(){
    let items = [];
    for(let i = 0; i < this.state.events.length; i++){
      if(i == this.state.currentQuestion){
        items.push(
          <div className="responses__list">
            {this.renderResponsesList(this.state.events[i].question.responses)}
          </div>
        )
      }
    }
    return items;
  }

  renderResponsesList(items){
    let i = 0;
    let list = items.map( item => {
      i++;
      return (
        <div className="responses__list__item" >
          <div className="response__numerotation">
            {i} -
          </div>
          <div className="response__content" data-states={item.response_correct} data-action={item.action} onClick={this.handleResponseClick.bind(this)}>
            {item.response}
          </div>
        </div>
      )
    });
    return list;
  }

  showExplication(){
    let item = [];
    for(let i = 0; i < this.state.events.length; i++){
      if(i == this.state.currentQuestion){
        item.push(
          <div>
            <div>{this.state.events[i].question.response}</div>
            <button onClick={this.goNextQuestion.bind(this)}>Suivant</button>
          </div>
        )
      }
    }
    return item;
  }
  goNextQuestion(){
    let index = this.state.currentQuestion;
    this.setState({showResponse: false,currentQuestion: (index + 1) });
  }
  handleResponseClick(e){
    let currentFollowers = this.state.currentFollowers;
    if(e.target.dataset.states === 1 || e.target.dataset.states === true ){
      alert('response juste');
      this.setState({showResponse: false});
      this.goNextQuestion();
    }else{
      this.setState({showResponse: true });
    }
    this.setState({currentFollowers: Number( currentFollowers +  Number(e.target.dataset.action) )});
    setTimeout(() => {
      this.setState({oldFollowersNb: this.state.currentFollowers});
    }, 2200);
  }

  render(){
    return(
      <div className="" id="game__container">
        <section className="header">
          <a href="/">Accueil</a>
          <div className="game_data">
            <div className="username__domaine">
              <span className="username yellow-color">{this.props.match.params.username}</span>
              <span className="domaine">{this.state.questionnaire.name}</span>
            </div>
            <div className="user__followers">
              <span className="followers_nb">
                <CountUp className="yellow-color" start={this.state.oldFollowersNb} end={this.state.currentFollowers} duration={2} />
              </span>
              <span className="followers_abos"> followers</span>
            </div>
          </div>
        </section>
        <section className="content">
          <div className="question__wrap">
            {(this.state.showResponse === true) ? this.showExplication() : this.renderAllQuestions()}
            <div className="timer">
              - <span className="current">{this.state.currentQuestion + 1} </span> / <span className="total">{this.state.events.length}</span>
            </div>
          </div>
          <div className="response__wrap">
            {this.renderAllResponses()}
          </div>
        </section>
      </div>
    )
  }
}
export default GamePartie;