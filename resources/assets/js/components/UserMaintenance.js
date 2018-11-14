import axios from 'axios'
import React, { Component } from 'react'
import User from './User'

class UserMaintenance extends Component {
    constructor () {
      super()
      this.state = {
        users: []
      }
    }

    componentDidMount () {
        
          axios.get('/api/users').then(response => {
            this.setState({
              users: response.data
            })
          })
  
      }

      
      listUsers(){
        return this.state.users.map(user => {
          return (
            <tr key={user.id} >
              <User user={this.user}/>
            </tr>
            
          );
          
        })
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
                  { this.listUsers() }
                
                </tbody>
              </table>
           </div>
        )
      }
    }

    export default UserMaintenance