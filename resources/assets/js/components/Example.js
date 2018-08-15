import "babel-polyfill";
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import Landing from './Application/Landing';
import Messagerie from './Application/Messagerie';
import Game from './Application/Game';
import GamePartie from './Application/GamePartie';
export default class Example extends Component {
    render() {
        return (
          <Router>
              <div>
                <Route exact path="/game" component={Game}/>
                <Route exact path="/game/:slug/:username" component={GamePartie}/>
                <Route exact path="/" component={Landing} />
                <Route path="/conversation/:slug" component={Messagerie} />
              </div>
          </Router>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
