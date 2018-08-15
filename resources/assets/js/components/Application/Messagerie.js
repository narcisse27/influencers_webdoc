import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
class Messagerie extends Component{
  constructor(){
    super();
    this.state = {
      conversation: [],
      count: 0,
      messages: [
      ],
      messagesToShow: [],
      users: [
      ]
    }
  }

  componentWillUnmount(){
    clearInterval(this.timer);
  }
  refreshMessagesStates(){
    this.state.conversation.messages.map( (item) => {
      console.log(item);
    });
    let items = this.state.conversation.messages.map( (item) => {
      if(item.timeToAppear <= this.state.count && item.tappingAt < this.state.count && item.tapping == true)
      {
        item.tapping = false;
      }
      if(item.timeToAppear < this.state.count){
        item.rendered = true;
      }
      return item;
    });
    this.setState({messages: items});
  }
  tick () {
    this.refreshMessagesStates();
    let itemsToShow = this.state.conversation.messages.filter( (item) => {
      if(item.timeToAppear <= this.state.count || (item.tappingAt <= this.state.count && item.tapping === true)){
        if(item.timeToAppear < this.state.count){
          item.rendered = true;
        }
        return item
      }
    });
    this.setState({count: (this.state.count + 0.1), messagesToShow: itemsToShow});
  }
  componentDidMount(){
    axios.get('http://8-24.ch/api/conversation/' + this.props.match.params.slug)
      .then( (response) => {
        console.log(response);
        this.setState({conversation: response.data})
      })
      .catch( (error) => {
        alert(error);
      });
    setInterval(this.tick.bind(this), 1000)
  }
  renderMessageWrap(message, type){
    return (
      <div className="message-wrap" >
        <div title={message.user_name} className={"message " +type +" "+ (message.rendered ? '' : ' arriving')}>
          <p>{message.content}</p>
        </div>
      </div>
    )
  }
  tappingPoints(){
    return (<div className="message-wrap">
      <div className="message tapping">
        <span className="tip"></span>
        <span className="tip"></span>
        <span className="tip"></span>
      </div>
    </div>)
  }

  renderingMessages(){
    let messages = this.state.messagesToShow.map( (message) => {
      if(!message.tapping) {
        if (message.user_name === this.state.conversation.expediteur_name) {
          return this.renderMessageWrap(message, 'sended');
        }
        if (message.user_name != this.state.conversation.expediteur_name) {
          return this.renderMessageWrap(message, 'recieved');
        }
      }else{
        return this.tappingPoints();
      }
    });
    return messages;
  }
  render(){
    return(
      <div className="messagerie-wrap">
        <header className="messagerie-header">
          <div className="icon">
            <img src={this.state.conversation.destinataire_picture} alt={this.state.conversation.destinataire_name} title={this.state.conversation.destinataire_name} />
          </div>
          <div className="data__block">
            <div className="title">
              <div className="main__data">
                <h3 className="yellow-color">{this.state.conversation.destinataire_name}</h3>
                <span className="domaine">{this.state.conversation.destinataire_info}</span>
              </div>
              <div className="second__data">
                <div className="publications">
                  <span className="yellow-color">{this.state.conversation.destinataire_publications}</span> <span>  publications</span>
                </div>
                <div className="followers">
                  <span className="yellow-color">{this.state.conversation.destinataire_followers} K</span> <span>  followers</span>
                </div>
              </div>
            </div>
          </div>
          <Link to="/" className="link__back">Retour</Link>
        </header>
        <div className="messagerie-body">
          {this.renderingMessages()}
        </div>
      </div>
    )
  }
}
export default Messagerie;