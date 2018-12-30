import axios from 'axios'
import React from 'react';
/**import './App.css';*/
import Users from './Users';



class App extends React.Component {
  constructor(props) {
    super(props);
    //Initialize the state in the constructor

    this.state = {
      users: []   
    };
    this.handleRoleChange = this.handleRoleChange.bind(this);
  }

  /**
   * receives an array of users and sets the role to 
   * the passed role argument of the selected user
   * passed through the index, since javascript find()
   * is not compatible with IE.
   * @param {*} users array of users
   * @param {*} role new role name for the user
   * @param {*} id the id of the element we want to change
   */
  changeRole(users, role, id){
    for (let i = 0; i < users.length; i++) {
      let match = (users[i].id === id);
      if (match) {
        users[i].role = role;
        return users;
      }
    }
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
    /*axios.get('/api/users').then(response => {
            this.setState({
              users: response.data
            })
     });*/

  
    this.setState({
      users: [
        {
          id: 1,
          name: "Fred",
          email: "fred@google.com",
          role: "default"
        },
        {
          id: 2,
          name: "Mark",
          email: "fred@google.com",
          role: "default"
        },
        {
          id: 3,
          name: "David",
          email: "fred@google.com",
          role: "default"
        }
      ]
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
