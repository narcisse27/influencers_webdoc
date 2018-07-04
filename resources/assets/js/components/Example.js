import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Messagerie from './Application/Messagerie';
export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header"></div>
                            <div className="card-body">
                                <Messagerie/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
