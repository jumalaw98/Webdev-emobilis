<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/dashstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body class="bg-primary">
      <div class="container p-4">
          <div class="card">
              <div class="card-body bg-white">
                 <div class="row">
                     <div class="col-lg-5">
                         <div>
                             <img src="images/flower.jpg" alt="Login" width="400" height="400">
                         </div>
                     </div>
                     <div class="col-lg-7">
                         <div class="text-center">
                             <h4 class="grey">Create an Account</h4>
                         </div>
                         <form action="handle_registration.php" method="post">
                             <div class="row mb-3">
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="text" name="firstName" placeholder="First Name" required>
                                 </div>
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="text" name="secondName" placeholder="Second Name" required>
                                 </div>

                             </div>
                             <div class="row mb-3">
                                 <div>
                                 <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" required>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                                 </div>
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="password" name="confirmPass" placeholder="Confirm Password" required>
                                 </div>
                             </div>

                             <div class="row mb-3">
                                 <input type="submit" name="register" class= "rounded-pill btn btn-primary" value="Register">
                             </div>
                             <table><tr>
                                     <td style="border-bottom: 1px solid gray; width: 47%">&nbsp;</td>
                                     <td style="vertical-align:middle;text-align:center" rowspan="2">or</td>
                                     <td style="border-bottom: 1px solid gray; width: 47%">&nbsp;</td>
                                 </tr><tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr></table>
                             <div class="row mb-3">
                                 <button type="button" class="rounded-pill btn btn-danger"> <i class="fa fa-google"></i>  Register with Google </button>
                             </div>

                             <div class="row mb-3">
                                 <button type="button" class="rounded-pill btn btn-dark"> <i class="fa fa-github"></i>  Register with GitHub </button>
                             </div>

                             <div class="row mb-3">
                                 <button type="button" class="rounded-pill btn btn-primary"> <i class="fa fa-facebook"></i>  Register with Facebook </button>
                             </div>

                         </form>
                         <hr>
                         <div class="text-center">
                             <a class="small" href="">Forgot password?</a>
                         </div>
                         <div class="text-center">
                             <a class="small" href="index.php">Already have an account? Login</a>
                         </div>




                     </div>

                 </div>
              </div>
          </div>


      </div>


</body>
</html>