<style>
    /* Style for the form container */
    .form-container {
        max-width: 700px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Style for form labels */
    label {
        font-weight: bold;
    }

    /* Style for form input fields */
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    /* Style for the Update button */
    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #1E90FF;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<?php
$success_message = ''; // Initialize the success message variable

if (isset($_GET['cat_id'])) {
    $edit_user_id = $_GET['cat_id'];
}

$query = "SELECT * FROM categoriespila WHERE cat_id = $edit_user_id";
$select_posts = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_posts)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    $description = $row['description'];
	 $wheels = $row['wheels'];
}

if (isset($_POST['update-user'])) {
    $cat_title = $_POST['cat_title'];
    $description = $_POST['description'];
	$wheels = $_POST['wheels'];

    $query = "UPDATE categoriespila SET cat_title = '$cat_title', description = '$description', wheels = '$wheels' WHERE cat_id = $edit_user_id";
    
    $update_user_detail = mysqli_query($connection, $query);

    if ($update_user_detail) {
        // Update successful, set the success message
        $success_message = 'Category updated successfully!';
    } else {
        die("Query Failed: " . mysqli_error($connection));
    }
}
?>


<div class="form-container">
    <h2 style="text-align:center;">Edit Categories</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="cat_title">Category:</label>
            <input type="text" class="form-control" name="cat_title" value="<?php echo $cat_title; ?>">
        </div>
     
		
		                           <div class="form-group">
										<label for="description_type">Description Type</label>
										<select class="form-control" name="description" style="width: 658px;">
										<option value="manual"><?php echo $description; ?></option>
											<option value="manual">Manual</option>
											<option value="automatic">Automatic</option>
										</select>
									</div>
									
									  <div class="form-group">
										<label for="description_type">Wheels</label>
										<select class="form-control" name="wheels" style="width: 658px;">
										<option value="manual"><?php echo $wheels; ?></option>
										     <option value="2Wheels">2Wheels</option>
											<option value="3Wheels">3Wheels</option>
											<option value="4Wheels">4Wheels</option>
										</select>
									</div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="update-user" value="Update">
        </div>
    </form>
</div>

<!-- Bootstrap Modal for Success Message -->
<div class="modal" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $success_message; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
