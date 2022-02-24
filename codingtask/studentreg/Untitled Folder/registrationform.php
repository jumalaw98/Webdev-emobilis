<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="   bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

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


        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }
        .container-fluid {
            padding: 25px;
            background-color: lightblue;
            border-radius: 60px;
            box-shadow: 0 3px 10px;
        }

    </style>

</head>

<body>

<center> <h1> Student Registration Form </h1> </center>

<form>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <label>First Name:</label>
                <input type="text" placeholder="Enter First Name"   name="firstname"    required>
            </div>
            <div class="col-6">
                <label>Second Name:</label>
                <input type="text"  placeholder="Enter Second Name" name="secondname"   required>
            </div>
        </div>
        <div>
            <label>Email Address:</label>
            <input type="email" placeholder="Enter Email"   name="email"    required>
        </div>
        <div class="row">
             <div class="col-6">
                 <label>Password:</label>
                 <input type="password" placeholder="Enter Password"    name="password" required>
             </div>
             <div class="col-6">
                 <label>Confirm Password:</label>
                 <input type="password" placeholder="Confirm Password"  name="password" required>
             </div>
        </div>
        <div>
            <label><strong>Gender</strong></label><br>
            <input type="radio" name="gender">
            <label>Male</label>
            <input  type="radio"    name="female">
            <label>Female</label>
        </div>
        <div>
            <input type="checkbox">I aggree with the terms and conditions</input><br>
            <input type="checkbox">I want to receive Newsletters </input>
        </div>
        <div>
            <button type="submit" class="glow-on-hover">Register</button>
        </div>
        <div>
            <p class="small text-center">I have an account</p>
        </div>
        <a>
            <link rel="stylesheet" href="">
        </a>
        <button type="submit" class="glow-on-hover">Login</button>



    </div>

</form>

<footer class="text-center small">
    &copy; Jumalaw 2022
</footer>





     <!--
        <label>Username : </label>

        <input type="text" placeholder="Enter Username" name="username" required>

        <label>Password : </label>

        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>

        <input type="checkbox" checked="checked"> Remember me

        <button type="button" class="cancelbtn"> Cancel</button>

        Forgot <a href="#"> password? </a>
-->





</body>
</html>