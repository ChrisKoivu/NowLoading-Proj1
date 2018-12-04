import React, { Component } from "react";
import Form from "./Form";
/* Stateless component or pure component
 * { product } syntax is the object destructing
 */
const User = ({ user }) => {
  //if the props for product is null, return Product doesn't exist
  if (!user) {
  }

  //Else, display the product data

  
  return (
    <div>
      <tr>
        <td> {user.name} </td>
        <td> {user.email} </td>
        <td> {user.role} </td>
      </tr>

      <Form />
    </div>
  );
};

export default User;
