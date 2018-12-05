import React from 'react';

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
      <tr className="user">
        <td><strong>{this.props.user.name}</strong></td> <td>{this.props.user.email}</td><td>{this.props.user.role} </td>
      </tr>
    );
  }
}



export default User;
