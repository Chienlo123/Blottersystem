
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
						  $parentconsent= $row['parentconsent'];
						  $medicalcerti= $row['medicalcerti'];
}

if (isset($_POST['update-Learners'])) {
	
	
		$admin = $_POST['admin'];
		
		$Learners_Name = $_POST['Learners_Name'];
		
		$Address = $_POST['Address'];
		$ADL = $_POST['ADL'];
		$PSA_NSO= $_POST['PSA_NSO'];
		$parentconsent= $_POST['parentconsent'];
		$medicalcerti= $_POST['medicalcerti'];
	
		$detail = $_POST['detail'];
		
		
	

	$query = "UPDATE postspila SET post_title='{$Learners_Name}',  Address='{$Address}',  ADL='{$ADL}',  PSA_NSO='{$PSA_NSO}',  parentconsent='{$parentconsent}',  medicalcerti='{$medicalcerti}', post_author='{$admin}', post_category_id={$category}, post_content='{$detail}' WHERE post_id=$edit_Learners_id ";
	
	//echo $title . " " . $admin;
	
	$update_bus = mysqli_query($connection,$query);

	if (!$update_bus) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">User_Role</label>
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
		<input value="<?php echo $ADL; ?>" type="text" class="form-control" name="ADL">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">PSA/NSO</label>
		<input value="<?php echo $PSA_NSO; ?>" type="text" class="form-control" name="PSA_NSO">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">Parental/Guardian's Consent</label>
		<input value="<?php echo $parentconsent; ?>" type="text" class="form-control" name="parentconsent">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">Electronically transmitted Medical Certificate</label>
		<input value="<?php echo $medicalcerti; ?>" type="text" class="form-control" name="medicalcerti">
	</div>
	
	
	
	
		<div class="form-group">
	<label for="bus-image">Learners Image</label>
		<img width="100" src="../images/<?php echo $image ?>">
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
