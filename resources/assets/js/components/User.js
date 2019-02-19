import React from 'react';
import ChangeRole from './ChangeRole';

class User extends React.Component {
  constructor(props) {
    super(props);
    //Initialize the state in the constructor

    this.state = {
      currentUser: []   
    };
  }


  
  render() {
    return (
      <tr className="user d-flex">
        <td><strong>{this.props.user.name}</strong></td>
        <td>{this.props.user.email}</td>
        <td>{this.props.user.role}</td>     
        <td><ChangeRole id={this.props.user.id} onChangeRole={this.props.onRoleChange}/></td>  
      </tr>
    );
  }
}



export default User;
