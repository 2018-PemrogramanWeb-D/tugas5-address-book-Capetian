

<?php

if (isset($_POST['add'])) {

	$name = $_POST['name'];
	$address = $_POST['address'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$rowSel="SELECT * FROM myguests WHERE 
			name = '$name' 
			and address = '$address' 
			and telp = '$telp' 
			and email = '$email'";
	$check=mysqli_query($conn,$rowSel);
	if(mysqli_num_rows($check)> 0){
		echo " data already in table";
	}else{
		$insert = "INSERT INTO MyGuests (name, address, telp, email)
		VALUES ('$name', '$address', '$telp','$email')";
		if (mysqli_query($conn, $insert)) {
				echo "Data inserted successfully";
		} 
	}
}


$all= "select * from MyGuests";
$data = mysqli_query($conn, $all);


if (isset($_POST['edit'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$edit = "update myguests set 
			name = '$name',
			address = '$address',
			telp = '$telp',
			email = '$email'
			where id = '$id' ";
	if (mysqli_query($conn, $edit)) {
				echo "Data edited successfully";
		} 

}


if (isset($_POST['delete'])) {
	
	$id = $_POST['id'];
	$delete =" delete from myguests
			where id = '$id' ";
	if (mysqli_query($conn, $delete)) {
				echo "Data deleted successfully";
		} 

}
?>

	
	
	

	</body>

</html>