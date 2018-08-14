import React, { Component } from 'react';
import CountUp from 'react-countup';
class GamePartie extends Component{
  constructor(){
    super();
    this.state = {
      showFailure: false,
      showSuccess: false,
      showRightAndFalsesResponses: false,
      username: '',
      showResponse: false,
      questionnaire_slug: '',
      questionnaire: {},
      oldFollowersNb: 100,
      currentFollowers: 100,
      currentQuestion: 0,
      events: []
    }
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/questionnaire/' + this.props.match.params.slug)
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
            <div className="question__image" dangerouslySetInnerHTML={{__html: this.state.events[i].question.media }} />
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

  checkIfEndGame(){
      if(this.state.currentFollowers <= 100){
        this.setState({showFailure: true});
      }else{
        this.setState({showSuccess: true});
      }
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
            <div id="explication__content">{this.state.events[i].question.response}</div>
            <span id="next-question__CTA" onClick={this.goNextQuestion.bind(this)} >Suivant</span>
          </div>
        )
      }
    }
    return item;
  }
  goNextQuestion(){
    let index = this.state.currentQuestion;
    this.setState({showResponse: false, currentQuestion: (index + 1) });
//      this.checkIfEndGame();
  }
  handleResponseClick(e){
    let currentFollowers = this.state.currentFollowers;
    if( Number(e.target.dataset.states) === 1 || e.target.dataset.states === true ){
      this.goNextQuestion();
      this.setState({showResponse: false});
    }else{
      this.setState({showResponse: true });
    }
    this.setState({currentFollowers: Number( currentFollowers +  Number(e.target.dataset.action) )});
    setTimeout(() => {
      this.setState({oldFollowersNb: this.state.currentFollowers});
    }, 2200);
    if(this.state.currentQuestion + 1 >= this.state.events.length){
      alert("check engame");
      this.checkIfEndGame();
    }
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
            { this.renderAllQuestions()}
            <div className="timer">
              - <span className="current">{this.state.currentQuestion + 1} </span> / <span className="total">{this.state.events.length}</span>
            </div>
          </div>
          <div className="response__wrap">
            {this.renderAllResponses()}
          </div>
        </section>
        <section className={"response__modal " + (this.state.showResponse ? 'active' : 'hidden') }>
          <h4>Réponse : </h4>
          <p>
            { (this.state.showResponse === true) ? this.showExplication() : '' }
          </p>
        </section>
        <section id="message__success" className={(this.state.showSuccess ? 'active' : 'hidden') }>
          <div className="animation" />
          <h3>
            Félicitations !
          </h3>
          <p>
            Vous avez obtenu un nombre suffisant d’abonnés pour continuer votre carrière d’influenceur ! Pour connaitre les trucs et astuces de nos blogueurs neuchâtelois, allez jeter un œil sur les différentes conversations et portraits de ces acteurs du web. Vous pouvez également en savoir plus grâce à notre article sur ce modèle économique en plein développement. Des experts en la matière nous ont donné leur avis sur la question.
          </p>
        </section>
        <section id="message__failure" className={(this.state.showFailure ? 'active' : 'hidden') }>
          <div className="animation" />
          <h3>Aie !</h3>
          <p>
            Peu d’abonnés ont été convaincus par vos réponses. Allez voir comment Paloma, Jorge et Wallace font pour se démarquer. De leur interview par SMS, à leur portrait sur Arcinfo, ils nous livrent leurs secrets. Vous pouvez également en savoir plus grâce à notre article sur ce modèle économique en plein développement. Des experts en la matière nous ont donné leur avis sur la question.
          </p>
        </section>
      </div>
    )
  }
}
export default GamePartie;