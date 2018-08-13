import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import AdminHome from './AdminHome';
import AdminConversations from './Conversation/AdminConversations';
import AdminConversation from './Conversation/AdminConversation';
import AdminGame from './Jeu/AdminGame';
import AdminQuestionnaire from './Jeu/AdminQuestionnaire';
import AdminArticles from './Articles/AdminArticles';
export default class Dashboard extends Component {
  render() {
    return (
      <Router>
        <div>
        <div className="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-lg order-lg-first">
                <ul className="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li className="nav-item">
                    <a href="http://localhost:8000/dashboard" className="nav-link active"><i className="fe fe-home"></i> Home</a>
                  </li>
                  <li className="nav-item">
                    <Link to="/dashboard/game" className="nav-link"><i className="fe fe-image"></i> Jeu</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/dashboard/conversations" className="nav-link"><i className="fe fe-file-text"></i> Conversations</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/dashboard/articles" className="nav-link"><i className="fe fe-file-text"></i> Article</Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <Route exact path="/" component={AdminHome} />
          <Route exact path="/dashboard/conversations" component={AdminConversations} />
          <Route path="/dashboard/conversation/:slug" component={AdminConversation} />
          <Route exact path="/dashboard/game" component={AdminGame} />
          <Route exact path="/dashboard/game/:slug" component={AdminQuestionnaire} />
          <Route exact path="/dashboard/articles" component={AdminArticles} />
        </div>
      </Router>
    );
  }
}

if (document.getElementById('dashboard')) {
  ReactDOM.render(<Dashboard />, document.getElementById('dashboard'));
}
