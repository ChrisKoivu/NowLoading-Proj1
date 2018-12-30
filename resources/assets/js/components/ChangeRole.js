import React, { Component } from 'react';

class ChangeRole extends Component {
 
  constructor(props) {
    super(props);
  }

 
  handleSubmit(e){
    this.props.onChangeRole(this.refs.role.value, this.props.id);
    e.preventDefault();
  }

  render() {
      
    return (     
        <form onSubmit ={this.handleSubmit.bind(this)}>
          <select ref = "role">
            <option value="default">default</option>
            <option value="volunteer">volunteer</option>
            <option value="admin">admin</option>  
          </select>
          <input type="submit" value="Save" />
        </form>
    );
  }
}

/*

Users.propTypes = {
  users: React.PropTypes.array,
  onDelete: React.PropTypes.func
}*/

export default ChangeRole;