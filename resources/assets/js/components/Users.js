import React, { Component } from 'react';
import User from './User';

class Users extends Component {
  

  render() {
    let users;
    if(this.props.users){
      users = this.props.users.map(user => {
        console.log(user);
        return (
          <User  key={user.name} user={user} />
        );
      });
    }
    return (
      <div className="users">
        <h3>Users</h3>
        <table>{users}</table>
        
      </div>
    );
  }
}

/*

Projects.propTypes = {
  projects: React.PropTypes.array,
  onDelete: React.PropTypes.func
}*/

export default Users;