import React, { Component } from 'react';
import {Router,  Link } from "react-router-dom";
import ReactDOM from 'react-dom';
export default class Conversations extends Component {
  constructor(props){
    super(props);
    this.state = {conversations: []}
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/conversation/')
      .then( (response) => {
        console.log(response);
        this.setState({conversations: response.data})
      })
      .catch( (error) => {
        alert(error);
      });
  }
  renderFacebookLink(link){
    if(link != null){
      return (<a href={link} target="_blank"><div className="facebook__picto"></div></a>)
    }
  }
  renderInstagramLink(link){
    if(link != null){
      return (<a href={link} target="_blank"><div className="instagram__picto"></div></a>)
    }
  }
  renderConversations(){
    let data = this.state.conversations.map( (item) => {
      return (
        <div className="conversation__card" key={item.id}>
          <div className="conversation_avatar">
            <img src={ item.destinataire_picture } alt=""/>
          </div>
          <div className="data">
            <div className="user__data">
              <Link to={'/conversation/' + item.slug }><h3>{item.destinataire_name}</h3></Link>
              <h3 className="color-white">{item.destinataire_info}</h3>
            </div>
            <div className="user_followers">
              <span class="user_followers_nb">{item.destinataire_followers} K</span>
                <span className="heart"></span>
              <h4>Followers</h4>
            </div>
            <div className="user_network_links">
              {this.renderInstagramLink(item.destinataire_instagram_link)}
              {this.renderFacebookLink(item.destinataire_facebook_link)}
            </div>
          </div>
        </div>
      )
    });
    return data;
  }
  render() {
    return (
      <div className="full_width_container" id="conversations_presentation">
        <div className="" id="left__aside">
          <div id="jeu__">
            <span>JEU</span>
          </div>
          <div id="scroll-downs">
            <div className="trait">
              <span></span>
            </div>
            <div className="mousey">
              <div className="scroller"></div>
            </div>
            <div className="trait">
              <span></span>
            </div>
          </div>
          <div id="article__">
            <span>ARTICLE</span>
          </div>
        </div>
        <div className="" id="right__aside">
          {this.renderConversations()}
        </div>
      </div>
    );
  }
}
