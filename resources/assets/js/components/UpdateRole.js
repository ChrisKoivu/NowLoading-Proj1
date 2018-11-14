import axios from 'axios'
import React, { Component } from 'react'

class UpdateRole extends Component {
    constructor () {
      super()
      this.state = {
        role: ''
      }
    }

    componentDidMount () {
        
         //
  
      }

      displayForm(){
          return (
            <td>
                       <div id ="admin-form-wrap">
                        <form method="post" action="">                       
                         <div className="admin form-group col-md-6"> 
                            
                           
                             <label for="change-role">Select New Role:</label>
                          <select className="form-control d-inline-block" id="change-role" name="role"
                          style = "width:150px;">
                              <option>default</option>
                              <option>volunteer</option>
                              <option>admin</option>
                          </select>
                        </div>
                        <div className="admin form-group col-md-2">
                              <button type="submit" name="role-submit" class="btn btn-primary">Save</button>
                        </div> 
                        </form>
                        </div>
                      </td>
                    
            
          );
    
      }

      render () {
        return (
           
                <tr>
                  { this.displayForm() }
                </tr>
                      )
      }
    }

    export default UpdateRole