<?php
	include("./init.php");
	include("./address_book_fun.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
			<title>AXIS SERVICES</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body {
				margin_top: 200px;
				margin-left: 200px;
				margin-right: 200px;
				font-family: Calibri;
				background-color: azure;
			}
        table, th, td {
            margin: 20px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
       th {
            color: white;
            background-color: black;
        }

		</style>
	</head>
	<body>
		<div class="container-fluid">
			<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addContact">Add Contact</button>

			<div id="addContact" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Contact</h4>
				  </div>
				  <div class="modal-body">
					<form method="POST" action="">
						<label for="name">Name</label>
						<input type="text" name="name" ><br>
						<label for="address">Address</label>
						<input type="address" name="address" ><br>
						<label for="telp">Telp. no</label>
						<input type="text" name="telp" ><br>
						<label for="email">E-mail</label>
						<input type="email" name="email" ><br>
						<button type="submit" class="btn btn-primary btn-md" name="add">Add</button>
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>


		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Telp. No.</th>
					<th>E-mail</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php while($display = mysqli_fetch_assoc($data)){?>
				<tr>
				<td><?php echo $display['name']?></td>
				<td><?php echo $display['address']?></td>
				<td><?php echo $display['telp']?></td>
				<td><?php echo $display['email']?></td>
				<td>
					<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editContact<?php echo $display['id'];?>">Edit</button>
					<div id="editContact<?php echo $display['id'];?>" class="modal fade" role="dialog">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Contact</h4>
						  </div>
						  <div class="modal-body">
							<form method="POST" action="">
								<input type="hidden" id="id" name="id" value="<?php echo $display['id']?>">
								<label for="name">Name</label>
								<input type="text" name="name" value="<?php echo $display['name']?>"><br>
								<label for="address">Address</label>
								<input type="address" name="address" value="<?php echo $display['address']?>"><br>
								<label for="telp">Telp. no</label>
								<input type="text" name="telp" value="<?php echo $display['telp']?>"><br>
								<label for="email">E-mail</label>
								<input type="email" name="email" value="<?php echo $display['email']?>"><br>
								<button type="submit" class="btn btn-info btn-md" name="edit">Edit</button>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
				<br>
					<form method="POST" action="">
						<input type="hidden" id="id" name="id" value="<?php echo $display['id']?>">
						<button type="submit" class="btn btn-danger btn-xs" name="delete">delete</button>
					</form>
				</td>
				</tr>
			<?php } ?>	
			</tbody>
		</table>

	</div>
	   
	

	</body>

</html>