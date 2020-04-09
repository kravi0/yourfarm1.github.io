<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>

 <div class="top py-1 bg-dark text-light">
        <div class="container">
           <div class="row ">
            
             <marquee  >Welcome to YourFarm. We are currently working in Patna only.</marquee>

    

           </div>
       </div>
    </div>


    <nav class="navbar navbar-expand-lg blue-grey dark">
  <a class="navbar-brand text-light" href="#" >
 <img src="image\logo.png" class="d-inline-block align-bottom" height="40" >
  <span >YourFarm</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active ">
        <a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Plan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark " href="#">abc</a>
      </li>

         
    </ul>
     <a href="" class="btn btn-default btn-rounded " data-toggle="modal" data-target="#modalLRForm"> LogIn/Register</a>
  </div>
</nav>


        <!--Modal: Login / Register Form-->
<div class="modal fade " id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-green darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item " >
            <a class="nav-link text-dark" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
           
            <!--Body-->
             <div class="col text-center"><h4><strong>Login</strong></h4></div>
             <form action="validat.php" method="POST">
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate"  name="mail">
                <label data-error="wrong" data-success="right" for="modalLRInput10" >Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="pas">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info" type="submit" name="submit" value="submit">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
          

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="col text-center"><h4><strong>Register</strong></h4></div>
            <form action="signupValidat.php" method="POST">
            <div class="modal-body">
               <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="name">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
              </div>
                         
             <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="pas">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>


              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile">
                <label data-error="wrong" data-success="right" for="modalLRInput15">Your Mobile No.</label>
              </div>

           

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="text" id="modalLRInput14" class="form-control form-control-sm validate" name="mail">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Enter Mail</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" value="submit" name="signup">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<!--Dropdown primary-->
<div class="dropdown">

  <!--Trigger-->
  <a class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Material dropdown</a>


  <!--Menu-->
  <div class="dropdown-menu dropdown-primary">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<!--/Dropdown primary-->
</body>
</html>