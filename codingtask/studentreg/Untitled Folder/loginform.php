<?php

include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login Page </title>

  <style>

    Body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color: pink;
    }

    form {
      margin-top: 100px;
      margin-bottom: 100px;
      margin-right: 150px;
      margin-left: 80px;

    }
    input[type=text], input[type=password], input[type=email], input[type=button] {
      width: 100%;
      margin: 8px 0;
      padding: 12px 20px;
      display: inline-block;
      border: 2px solid green;
      box-sizing: border-box;
      border-radius: 10px;
    }

    button {
      background-color: #4CAF50;
      width: 100%;
      height: auto;
      color: orange;
      padding: 15px;
      margin: 10px 0px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    button:hover {
      display: flex;
      align-items: center;
      justify-content: center;

    }
    .glow-on-hover {
      width: 100%;
      height: auto;
      border: none;
      outline: none;
      color: #fff;
      background: greenyellow;
      cursor: pointer;
      position: relative;
      z-index: 0;
      border-radius: 10px;
    }

    .glow-on-hover:before {
      content: '';
      background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
      position: absolute;
      top: -2px;
      left:-2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing 20s linear infinite;
      opacity: 0;
      transition: opacity .3s ease-in-out;
      border-radius: 10px;
    }

    .glow-on-hover:active {
      color: #000
    }

    .glow-on-hover:active:after {
      background: transparent;
    }

    .glow-on-hover:hover:before {
      opacity: 1;
    }

    .glow-on-hover:after {
      z-index: -1;
      content: '';
      position: absolute;
      /*width: 100%;*/
      /*height: 100%;*/
      background: #111;
      left: 0;
      top: 0;
      border-radius: 10px;
    }

    @keyframes glowing {
      0% { background-position: 0 0; }
      50% { background-position: 400% 0; }
      100% { background-position: 0 0; }
    }


    /*!*.cancelbtn {*!*/
    /*!*  width: auto;*!*/
    /*!*  padding: 10px 18px;*!*/
    /*!*  margin: 10px 5px;*!*/
    /*}*/
    .container-fluid {
      padding: 25px;
      background-color: lightblue;
      border-radius: 50px;
      box-shadow: 0 3px 10px;
    }

  </style>

</head>

<body>

<center> <h1> Student Login Form </h1> </center>

<form>

  <div class="container-fluid">

    <label>Username : </label>

    <input type="text" placeholder="Enter Username" name="username" required>

    <label>Password : </label>

    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="checkbox" checked="checked"> Remember me
    <button type="submit" class="glow-on-hover" >Login</button>

    <p class="text-center"> I don't have an account <a href="registrationform.php">Register</a></p>



    <button type="reset" class="cancelbtn glow-on-hover"> Cancel</button>

    Forgot <a href="#"> password? </a>

  </div>

</form>

</body>


</body>
</html>