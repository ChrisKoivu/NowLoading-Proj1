import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserMaintenance from './UserMaintenance'

export default class App extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                <h2>User Maintenance</h2><br />
                  <UserMaintenance />
                </div>
            </div>
                   
        );
    }
}


ReactDOM.render(<App />, document.getElementById('admin-panel'));
