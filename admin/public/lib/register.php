<?php
include 'inc/header.php';
include 'User.php';

$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
  $usrRegi= $user->userRegistration($_POST);

}

?>
<div class="card">
    <div class="card-header">
        <h2> User Registration <span class="float-right"><a href="index.php" class="btn btn-outline-primary">Back</a></span></h2>
    </div>

    <div class="card-body" >
    <div style="max-width:600px; margin:0 auto; padding:5px;"> 
      <?php 
        if (isset($usrRegi)) {
         echo $usrRegi;
        }
       ?>
      
   
    <form action="" method="POST"> 
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" class="form-control"  />
      <label for="username">Username</label>
      <input type="text" id="username" name="username" class="form-control" " />
      <label for="email">Email</label>
      <input type="text" id="email" name="email" class="form-control"  />
      <label for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control"  />
    </div>
    <button type="submit" name="register" class="btn btn-outline-success"  style="margin-bottom: 10px;">Sign In</button>
    </form>
  </div>


</div>
</div>
<?php
include 'inc/footer.php'
?>
           