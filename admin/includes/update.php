
<?php

if (isset($_GET['Learners_id'])) {
	$edit_Learners_id = $_GET['Learners_id'];
}

$query = "SELECT *  FROM  posts WHERE post_id=$edit_Learners_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
	
                           $id = $row['post_id'];
                           $admin = $row['post_author'];
						   $category = $row['post_category_id'];
						   $Learners_Name = $row['post_title'];
						   $image = $row['post_image'];
						   $detail = $row['post_content'];
						   
						   $Address = $row['Address'];
						    $ADL= $row['ADL'];
                          $PSA_NSO= $row['PSA_NSO'];
						
						  $medicalcerti= $row['medicalcerti'];
}

if (isset($_POST['update-Learners'])) {
	
	
		$admin = $_POST['admin'];
		
		$Learners_Name = $_POST['Learners_Name'];
		
		$Address = $_POST['Address'];
		$ADL = $_POST['ADL'];
		$PSA_NSO= $_POST['PSA_NSO'];
		
		$medicalcerti= $_POST['medicalcerti'];
	
		$detail = $_POST['detail'];
		
		
	

	$query = "UPDATE posts SET post_title='{$Learners_Name}',  Address='{$Address}',  ADL='{$ADL}',  PSA_NSO='{$PSA_NSO}',  medicalcerti='{$medicalcerti}', post_author='{$admin}', post_category_id={$category}, post_content='{$detail}' WHERE post_id=$edit_Learners_id ";
	
	//echo $title . " " . $admin;
	
	$update_bus = mysqli_query($connection,$query);

	if (!$update_bus) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">User Role</label>
		<input value="<?php echo $admin; ?>" type="text" class="form-control" name="admin">
	</div>


	<div class="form-group">
		<label for="source">Learners Name</label>
		<input value="<?php echo $Learners_Name; ?>" type="text" class="form-control" name="Learners_Name">
	</div>




	<div class="form-group">
		<label for="intermediate-station">Address</label>
		<input value="<?php echo $Address; ?>" type="text" class="form-control" name="Address">
	</div>
		<div class="form-group">
		<label for="intermediate-station">Application for Driver's License</label>
		<input value="<?php echo $ADL; ?>" type="file" class="form-control" name="ADL">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">PSA/NSO</label>
		<input value="<?php echo $PSA_NSO; ?>" type="file" class="form-control" name="PSA_NSO">
	</div>
	

	
	<div class="form-group">
		<label for="intermediate-station">Electronically transmitted Medical Certificate</label>
		<input value="<?php echo $medicalcerti; ?>" type="file" class="form-control" name="medicalcerti">
	</div>
	
	
	
	<div class="form-group">
		<label for="intermediate-station">Learners Image</label>
		<input value="<?php echo $image; ?>" type="file" class="form-control" name="medicalcerti">
	</div>
	
	
	
	
	
	<div class="form-group">
		<label for="bus-detail">Learners Detail</label>
		<textarea /*value="<?php echo $detail; ?>" class="form-control" name="detail" cols="30" rows="10"><?php echo $detail; ?></textarea>
	</div>
	
	
	
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update-Learners" value="Update">
	</div>
	
	
	</div>
		
	
		
	



	

	
</form>
