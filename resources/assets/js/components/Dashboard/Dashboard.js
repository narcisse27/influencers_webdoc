import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import AdminHome from './AdminHome';
import AdminConversations from './Conversation/AdminConversations';
import AdminConversation from './Conversation/AdminConversation';
export default class Dashboard extends Component {
  render() {
    return (
      <Router>
        <div>
        <div className="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-lg-3 ml-auto">
                <form className="input-icon my-3 my-lg-0">
                  <input type="search" className="form-control header-search" placeholder="Search…" tabIndex="1" />
                    <div className="input-icon-addon">
                      <i className="fe fe-search"></i>
                    </div>
                </form>
              </div>
              <div className="col-lg order-lg-first">
                <ul className="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li className="nav-item">
                    <a href="http://localhost:8000/dashboard" className="nav-link active"><i className="fe fe-home"></i> Home</a>
                  </li>
                  <li className="nav-item">
                    <a href="javascript:void(0)" className="nav-link" data-toggle="dropdown"><i className="fe fe-box"></i> Interface</a>
                    <div className="dropdown-menu dropdown-menu-arrow">
                      <a href="./cards.html" className="dropdown-item ">Cards design</a>
                      <a href="./charts.html" className="dropdown-item ">Charts</a>
                      <a href="./pricing-cards.html" className="dropdown-item ">Pricing cards</a>
                    </div>
                  </li>
                  <li className="nav-item dropdown">
                    <a href="javascript:void(0)" className="nav-link" data-toggle="dropdown"><i className="fe fe-calendar"></i> Components</a>
                    <div className="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" className="dropdown-item ">Maps</a>
                      <a href="./icons.html" className="dropdown-item ">Icons</a>
                      <a href="./store.html" className="dropdown-item ">Store</a>
                      <a href="./blog.html" className="dropdown-item ">Blog</a>
                      <a href="./carousel.html" className="dropdown-item ">Carousel</a>
                    </div>
                  </li>
                  <li className="nav-item dropdown">
                    <a href="./form-elements.html" className="nav-link"><i className="fe fe-check-square"></i> Forms</a>
                  </li>
                  <li className="nav-item">
                    <a href="./gallery.html" className="nav-link"><i className="fe fe-image"></i> Gallery</a>
                  </li>
                  <li className="nav-item">
                    <Link to="/dashboard/conversations" className="nav-link"><i className="fe fe-file-text"></i> Conversations</Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <Route exact path="/" component={AdminHome} />
          <Route exact path="/dashboard/conversations" component={AdminConversations} />
          <Route path="/dashboard/conversation/:slug" component={AdminConversation} />
        </div>
      </Router>
    );
  }
}

if (document.getElementById('dashboard')) {
  ReactDOM.render(<Dashboard />, document.getElementById('dashboard'));
}
