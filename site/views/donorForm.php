

<?php
if(isset($_POST['btn'])){
    require_once "../src/Donor.php";

    $obj=new Donor();
    $message=$obj->storeDonar($_POST);
//echo "pre";
//var_dump($_POST);

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

    <script src="../public/plugins/jquery/dist/jquery.min.js"></script>

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
    <link rel="stylesheet" href="../public/css/style2.css">

    <link rel="stylesheet" type="text/css" href="../public/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">





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
                <img src="../public/images/lg3.png" alt="Website Logo" />

            </a>

        </div>


        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="index.php">Home</a></li>
                <li><a data-scroll href="index.php">About Us</a></li>
                <li><a data-scroll href="index.php">Services</a></li>
                <li><a data-scroll href="index.php">Blog</a></li>
                <li><a data-scroll href="index.php">Contact</a></li>
                <li><a data-scroll href="?logout=logout"><strong>Logout</strong></a></li>
            </ul>
        </nav>


    </div>
</header>


    <div id="message" class="btn-success text-center">
        <?php if (isset($message)) echo $message ?>

    </div>


<section id="contact-us" class="contact-us section-bg" style= "background-image: url('../public/images/backgrounds/img14.jpg'); background-repeat: repeat; background-size:contain;">
    <div class="container">
        <div class="row">


            <div class="title text-center wow fadeIn" data-wow-duration="500ms" >
                <h2><span class="color">Donation Form</span></h2>

            </div>

            <div class="text-center border border-light p-5" data-wow-delay="300ms" id="form-wrapper" style="max-width:500px;margin:auto;" >
                <form id="login-form" method="post" action="" role="form">



                    <div class="form-group">
                        <strong>Name: </strong>
                        <input type="text" placeholder="Type your full name" class="form-control" name="name" id="Name" required>
                    </div>
                    <div class="form-group">
                        <strong>Email: </strong>
                        <input type="email" placeholder="Type your email" class="form-control" name="email" id="Email" required>
                    </div>


                    <div class="wrap-input100 validate-input m-b-20">

                        <span class="label-input100"></span>
                        <strong>Division: </strong>
                        <select class="form-control" name="division" id="District">

                            <option value="">Select Your Division</option>
                            <option value="Chattagram">Chattagram</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Rajsahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Khulna">Khulna</option>

                        </select>


                    </div>

                    <br>


                    <div class="form-group">
                        <strong>Postal Code: </strong>
                        <input type="number" placeholder="Postal Code" class="form-control" name="postal_code" id="Postal">
                    </div>


                    <div class="form-group">
                        <strong>Phone Number: </strong> <input type="number" placeholder="Type Your Contact Number" class="form-control" name="phone_number" id="Phone">
                    </div>

                    <div class="form-group" id="input_fields_wrap" name="mytext[]">
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" id="add_field_button">Add Medicine</button>
                        <strong>Medicines: </strong>
                        <input type="text" placeholder="Medicine Name" class="form-control" name="medicines_name[]" class="Medicine">
                        <input placeholder="Expiry Date" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="exp_date[]" class="date">
                        <input type="number" placeholder="Amount" class="form-control" name="amount[]" class="Amount">


                    </div>



                    <div class="input_fields_wrap">


                    </div>



                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" name="btn" value="Submit">


                    </div>



                </form>
            </div>



        </div>
    </div>

    <div class="google-map" style="height:2000px">
        <div id="map-canvas" ></div>
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

    $(document).ready(function() {
        var max_fields      = 20; //maximum input boxes allowed
        var wrapper   		= $("#input_fields_wrap"); //Fields wrapper
        var add_button      = $("#add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><strong>Medicines: </strong>  <input type="text" placeholder="Medicine Name" class="form-control" name="medicines_name[]" class="Medicine">\n' +
                    '                        <input placeholder="Expiry Date" class="form-control" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" name="exp_date[] " class="date">\n' +
                    '                        <input type="number" placeholder="Amount" class="form-control" name="amount[]" class="Amount"><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });

</script>


<script>


    $(document).ready(function () {


        $("#message").click(function(){
            $("contact-submit").slideToggle("slow");
    });

</script>
</body>


</html>