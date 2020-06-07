<?php


if(isset($_POST['submit'])) {
    $myemail = 'amd55077@gmail.com';
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    $headers = 'From: ' . $name . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    $ok = mail($myemail, $subject, $message, $headers);
    if ($ok) {
        echo '
                    <div   style="background-color: #0d370a; padding: 2px;text-align: center; color:white ">
                        <h1><strong>Message sent succesfully!!</strong></h1>
                        
                        <a href="contact.php" class="btn btn-transparent donate"><strong>OK! </strong> </a>


                        

                    </div>';

    } else {
        echo '
                    <div  style="background-color: #d02d00; padding: 2px;text-align: center; ">
                        <h1><strong>An error has occoured!!</strong></h1>
                        
                        <a href="contact.php" class="btn btn-transparent donate"><strong>OK! </strong> </a>


                       

                    </div>';
    }
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


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">


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
                <img src="../public/images/lg3.png" alt="Website Logo" />

            </a>

        </div>


        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="index.php">Home</a></li>
                <li><a data-scroll href="about.php">About Us</a></li>
                <li><a data-scroll href="services.php">Services</a></li>
                <li><a data-scroll href="blog.php">Blog</a></li>
                <li><a data-scroll href="contact.php">Contact</a></li>
                <li><a data-scroll href="login.php"><strong>Sign In</strong></a></li>
                <li><a data-scroll href="registration.php"><strong>Sign Up</strong></a></li>


            </ul>
        </nav>


    </div>
</header>






<section id="contact-us" class="contact-us section-bg">
    <div class="container">
        <div class="row">


            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>Get In <span class="color">Touch</span></h2>
                <div class="border"></div>
            </div>

            <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                <h3>Contact Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                <div class="contact-details">
                    <div class="con-info clearfix">
                        <i class="tf-map-pin"></i>
                        <span>Hathazari, Chittagong, Bangladesh</span>
                    </div>

                    <div class="con-info clearfix">
                        <i class="tf-ion-ios-telephone-outline"></i>
                        <span>Phone: +8801787281564</span>
                    </div>

                    <div class="con-info clearfix">
                        <i class="tf-ion-iphone"></i>
                        <span>Fax: +880-31-000-000</span>
                    </div>

                    <div class="con-info clearfix">
                        <i class="tf-ion-ios-email-outline"></i>
                        <span>Email: amd55077@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <form id="contact-form" method="post">

                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="Message" class="form-control" name="msg" id="message"></textarea>
                    </div>

                    <div id="mail-success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>

                    <div id="mail-fail" class="error">
                        Sorry, don't know what happened. Try later :(
                    </div>

                    <div id="cf-submit">
                        <input type="submit" name="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>

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

                    <!--							<p>  Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.-->
                    <!--								<br>Unused Medicine Donation System</a>-->
                    <!--							</p>-->
                </div>

            </div>
        </div>
    </div>
</footer>

<div id="scroll-up">
    up
</div>


</body>
</html>

