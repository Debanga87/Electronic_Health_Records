<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Page</title>
  <?php include 'links.php' ?>          
  <!-- css pages can also be linked this way -->
  <!-- <?php include 'css/style.css' ?> -->
</head>
<body>

<div class="container">
  <h1 align="middle">Register here</h1>
</div>
<div align="center">
  <form action="" method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="submit">
  </form>
</div>
  <div> 
    <a href='display.php'>Check entries</a><br>
  </div>

</body>
</html>



<?php 

include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insertquery = "INSERT INTO login(Name,Email,Password) VALUES('$name','$email','$password') ";

    $res=mysqli_query($conn,$insertquery);

    if($res){
      ?>
      <script>

        alert("Inserted into Table");
      </script>
      <?php 
    }else{
      ?>
      <script>

        alert("Not inserted into Table");
      </script>
      <?php
    }
}

?>