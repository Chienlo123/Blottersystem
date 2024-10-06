
<?php
if (isset($_POST['insert-Learners'])) {
    // Include your database connection here

    $admin = $_POST['admin'];
    $category = $_POST['category'];
    $Learners_Name = $_POST['Learners_Name'];
    $Address = $_POST['Address'];
    $parentconsent = $_POST['parentconsent'];
    $detail = $_POST['detail'];

    // Image handling for Learners Image
    $ADL = $_FILES['ADL']['name'];
    $PSA_NSO = $_FILES['PSA_NSO']['name'];
    $medicalcerti = $_FILES['medicalcerti']['name'];
    $image = $_FILES['image']['name'];

    $tmp_image = $_FILES['image']['tmp_name'];
    $tmp_image1 = $_FILES['ADL']['tmp_name'];
    $tmp_image2 = $_FILES['PSA_NSO']['tmp_name'];
    $tmp_image3 = $_FILES['medicalcerti']['tmp_name'];

    $imagePath = "../images/$image"; // Set the path where you want to store the image on the server
    $imagePath1 = "../images/$ADL";
    $imagePath2 = "../images/$PSA_NSO";
    $imagePath3 = "../images/$medicalcerti";

    // Check if the file upload was successful
    if (
        move_uploaded_file($tmp_image, $imagePath) &&
        move_uploaded_file($tmp_image1, $imagePath1) &&
        move_uploaded_file($tmp_image2, $imagePath2) &&
        move_uploaded_file($tmp_image3, $imagePath3)
    ) {
        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO postslaspinas(post_category_id, post_title, post_author, post_image, post_content, Address, ADL, PSA_NSO, parentconsent, medicalcerti) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "isssssssss", $category, $Learners_Name, $admin, $imagePath, $detail, $Address, $imagePath1, $imagePath2, $parentconsent, $imagePath3);

        if (mysqli_stmt_execute($stmt)) {
            echo "Data Inserted Successfully";
        } else {
            echo "Query Failed: " . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "File upload failed.";
    }
}
?>




<form action="" method="post" enctype="multipart/form-data" >
	
	<div class="form-group">
		<label for="admin">User_Role</label>
		<input type="text" class="form-control" name="admin">
	</div>

	<div class="form-group">
	<label>Category</label>
		<select name="category" class="form-control">
			
			<?php 

			$query = "SELECT * FROM categorieslaspinas";
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
		<label for="source">Learners Name</label>
		<input type="text" class="form-control" name="Learners_Name">
	</div>

	

	<div class="form-group">
		<label for="intermediate-station">Address</label>
		<input type="text" class="form-control" name="Address">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">Parental/Guardian's Consent</label>
		<input type="text" class="form-control" name="parentconsent">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">Application for Driver's License</label>
		<input type="file" class="form-control" name="ADL">
	</div>
	
	<div class="form-group">
		<label for="intermediate-station">PSA/NSO</label>
		<input type="file" class="form-control" name="PSA_NSO">
	</div>
	

	<div class="form-group">
		<label for="intermediate-station">Electronically transmitted Medical Certificate</label>
		<input type="file" class="form-control" name="medicalcerti">
	</div>

	
	
	<div class="form-group">
		<label for="intermediate-station">Learners Image</label>
		<input type="file" class="form-control" name="image">
	</div>

	<div class="form-group">
		<label for="bus-detail">Learners Detail</label>
		<textarea class="form-control" name="detail" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="insert-Learners" value="Add Requirements">
	</div>
</form>



</div>