import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import Conversations from './Conversations';
import Game from './Game';
export default class Landing extends Component {
  constructor(){
    super();
    this.state = {articles: [], toggler: false}
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/articles/')
      .then( (response) => {
        console.log(response);
        this.setState({articles: response.data});
      })
      .catch( (error) => {
      });
  }
  renderAllArticles(){
    let items = this.state.articles.map( (item) => {
      return (
        <article className="grid_article">
          <div className="article__cover">
            <img src={item.cover} alt=""/>
          </div>
          <div className="article__title">
            <h3>{item.title}</h3>
            <h4>{item.accroche}</h4>
          </div>
          <div className="article__content" dangerouslySetInnerHTML={{__html: item.content}}  />
        </article>
      );
    });
    return items;
  }
  handleToggler(){
    var stateT = true;
    this.setState({toggler: stateT});
  }
  render() {
    return (
      <div className="container">
        <section id="game__CTA">
          <div id="particles-js"></div>
          <div id="main">
            <div className="block-text">
              <h1>Etre influenceur, ça vous tente ?</h1>
              <h5>Les influenceurs sont de plus en plus nombreux sur le web. Du débutant au professionnel, ArcInfo en a rencontré trois, originaires de la région.
                Ces nouvelles stars d’internet partagent, sur leur blog et sur les réseaux sociaux, leur passion. Chacun dans leur domaine et à leur manière, ils inspirent ceux qui les suivent. Mais comment font-ils ?
              </h5>
              <div id="landing-form-interact">
                <div onMouseEnter={this.handleToggler.bind(this)} class="btn-commencer">
                  <span id="landing-focus-text">Jouer maintenant</span>
                </div>
              </div>
              <div className="scroll-downs">
                <div className="mousey">
                  <div className="scroller" />
                </div>
              </div>
            </div>
          </div>
          <Game toggler={this.state.toggler} />
        </section>
        <div className="row justify-content-center" id="conversations__list">
          <Conversations />
        </div>
        <div className="articles">
          {this.renderAllArticles()}
        </div>
      </div>
    );
  }
}

