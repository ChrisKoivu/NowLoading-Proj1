import axios from 'axios'
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
/**import './App.css';*/
import Users from './Users';



export default class App extends Component {
  constructor(props) {
    super(props);
    //Initialize the state in the constructor

    this.state = {
      users: [],
      user:[],
      authUser:[
        {
          email: "",
          password: ""
        }      
      ]
    };
    this.handleRoleChange = this.handleRoleChange.bind(this);
  }

  /**
   * receives an array of users and sets the role to 
   * the role argument of the selected user
   * selected by the index
   * @param {*} users array of users
   * @param {*} role new role name for the user
   * @param {*} id the id of the element we want to change
   */
  changeRole(users, role, id){    
    for (let i = 0; i < users.length; i++) {
      let match = (users[i].id === id);
      if (match) {
        users[i].role = role;        
        this.updateUser(id, role);        
      }
    }    
    return users;
  }

  updateUser(id, role){     
    axios.patch('/api/users/?id=' + id + '&role=' + role)
    .then(response => {
      this.setState({
        user: response.data        
      })
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  handleLogin(){

  }

  handleRoleChange(role, id) {
    let users = this.state.users;
    // change the role of the desired user by id
    let newUsersArray = this.changeRole(users, role, id);
      // save the updated array
    this.setState(
      {users: newUsersArray}
    );
  }

  componentWillMount(){
    axios.get('/api/users')
      .then(response => {
        console.log(response);
        this.setState({
          users: response.data
        })
     });

     
  }

  render() {
    return (
      <div className="container">
        <div className = "row">
           <Users users={this.state.users} onRoleChange={this.handleRoleChange} />
        </div>
      </div>
    );
}
}

ReactDOM.render(<App />, document.getElementById('admin-panel'));
