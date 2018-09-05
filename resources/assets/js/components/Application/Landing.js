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
            {item.accroche != null ? <h4>{item.accroche}</h4> : ''}
          </div>
          <div className="article__content" dangerouslySetInnerHTML={{__html: item.content}}  />
        </article>
      );
    });
    return items;
  }
  handleToggler(){
    this.setState({toggler: true});
  }
  handleOutLanding(){
    this.setState({toggler: false});
  }
  render() {
    return (
      <div className="container">
        <section id="game__CTA">
          <div id="particles-js"></div>
          <div id="game__CTA__footer"></div>
          <div id="main">
            <div className="block-text">
              <h1>Etre influenceur, ça vous tente ?</h1>
              <h5>Les influenceurs sont de plus en plus nombreux sur le web. Du débutant au professionnel, ArcInfo en a rencontré trois, originaires de la région.
                Ces nouvelles stars d’internet partagent, sur leur blog et sur les réseaux sociaux, leur passion. Chacun dans leur domaine et à leur manière, ils inspirent ceux qui les suivent. Mais comment font-ils ?
              </h5>
              <div className="scroll-downs">
                <div className="mousey">
                  <div className="scroller"/>
                </div>
                <p> Connaissez-vous les influenceurs de la région de Neuchâtel ? </p>
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
        <footer className="footer">
          <span className="arc__info">
            <span className="text">
              porposé par
            </span>
            <a href="https://www.arcinfo.ch/" target="_blank">
              <img src="/img/arcinfo.png" alt=""/>
            </a>
          </span>
          <span className="oye">
            <span className="text">
              pensé et conçu par
            </span>
            <a href="https://www.oye.agency/" target="_blank">
              <img src="/img/logo-oye.svg" alt=""/>
            </a>
          </span>
        </footer>
      </div>
    );
  }
}

