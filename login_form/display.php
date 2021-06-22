<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Display Entries</title>

	<?php include 'links.php' ?>
</head>
<body>
	<div class="main-div">
		<h1>Login details of all entries</h1>
	</div>
	<div class="center-div">
		<div class="table-responsive">

			<table>
				<thread>
					<tr>
						<th>_id</th>
						<th>Name</th>
						<th>Email</th>
						<th colspan="2">Operation</th>
					</tr>
				</thread>
				<tbody>

					<?php
						include 'connection.php';

						$selectquery = "SELECT * FROM login";

						$query = mysqli_query($conn,$selectquery);
						//$num = mysqli_num_rows($query);

						while($res = mysqli_fetch_array($query)){
						
						?>
						<tr>
							<td><?php echo $res['_id']; ?></td>
							<td><?php echo $res['Name']; ?></td>
							<td><span class="email-style"><?php echo $res['Email'];?></span></td>
							<td><a href="updates.php?_id=<?php echo $res['_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
							<td><a href="delete.php?_id=<?php echo $res['_id'] ?> " data-toggle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
						</tr>
				<?php
					}
				?>
				</tbody>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>
</html>


