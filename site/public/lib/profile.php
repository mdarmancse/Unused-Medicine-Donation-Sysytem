<?php
include 'inc/header.php';
?>
<div class="card">
    <div class="card-header">
        <h2> User Profile <span class="float-right"><a href="index.php" class="btn btn-outline-primary">Back</a></span></h2>
    </div>

    <div class="card-body" >
    <div style="max-width:600px; margin:0 auto; padding:5px;"> 
      
   
    <form action="" method="POST"> 
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" class="form-control" value="Md Arman Ullah" />
      <label for="username">Username</label>
      <input type="text" id="username" name="username" class="form-control" value="mdarman53" />
      <label for="email">Email</label>
      <input type="text" id="email" name="email" class="form-control" value="abc@gmail.com" />
        
    </div>
    <button type="submit" name="update" class="btn btn-outline-success" style="margin-bottom: 10px;">Update</button>
    </form>
  </div>


</div>
</div>
<?php
include 'inc/footer.php'
?>
           