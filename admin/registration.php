<?php
if (isset($_POST['btn'])) {
    require_once 'src/login.php';
    $obj = new Login();
    $message=$obj->registration($_POST);
}
?>

<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9">
<html class="no-j
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Unused Medicine Donation System</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="public/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="public/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="public/plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="public/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="public/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="public/plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/bootstrap-iso.css">

    <link rel="stylesheet" href="public/bootstrap-datepicker3.css">

    <script src="public/jquery-ui.js"></script>
    <script src="public/jquery-3.2.1.min.js"></script>
    <script src="public/bootstrap-datepicker.min.js"></script>




</head>

<body>


<header id="navigation" class="navbar navigation">


    </div>
</header>

<div class="" style="height: 20px">
    <div id="message" class="btn-success text-center">
        <?php if (isset($message)) echo $message ?>

    </div>
</div>

<section id="contact-us" class="contact-us section-bg" style="background-image: url('public/images/backgrounds/img14.jpg');background-repeat:no-repeat;background-size:contain;">>
    <div class="container">
        <div class="row">


            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2><span class="color">Sign Up</span></h2>

            </div>

            <div class="text-center border border-light p-5" data-wow-delay="300ms" id="form-wrapper"
                 style="max-width:500px;margin:auto;background-image: url('public/images/backgrounds/pata.jpeg'); background-repeat: no-repeat; background-size: cover;">
                <form id="login-form" method="post" action="" enctype="multipart/form-data">


                    <div class="form-group">
                        <strong>Name: </strong>
                        <input type="text" placeholder="Type your full name" class="form-control" name="name" id="Name" required>
                    </div>
                    <div class="form-group">
                        <strong>Email: </strong>
                        <input type="email" placeholder="Type your email" class="form-control" name="email_address"
                               id="Email" required>
                    </div>

                    <div class="form-group">
                        <strong>Phone Number: </strong>
                        <input type="number" placeholder="Type Your Contact Number" class="form-control"
                               name="phone_number" id="Phone" required>
                    </div>

                    <div class="form-group">
                        <strong>Password: </strong>
                        <input type="password" placeholder="Password" class="form-control" name="password"
                               id="password" required>
                    </div>





                    <br>









                    <div id="cf-submit">
                        <input type="submit" name="btn" id="contact-submit"
                               class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                               value="Submit">


                    </div>
                    <br>
                    <br>


                </form>
            </div>


        </div>
    </div>

    <div class="google-map" style="height: 1000px">
        <div id="map-canvas"></div>
    </div>

</section>
<footer id="footer" class="bg-one">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="500ms">
            <div class="col-lg-12">


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

                    <br/>

                    <p> Copyright &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        . All Rights Reserved.
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

<script>
    $(document).ready(function(){
        var date_input=$('input[name="dob"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

</body>
</html>