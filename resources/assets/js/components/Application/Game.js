import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
class Game extends Component{
  constructor(){
    super();
    this.state = {username: '', questionnaire_slug: '', questionnaires: []}
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/questionnaires/')
      .then( (response) => {
        console.log(response);
        this.setState({questionnaires: response.data, questionnaire_slug: response.data[0].slug});
      })
      .catch( (error) => {
      });
  }
  handleQuestionnairesList(e){
    this.setState({questionnaire_slug: e.target.value});
  }
  renderQuestionnairesList(){
    let items = this.state.questionnaires.map( (item) => {
      return <option key={item.id} value={item.slug}>{item.name}</option>
    });
    return items;
  }
  handleUserName(e){
    let val = e.target.value;
    this.setState({ username: val });
  }
  handleStartGame(){
    this.props.history.push('/game/' + this.state.questionnaire_slug + '/' + this.state.username);
  }

  propsHandler(){
    this.props.toggler = true;
  }

  render(){
    return(
      <div id="block-login">
        <div className="game__image">
          <img src="/img/photos/game_cta.png" alt="jeu image" />
        </div>
        <div className="content">
          <h2>Testez vos talents d'influenceurs</h2>
          <input className="field-login" type="text" onKeyUp={this.handleUserName.bind(this)} placeholder="Inscrivez votre nom" />
          <Link className="" id="go__to__play" to={'/game/' + 'beaute-naturelle' + '/' + this.state.username}>Jouer !</Link>
          <p id="rules-text">Ce jeu vous permettra de déterminer une stratégie pour vous lancer en tant qu’influenceur. Parmi les réponses certaines vous feront gagner des abonnés, d’autres peuvent vous en faire perdre. Vous allez devoir faire les bons choix. A vous de jouer !</p>
        </div>
      </div>
    )
  }
}
export default Game;