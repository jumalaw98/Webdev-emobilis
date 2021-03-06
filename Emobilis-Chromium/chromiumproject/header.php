<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>


    <link rel="stylesheet" href="css/dashstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>



</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 bg-primary">
            <ul class="nav flex-column">
                <li class="nav-item stylenav ">
                    <a aria-current="page" class="nav-link active" href="#">
                        <i class="fa fa-chrome fa-3x text-white "></i>
                        <span class="h4 text-white">JUma Law98</span>
                    </a>
                </li>
                <hr>

                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-dashboard fa-lg text-white"></i>
                        <span class="text-white">Dashboard</span>

                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-users fa-lg text-white"></i>
                        <span class="text-white">Participants</span>


                    </a>
                </li>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cogs fa-lg text-white"></i>
                        <span class="text-white">Components</span>

                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-file fa-lg text-white"></i>
                        <span class="text-white">Documents</span>
                    </a>
                </li>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart fa-lg text-white"></i>
                        <span class="text-white">Charts</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-clipboard fa-lg text-white"></i>
                        <span class="text-white">Forms</span>
                    </a>
                </li>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-wrench fa-lg text-white"></i>
                        <span class="text-white">Settings</span>

                    </a>

                </li>
            </ul>

        </div>

        <div class="col-9 bg-light">
            <div class="row bg-white p-2">

                <div class="col-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-8 form-control me-2" type="search" placeholder="Search for ... " aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>

                </div>
                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger ">3+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                            <i class="fa fa-envelope fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger">8+</span>

                                        </a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        No Response?
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Hi
                                                        <span class="badge bg-primary rounded-pill">2</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Okay
                                                        <span class="badge bg-primary rounded-pill">1</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            John Doe |
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img class="rounded-circle" src="images/female.svg" alt="Loading" height="50" width="50">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>


                </div>


            </div>
            <div class="row m-2 p-2 ">

                <div class="col-4 ">
                    <p class="h3 grey">Particpants</p>
                </div>

                <div class="col-8">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Students
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chromium Modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label grey">Full Name</label>
                                                <input class="form-control" type="text" name="fullName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label grey">Email Adress</label>
                                                <input class="form-control" type="text" name="emailAddress">
                                            </div>

                                        </div>
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label grey">Full Name</label>
                                                    <input class="form-control" type="text" name="fullName" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label grey">Email Adress</label>
                                                    <input class="form-control" type="text" name="emailAddress">
                                                </div>

                                            </div>
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label grey">Full Name</label>
                                                        <input class="form-control" type="text" name="fullName" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label grey">Email Adress</label>
                                                        <input class="form-control" type="text" name="emailAddress">
                                                    </div>

                                                </div>
                                    
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>



        </div>








    </div>


</div>

</div>


</body>
</html>