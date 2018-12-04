import axios from 'axios'
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserMaintenance from './UserMaintenance'

export default class App extends Component {

    componentDidMount () {
          console.log("component mounted");
          axios.get('/api/users').then(response => {
            this.setState({
              users: response.data
            })
          })
  
      }
    render() {
        return (
            <div className="container">
                <div className="row">
                <h2>User Maintenance</h2><br />
                  <UserMaintenance users={this.state.users} />
                </div>
            </div>
                   
        );
    }
}


ReactDOM.render(<App />, document.getElementById('admin-panel'));
