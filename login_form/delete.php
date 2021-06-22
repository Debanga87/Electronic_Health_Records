<?php
include 'connection.php';
$id=$_GET['_id'];
$deletequery = "DELETE FROM login WHERE _id={$id}";
$query=mysqli_query($conn,$deletequery);
if($query){
	?>

	<script>
		alert("Deleted succesfully");
	</script>
	<?php 
}else{
	?>
	<script> 
		alert("Deletion error");
	</script>
	<?php 
}
?>

<?php
	header('location:display.php')

?>