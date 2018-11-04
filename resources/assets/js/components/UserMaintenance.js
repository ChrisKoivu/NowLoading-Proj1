import axios from 'axios'
import React, { Component } from 'react'

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
        console.log(this.state.users);
        return this.state.users.map(user => {
          return (
            <tr key={user.id} >
              <td>
               {user.name}
              </td>
              <td>
                {user.email}
              </td>
              <td>
                {user.role}
              </td>
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