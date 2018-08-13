import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
class Game extends Component{
  constructor(){
    super();
    this.state = {username: '', questionnaire_slug: '', questionnaires: []}
  }
  componentDidMount(){
    axios.get('http://8-24.ch/api/questionnaires/')
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
      <div id="block-login" className={(this.props.toggler ? 'active' : 'hidden')} >
        <h2>La règle est simple ...</h2>
        <p id="rules-text">Ce jeu vous permettra de déterminer une stratégie pour vous lancer en tant qu’influenceur. Parmi les réponses certaines vous feront gagner des abonnés, d’autres peuvent vous en faire perdre. Vous allez devoir faire les bons choix. A vous de jouer !</p>
        <div className="avatar"></div>
        <input className="field-login" type="text" onKeyUp={this.handleUserName.bind(this)} />
        <select className="select__domain" onChange={this.handleQuestionnairesList.bind(this)}>
          {this.renderQuestionnairesList()}
        </select>
        <Link className="" id="landing-focus-text" to={'/game/' + this.state.questionnaire_slug + '/' + this.state.username}>Go !</Link>
      </div>
    )
  }
}
export default Game;