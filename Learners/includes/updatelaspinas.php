
<?php

if (isset($_GET['Learners_id'])) {
	$edit_Learners_id = $_GET['Learners_id'];
}

$query = "SELECT *  FROM  postslaspinas WHERE post_id=$edit_Learners_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
	
                           $id = $row['post_id'];
                         
						   $category = $row['post_category_id'];
						   $Learners_Name = $row['post_title'];
						   $image = $row['post_image'];
						   $detail = $row['post_content'];
						   
						   $Address = $row['Address'];
                         
	
}

if (isset($_POST['update-Learners'])) {
	
	$user_name = ucfirst($_SESSION['s_username']) ;
	    $curr_user_id = $_SESSION['s_id'];
		
		$category = $_POST['category'];
		$Learners_Name = $_POST['Learners_Name'];
		
		$Address = $_POST['Address'];
	
		$detail = $_POST['detail'];

	$query = "UPDATE postslaspinas SET post_title='{$Learners_Name}', user_id='{$curr_user_id}',  Address='{$Address}', post_author='{$user_name}', post_category_id={$category}, post_content='{$detail}' WHERE post_id=$edit_Learners_id ";
	
	//echo $title . " " . $admin;
	
	$update_bus = mysqli_query($connection,$query);

	if (!$update_bus) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">
	
	

	

	<div class="form-group">
		<label for="source">Learners Name</label>
		<input value="<?php echo $Learners_Name; ?>" type="text" class="form-control" name="Learners_Name">
	</div>


<div class="form-group">
		<select name="category">
			
			<?php 

			$query = "SELECT * FROM categories";
			$select_category = mysqli_query($connection,$query);

			if (!$select_category) {
				die("Query Failed" . mysqli_error($connection));
			}

			while ($row = mysqli_fetch_assoc($select_category)) {
				$cat_id = $row['cat_id'];
				$cat_title = $row['cat_title'];
			
				echo "<option value='$cat_id'>$cat_title</option>";
			}

			?>

		</select>
	</div>
	


	<div class="form-group">
		<label for="intermediate-station">Address</label>
		<input value="<?php echo $Address; ?>" type="text" class="form-control" name="Address">
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
</form>
