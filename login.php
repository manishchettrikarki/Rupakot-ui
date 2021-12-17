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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="favicon.ico">
    <!--end here-->
</head>
<body>
<!--start top-bar-->
<?php include('header.php'); ?>
<!--navigation end here-->

<!--inner body start from here-->
<div class="inner-body">
    <div class="login_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                    <div class="login-widget animte-reavel">
                            <div class="sec-img">
                                <h3>Sign in to your Account</h3>
                            </div>
                        <div class="login-box">
                            <form>
                                <div class="form-group">
                                  <span><i class="fa fa-user"></i></span>  <input type="text" class="form-control" placeholder="Username" name="username" required="required">
                                </div>
                                <div class="form-group">
                                    <span><i class="fa fa-lock"></i></span>      <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                                </div>
                                <div class="form-actions clearfix">
                                    <div class="remember-me pull-left">
                                        <input type="checkbox"> <span>Remember me?</span>
                                    </div>
                                    <div class="submit-form text-center">
                                        <a href="#" class="btn submit-btn">Sign In</a>
                                        <div class="login-footer">
                                        <a href="forget-passward.html">
                                            Forget Password?
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="register">
                            <p>Don't have an accoutn yet? <a href="sign_up.php">Sign Up</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--inner body end from here-->

<!--footer start here-->
<?php include('footer.php'); ?>
<!--footer end here-->
<!--script files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jqwidgets/scripts/date-picker.js"></script>
<script src="assets/js/isotop/isotope-docs.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/parallax/parallax.min.js"></script>
<script src="assets/js/particles-effect/particles.min.js"></script>
<script src="assets/js/particles-effect/app.js"></script>
<script src="assets/js/custom.js"></script>
<!--end script files-->
</body>
</html>