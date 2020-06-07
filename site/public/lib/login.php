<?php
include 'inc/header.php';

?>
<div class="panel panel-default">
    <div class="p-3 mb-2 bg-dark text-white">
        <h2> User Login</h2>
    </div>

    <div class="panel-body border border-danger" >
    <div style="max-width:600px; margin:0 auto; padding:5px;"> 
     
    <form action="" method="POST"> 
    <div class="form-group">
     <label for="email">Email Address</label>
      <input type="text" id="email" name="email" class="form-control" required="" />
   
        <label for="password">Password</label>
      <input type="password" id="password" name="email" class="form-control"/>
    </div>
    <button type="submit" name="login" class="btn btn-success" style="margin-bottom: 10px;">Login</button>
    </form>
  </div>


</div>
<?php
include 'inc/footer.php'
?>
           