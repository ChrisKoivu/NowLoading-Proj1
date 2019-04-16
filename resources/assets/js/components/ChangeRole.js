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
        <form className = "d-flex" onSubmit ={this.handleSubmit.bind(this)}>
          <div className ="change-role input-group">
          <label htmlFor="change-role">Select New Role:</label>
          <select className = "form-control d-inline-block" ref = "role">
            <option value="default">default</option>
            <option value="volunteer">volunteer</option>
            <option value="admin">admin</option>  
          </select>
          
          
          <input type="submit" className = "btn btn-primary" value="Save" />
          </div>
          
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