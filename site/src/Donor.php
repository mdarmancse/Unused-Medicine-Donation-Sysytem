
<head>



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
    <link rel="stylesheet" href="../public/css/style2.css">


</head>







<?php

require_once "DB.php";
class Donor extends DB
{



    public function storeDonar($data)
    {
//        echo "<pre>";
//    var_dump($data);
//    die();


        $n = count($_POST['medicines_name']);



        for ($i=0;$i<$n;$i++) {

            $medicines_name = $data["medicines_name"][$i];
            $exp_date = $data["exp_date"][$i];
            $amount = $data["amount"][$i];

            $sql ="INSERT INTO `donation_form`(`name`, `email`, `division`, `postal_code`, `phone_number`, `medicines_name`, `exp_date`, `amount`) VALUES ('$data[name]','$data[email]','$data[division]','$data[postal_code]','$data[phone_number]','$medicines_name',' $exp_date',' $amount')";
            $sth = $this->conn->exec($sql);


        }




        if ($sth) {
            $message='
                    <div id="message" style="background-color: #2e59d9; padding: 2px; text-decoration-color: white ">
                        <h1><strong>Thank You!!</strong></h1>
                        <h3><strong>Waiting for Admin Confirmation at your Email Inbox & Click Ok to back profile.</strong></h3>
                        <br>

                       
                          <a href="../views/template.php" class="btn btn-transparent donate"><strong>OK! </strong> </a>

                       

                    </div>';
            return $message;


        } else {

        }


    }




}

?>
