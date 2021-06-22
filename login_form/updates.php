<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Entries</title>
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

  	<?php 
		include 'connection.php';
		
		$id=$_GET['_id'];
		$showquery= "SELECT * FROM login WHERE _id={$id}";
		$showdata= mysqli_query($conn,$showquery);

		$arrdata = mysqli_fetch_array($showdata);

		if(isset($_POST['submit'])){
			$idU=$_GET['_id'];
		    $name=$_POST['name'];
		    $email=$_POST['email'];
		    $password=$_POST['password'];

		    //$insertquery = "INSERT INTO login(Name,Email,Password) VALUES('$name','$email','$password')";

		    $updatequery = "UPDATE login SET _id=$id,Name='$name',Email='$email',Password='$password' WHERE _id={$idU}";

		    $res=mysqli_query($conn,$updatequery);
		    if($res){
		      ?>
		      <script>
		        alert("Updated Table");
		      </script>
		      <?php 
		    }else{
		      ?>
		      <script>
		        alert("Not updated Table");
		      </script>
		      <?php
		    }
		}
	?>

    Name: <input type="text" name="name" value="<?php echo $arrdata['Name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $arrdata['Email'] ?>"><br>
    Password: <input type="password" name="password" value="<?php echo $arrdata['Password'] ?>"><br>
    <input type="submit" name="submit" value="Update">
  </form>
</div>
  <div> 
    <a href='display.php'>Check entries</a><br>
  </div>

</body>
</html>



