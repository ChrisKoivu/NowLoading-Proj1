
import React, { Component } from 'react'
import User from './User'

class UserMaintenance extends Component {
    constructor () {
      super()
      this.state = {
        users: []
      }
    }

   

      
      

      render () {
        return (
           <div className="table-responsive">
              <table className="table table-striped table-sm">
                <thead>
                   <tr>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Role</th>
                   </tr>
                </thead>
                <tbody>
                  
                
                </tbody>
              </table>
           </div>
        )
      }
    }

    export default UserMaintenance