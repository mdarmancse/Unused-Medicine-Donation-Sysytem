<?php
session_start();
if ($_SESSION['id'] == NULL) {
    header("Location:login.php");

}

if (isset($_GET['logout'])) {
    require_once '../src/login.php';
    $obj = new Login();
    $obj->user_logout();

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
<body>
<div>

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
                    <img src="../public/images/lg3.png" alt="Website Logo"/>

                </a>


            </div>


            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav navigation-menu">
                    <li><a data-scroll href="index.php">Home</a></li>


                    <li><a data-scroll href="?logout=logout"><strong>Logout</strong></a></li>
                </ul>
            </nav>


        </div>
    </header>


    <div style="background-image: url('../public/images/backgrounds/img4.jpg'); background-repeat: no-repeat; background-size: cover;">
        <form action="" method="post" style="margin: 5px;">

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width: 100%%">
                        <form class="login100-form validate-form">

                            <div class="container">

                                <table class="table table-bordered">

                                    <tr>
                                        <!--                                <th><strong>USERS NAME</strong></th>-->
                                        <td class="text-center" colspan="5"><strong> <a data-scroll href=""><strong>Welcome <?php echo $_SESSION['name'] ?></strong></a></strong>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td rowspan="2">
                                            <img src="Uploads/<?php echo $_SESSION['profile_picture'] ?>"
                                                    width="200px" height="200px">

                                        <th><strong>Name</strong></th>
                                        <td colspan="5"><strong> <?php echo $_SESSION['name'] ?></strong></td>

                                    </tr>
                                    <tr>
                                        <th><strong>District</strong></th>
                                        <td colspan="5"><strong><?php echo $_SESSION['district'] ?> </strong></td>
                                    </tr>

                                    <tr>
                                        <th><strong>Email</strong></th>
                                        <td colspan="5"><strong><?php echo $_SESSION['email_address'] ?></strong></td>
                                    </tr>
                                    <tr>
                                        <th><strong>Phone Number</strong></th>
                                        <td colspan="5"><strong><?php echo $_SESSION['phone_number'] ?></strong></td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td><strong><?php echo $_SESSION['gender'] ?></strong></td>

                                        <th>Date of Birth</th>
                                        <td><strong><?php echo $_SESSION['dob'] ?></strong></td>

                                    </tr>


                                </table>

                            </div>


                        </form>


                    </div>
                </div>
            </div>
            <div align="center">

                <a href="donorForm.php" class="btn btn-transparent donate"><strong>Donate </strong> </a>

            </div>


        </form>

        <footer id="footer">
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
    </div>
</body>
