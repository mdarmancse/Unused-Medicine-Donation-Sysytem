<?php
//part 1

session_start();
if(isset($_SESSION['id'])){

    if($_SESSION['id']!=NULL){
        header('Location:../index.php');
    }
}
//part 2
if(isset($_POST['btn'])){

    require_once '../src/login.php';
    $obj=new Login();
    $message=$obj->login_check($_POST);

}

?>


<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9">
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Unused Medicine Donation System</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../public/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../public/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../public/plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="../public/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../public/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../public/plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">

    <script src="../public/jquery-ui.js"></script>
    <script src="../public/jquery-3.2.1.min.js"></script>

</head>

<body>


<header id="navigation" class="navbar navigation">
    <div class="container">
        <div class="navbar-header">


            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand logo" href="#body">
                <img src="../public/images/lg3.png"  alt="Website Logo" />

            </a>

        </div>


        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="index.php">Home</a></li>
                <li><a data-scroll href="about.php">About Us</a></li>
                <li><a data-scroll href="services.php">Services</a></li>
                <li><a data-scroll href="blog.php">Blog</a></li>
                <li><a data-scroll href="contact.php">Contact</a></li>
            
                <li><a data-scroll href="registration.php"><strong>Sign Up</strong></a></li>
            </ul>
        </nav>


    </div>
</header>

<div class="" style="height: 20px">
    <div id="message" class="btn-danger text-center" >
        <?php  if(isset($message)) echo $message?>

    </div>
</div>


<section id="contact-us" class="contact-us section-bg" style="background-image: url('../public/images/backgrounds/img10.jpg');background-repeat:no-repeat;background-size:cover;">




    <div class="container">
        <div class="row">


            <div class="title text-center wow fadeIn" data-wow-duration="500ms" >




                <h2><span class="color">Log In</span></h2>
                <div class="border"></div>
            </div>



            <div class="text-center border border-light p-5" data-wow-duration="500ms" data-wow-delay="300ms" id="form-wrapper" style="max-width:500px;margin:auto;" >
                <form id="login-form" method="post"  role="form">



                    <div class="form-group">
                        <input type="email" placeholder="Your Email" class="form-control" name="email_address" id="email">
                    </div>

                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control" name="password" id="password">
                    </div>



                    <div id="cf-submit">
                        <input type="submit" name="btn" id="contact-submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" value="Login">


                    </div>
                    <br>
                    <br>

                    <p>Not a member?

                        <a href="registration.php" target="_blank"><strong>Please Sign Up.</strong></a>


                    </p>

                </form>
            </div>


        </div>
    </div>

    <div class="google-map">
        <div id="map-canvas"></div>
    </div>

</section>



<footer id="footer" class="bg-one">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="500ms">
            <div class="col-lg-12">

                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul class="list-inline">
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                    </ul>
                </div>


                <div class="copyright text-center">

                    <br />

                    <p>  Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
                        <br>Unused Medicine Donation System</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>

<div id="scroll-up">
    up
</div>


<script>


    $(document).ready(function () {


        $(function ($) {
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
            $('#message').fadeIn(550);
            $('#message').fadeOut(550);
        });
    });

</script>


</body>
</html>