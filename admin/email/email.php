<?php
if(isset($_POST['submit'])) {
    $mailname = $_POST['name'];
    $mailto = $_POST['email'];
    $mailSub = $_POST['subject'];
    $mailMsg = $_POST['message'];
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
//$mail ->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = false;
    $mail->Host = 'relay-hosting.secureserver.net';
    $mail->Port = 25; // or 587
    $mail->IsHTML(true);
    $mail->Username = "amd55077@gmail.com";
    $mail->Password = "789789789";
    $mail->setFrom("amd55077@gmail.com");
    $mail->FromName = $mailname;
    $mail->Subject = $mailSub;
    $mail->Body = $mailMsg;
    $mail->AddAddress($mailto);

    if (!$mail->send()) {
        echo '<div class="alert alert-warning" style=" padding: 2px;text-align: center; ">
                        <h1><strong>Something Error!!</strong></h1>
                        
                        <a href="../donar.php" class="btn btn-primary"><strong>Back </strong> </a>
                        <a href="email.php" class="btn btn-danger"><strong>Try Again </strong> </a>


                        

                    </div>';
    } else {
        echo '<div class="alert alert-success"  style=" padding: 2px;text-align: center;">
                        <h1><strong>Email Sent Succesfully!!!</strong></h1>
                        
                        <a href="../donar.php" class="btn btn-primary"><strong>Back </strong> </a>
                        


                        

                    </div>';
    }


}






?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">

		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">

			</div>


			<form class="contact1-form validate-form" method="post">
				<span class="contact1-form-title">
					Compose Email
				</span>




				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" value="Send Email" name="submit">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
