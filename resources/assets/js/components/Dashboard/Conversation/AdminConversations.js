import React, { Component } from 'react';
import axios from 'axios';
import { Link } from "react-router-dom";
export default class AdminConversations extends Component {
  constructor(props){
    super(props);
    this.state = {conversations: []};
  }
  componentDidMount(){
    axios.get('http://localhost:8000' + '/api/conversation')
      .then( (response) => {
        // handle success
        console.log(response);
        this.setState({conversations: response.data})
      })
      .catch( (error) => {
        // handle error
        console.log(error);
      })
  }
  renderConversations(){
      let data = this.state.conversations.map( (item) => {
        let bg = {backgroundImage: item.destinataire_picture};
        return (<div className="col-sm-6">
          <div className="card">
            <div className="card-header">
              <Link to={"/dashboard/conversation/" +item.slug}>
                <h3 className="card-title">{ item.destinataire_name }</h3>
              </Link>
            </div>
            <div className="card-body">
              <img src={item.destinataire_picture} />
            </div>
          </div>
        </div>)
      });
    console.log(data);
    return data;
  }
  render() {
    return (
      <div className="container">
        <div className="page-header">
          <h1 className="page-title">
            Conversations
          </h1>
        </div>
        <div className="row row-cards">
          <div className="col-lg-12">
            <form action="https://httpbin.org/post" method="post" className="card">
              <div className="card-header">
                <h3 className="card-title">Créer une conversation</h3>
              </div>
              <div className="card-body">
                <div className="row">
                  <div className="col-lg-12">
                    <div className="form-group">
                      <label className="form-label">Nom du destinataire</label>
                      <input type="text" className="form-control" name="example-text-input" placeholder="Text.." />
                    </div>
                    <div className="form-group">
                      <label className="form-label">Nom de l'expéditeur</label>
                      <input type="text" className="form-control" name="example-text-input" placeholder="Text.." />
                    </div>
                    <div className="form-group">
                      <div className="input-group">
                                       <span className="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" className="btn btn-primary">
                                           <i className="fa fa-picture-o"></i> Choose
                                         </a>
                                       </span>
                        <input id="thumbnail" className="form-control" type="text" name="filepath" />
                      </div>
                      <img id="holder" />
                        <label className="form-label">Avatar du destinataire</label>
                        <input type="text" className="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, she turned me into a newt." disabled="" />
                    </div>
                    <div className="form-group">
                      <label className="form-label">Avatar de l'expéditeur</label>
                      <input type="text" className="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, how'd you become king, then?" readonly="" />
                    </div>
                  </div>
                </div>
              </div>
              <div className="card-footer text-right">
                <div className="d-flex">
                  <a href="javascript:void(0)" className="btn btn-link">Cancel</a>
                  <button type="submit" className="btn btn-primary ml-auto">Send data</button>
                </div>
              </div>
            </form>
          </div>
          <div className="col-lg-12">
            <div className="alert alert-primary">Conversations existantes.</div>
          </div>
          {this.renderConversations()}
        </div>
      </div>
    );
  }
}