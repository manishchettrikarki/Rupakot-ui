<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Travel Web Template">
    <meta name="keywords" content="Travel Template,Flight Template,Cars Template,Hotels Template,Responsive Template">
    <meta name="author" content="ShadesnShadows">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sasto Fare</title>
    <!--styles files-->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet"> -->
    <!-- <link href="assets/js/slick.min.js" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
     -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css" integrity="sha512-OtwMKauYE8gmoXusoKzA/wzQoh7WThXJcJVkA29fHP58hBF7osfY0WLCIZbwkeL9OgRCxtAfy17Pn3mndQ4PZQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet">
    <!-- <link href="assets/js/animate/animate.css" rel="stylesheet">
    <link href="assets/js/select2/select2.min.css" rel="stylesheet"> -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
   
    <!--favicon-->
    <link rel="icon" href="favicon.ico">
    <!--end here-->
</head>
<body>
<div class="top_bar_travel hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <ul class="list-unstyled list-inline top_contact">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Bookings</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="login.php"><i class="fa fa-user"></i> Sign In/Register</a>
                
                    </li>
                </ul>
            </div>
            <div class="col-md-5 hidden-sm">
                <!-- <div class="top_search">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button class="email-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div> -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="top_email">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>
<!--end top-bar-->

<!--start navigation bar-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo-sasto.png" alt="logo" height="80px"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
                <li class="dropdown">
                    <a  href="index.php"> <i class="fa fa-home"></i>Home</a>
                </li>
                <!-- About us -->
                <li class="dropdown">
                    <a href="about-us.php"><i class="fa fa-building"></i>About Us</a>
                </li>
                <!--Flights-->
                <li class="dropdown">
                    <a href="contact-us.php"><i class="fa fa-phone"></i>Contact Us</a>
                </li>
                <!--Find My Flight-->
                <li class="visible-lg"><span><a href="#" class="btn btn_order_now">Find My Flight</a></span></li>
            </ul>
        </div>
    </div>
</nav>