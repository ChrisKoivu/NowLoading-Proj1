import axios from 'axios'
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
/**import './App.css';*/
import Users from './Users';
import FilterUsers from './FilterUsers';

export default class App extends Component {
  constructor(props) {
    super(props);
    //Initialize the state in the constructor

    this.state = {
      searchTerm:"",
      users: [],
      data:[],
      authUser:[
        {
          email: "",
          password: ""
        }      
      ]
    };
    this.handleRoleChange = this.handleRoleChange.bind(this);
    this.filterUser = this.filterUser.bind(this);
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

  /**
   * filters user object on the admin board based on the 
   * letters entered. we are passing the search term state
   * to this function
   * @param {*} searchTerm 
   */
  filterUser(searchTerm){
      let users = this.state.data;
      this.setState({ searchTerm: searchTerm });      
      let filteredArray = this.user_filter(users, searchTerm);
      this.setState({
        users: filteredArray
      });      
  }

  /**
   * returns the user object whose name matches the 
   * search terms passed to this function
   * @param {*} users 
   * @param {*} searchTerm 
   */
  user_filter(users, searchTerm){
    let arr = [];
    users.map(function(fn){
      name = fn.name.toLowerCase();
      if(name.includes(searchTerm.toLowerCase())){
        arr.push(fn);
      }else{
        return users; 
      }
    })     
    return arr;
  }

  componentWillMount(){
    axios.get('/api/users')
      .then(response => {
        this.setState({
          users: response.data,
          data: response.data,
        })
     });

     
  }

  render() {
    return (      
      <div className="container">
        <FilterUsers searchTerm={this.state.searchTerm} onFilterUser ={this.filterUser} />
        <div className = "row">
           <Users users={this.state.users} onRoleChange={this.handleRoleChange} />
        </div>
      </div>
    );
}
}

ReactDOM.render(<App />, document.getElementById('admin-panel'));
