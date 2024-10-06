
<?php

if (isset($_GET['user_id'])) {
	$edit_user_id = $_GET['user_id'];
}

$query = "SELECT *  FROM  usersmarikina WHERE user_id=$edit_user_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $name = $row['name'];
    $user_lastname = $row['user_lastname'];
    $email = $row['email'];
    $user_phoneno = $row['user_phoneno'];
	$email = $row['email'];
    
    $user_role = $row['user_role'];
}

if (isset($_POST['update-user'])) {
	
	$name = $_POST['name'];
	$user_lastname = $_POST['user_lastname'];
	$email = $_POST['email'];

	
	

	$query = "UPDATE usersmarikina SET name = '$name', user_lastname = '$user_lastname' , email = '$email'  WHERE user_id=$edit_user_id ";
	
	//echo $title . " " . $admin;
	
	$update_user_detail = mysqli_query($connection,$query);

	if (!$update_user_detail) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">Firstname</label>
		<input type="text" class="form-control" name="name">
	</div>

	<div class="form-group">
		<label for="category">Lastname</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>
	
	<div class="form-group">
		<label for="category">Email</label>
		<input type="email" class="form-control" name="email">
	</div>



	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update-user" value="Update">
	</div>
</form>
