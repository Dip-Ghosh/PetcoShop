@extends('layout.homelayout')

@section('content')

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width:50%;
    padding: 15px;
    margin: 5px 5px 5px 0px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: center;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5px 5px 5px 5px; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 100%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
     position: relative;

    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<center>


<div id="id01" class="container">
  
  <form class="modal-content" >
    <div class="container">
   
      <h2>Please fill in this form to create an account.</h2>
      <hr>
      <div class="container-fluid">
          <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" required><br>

      </div>
      <div class="container-fluid">
          <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
      

    <div class="container-fluid">
          <label for="psw-repeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </div>
    <div class="container-fluid">
              
      <label>
        <input type="checkbox" unchecked="unchecked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    </div>

      <div class="clearfix">
    
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

@endsection