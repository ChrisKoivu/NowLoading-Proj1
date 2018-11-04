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
            <li key={user.id} >
              {user.name}
            </li>
          );
        })
      }

      render () {
        
        return (
          <div className='container py-4'>
            <div className='row justify-content-center'>
              <div className='col-md-8'>
                <div className='card'>
                  <div className='card-header'>All projects</div>
                  <div className='card-body'>
                    <ul className='list-group list-group-flush'>
                     
                    { this.listUsers() }

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        )
      }
    }

    export default UserMaintenance