import React, { Component } from 'react';

class FilterUsers extends Component { 

    constructor(props){
      super(props);
      this.handleChange=this.handleChange.bind(this);
    }

    handleChange(e) {
      this.props.onFilterUser(e.target.value);
    }	    

    render() {
      let searchTerm = this.props.searchTerm;
      return (     
          <form className = "d-flex">
            
           
            <label for="user_filter">User Name</label>
            <input
                type="text"
                name="user_filter"
                value={searchTerm}
                onChange={this.handleChange}
              />

            
            
          </form>
      );
    }
  

    



}

export default FilterUsers;
