<?php
include 'inc/header.php';
include 'User.php';
$user=new User();
?>
<script>
    $(document).ready(function(){
        $("#btn1").click(function(){
            $("p").append(" <b>Appended text</b>.");
        });
        $("#btn2").click(function(){
            $("ol").append("<li>Appended item</li>");
        });
    });
</script>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ol>

<button id="btn1">Append text</button>
<button id="btn2">Append list item</button>


<div class="panel panel-default">
    <div class="p-3 mb-2 bg-dark text-white"> <strong>Welcome!</strong>Arman</span>
  </h2>

            
            

    </div>

    <div class="panel-body"> 
       <table class="table table-hover table-dark">
  <thead>
    <tr>
    <th scope="col">#No</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email Adderss</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Md Arman</td>
      <td>Arman</td>
      <td>amd55077@gmail.com</td>
      <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
    </tr>
    <tr>
         <th scope="row">2</th>
      <td>Md Irfan</td>
      <td>Irfan</td>
      <td>ir5077@gmail.com</td>
      <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
    </tr>
    <tr>
      <th scope="row">3</th>
        <td>Chandrima Helen Elora</td>
      <td>Helen</td>
      <td>che5077@gmail.com</td>
      <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
    </tr>
  </tbody>
</table>
    </div>

</div>
<?php
include 'inc/footer.php'
?>
           