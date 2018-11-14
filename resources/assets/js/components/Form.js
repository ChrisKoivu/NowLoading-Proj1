import React from "react";
import ReactDOM from "react-dom";



class Form extends React.Component {
  constructor(props) {
    super(props);
    //Initialize the state in the constructor

    this.state = {
      newRole: {
        role: ""
      }
    };
  }

  /* This method is invoked when submit button is pressed */
  handleSubmit(e) {
    //preventDefault prevents page reload
    e.preventDefault();
    /*A call back to the onAdd props. The control is handed over
     *to the parent component. The current state is passed 
     *as a param
     */
    this.props.onAdd(this.state.newRole);
  }

  render() {
    return (
      <form>
        <table className="roleform">
          <tr>
            <td>
              <label>New Role:</label>
            </td>
            <td>
              <input type="text" name="role" />
            </td>
            <td>
              <button type="submit">Submit</button>
            </td>
          </tr>
        </table>
      </form>
    );
  }
}
export default Form;
