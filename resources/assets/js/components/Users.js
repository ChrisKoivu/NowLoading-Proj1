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
      <div className="users table-responsive">
            <h2>User Maintenance</h2><br />
            <table className="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
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