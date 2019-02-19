import React, { Component } from 'react';
import User from './User';

class Users extends Component {
  

  render() {
    let users;
    if(this.props.users){
      users = this.props.users.map(user => {
        return (
          <User  key={user.name} user={user} onRoleChange={this.props.onRoleChange}  />
        );
      });
    }
    return (
      <div className="users table-responsive">
        <h3>Users</h3>
        <table className="table table-striped table-sm">
          <tbody>
            
            {users}
          </tbody>
        </table>        
      </div>
    );
  }
}

/*
Users.propTypes = {
  users: React.PropTypes.array,
  onDelete: React.PropTypes.func
}*/

export default Users;