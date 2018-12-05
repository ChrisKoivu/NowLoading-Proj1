import axios from 'axios'
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Users from './Users'

export default class App extends Component {
    constructor(props) {
        super(props);
        //Initialize the state in the constructor
    
        this.state = {
          users: []
        }
    }


    componentDidMount () {          
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
                  <Users users={this.state.users} />
                </div>
            </div>                   
        );
    }
}


ReactDOM.render(<App />, document.getElementById('admin-panel'));
