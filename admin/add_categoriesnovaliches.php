<?php include"includes/admin_header.php"; ?>

    <div id="wrapper" style="margin-right:200px; margin-left:150px; margin-top:120px;">
        
        <!-- Navigation -->
        <?php include"includes/Notificationsnovaliches/admin_navigationnovaliches.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add Categories 
                            <small>Motorcycle</small>
                        </h1>



                        <div class="col-xs-6">

                         




                         <?php
if (isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];
    $description_type = $_POST['description_type'];
	$wheels = $_POST['wheels']; 
	
    if ($cat_title == "" || empty($description_type)  || empty($wheels)) {
        echo "This Field Must Not be Empty";
    }

    $query = "INSERT INTO categoriesnovaliches (cat_title, description,wheels) VALUES ('$cat_title', '$description_type','$wheels')";
    $create_category = mysqli_query($connection, $query);

    if (!$create_category) {
        die("Query Failed");
    }
}
?>

                            <form action="" method="post" href="categories.php">
                               <div class="form-group">
									<label for="cat_title">Add Categories</label>
									<input class="form-control" type="text" name="cat_title" style="width: 800px;" required="">
								</div>

								
									  
									 <div class="form-group">
										<label for="description_type">Description Type</label>
										<select class="form-control" name="description_type" style="width: 800px;">
											<option value="manual">Manual</option>
											<option value="automatic">Automatic</option>
										</select>
									</div>
									
									 <div class="form-group">
										<label for="wheels">Wheels</label>
										<select class="form-control" name="wheels" style="width: 800px;">
											<option value="2Wheels">2Wheels</option>
											<option value="3Wheels">3Wheels</option>
											<option value="4Wheels">4Wheels</option>
										</select>
									</div>


                                
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                                </div> 
                            </form>
                        </div>
                     


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>