<?php 

	$username = 'root';
	$password = "";
	$server = 'localhost';
	$db = 'db';
	$conn=mysqli_connect($server,$username,$password,$db);

	if($conn){
		//echo "Connection successful";
		?>
		<script>
			alert("Connection established.");		
		</script>

		<?php
	}else{
		echo "Connection error";
		//die("No connection".mysqli_connect_error());	By default this showed
	}


?>