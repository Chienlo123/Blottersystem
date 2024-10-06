<?php include "includes/admin_header.php"; ?>

<style>
    /* Custom style for the table */
    .custom-table {
        background-color: #f7f7f7; /* Set your desired table background color */
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

 


<div id="wrapper"  style="margin-right:200px; margin-left:150px; margin-top:100px;">
    <!-- Navigation -->
    <?php include"includes/Notificationspila/admin_navigationpila.php"; ?>
              

<!-- Add Categories and Descriptions Modal -->



    <div id="page-wrapper" >
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
       <h1 class="page-header">
                           Categories 
                            <small>Motorcycle</small>
                        </h1>

                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = "";
                    }

                    switch ($source) {
                        case 'update_user':
                            include "includes/update_categoriespila.php";
                            break;
						case 'add_categ':
                            include "includes/add_categoriespila.php";
                            break;
							
                        default:
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover custom-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Title</th>
                                            <th>Descriptions</th>
											<th>Wheels</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
		
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM categoriespila order by cat_id desc";
                                        $select_users = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_users)) {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];
                                            $description = $row['description'];
											 $wheels = $row['wheels'];
                                        ?>
                                            <tr>
                                                <td><?php echo $cat_id; ?></td>
                                                <td><?php echo $cat_title; ?></td>
                                                <td><?php echo $description; ?></td>
												<td><?php echo $wheels; ?></td>
                                                <td>
                                                 
										   <button class="btn btn-primary" data-toggle="modal" data-target="#optionsModal<?php echo $cat_id; ?>">Options</button>
												
												

													  
													  
													  
													  
                                                    <div class="modal fade" id="optionsModal<?php echo $cat_id; ?>" tabindex="-1" role="dialog" aria-labelledby="optionsModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="optionsModalLabel">Options for Category ID: <?php echo $cat_id; ?></h5>
                                                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Choose an option:</p>
                                                                    <div class="list-group">
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <a href='categoriespila.php?delete=<?php echo $cat_id; ?>' class="btn btn-danger btn-block">Delete</a>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <a href='categoriespila.php?source=update_user&cat_id=<?php echo $cat_id; ?>' class="btn btn-primary btn-block">Update</a>
                                                                            </li>
																		
                                                                         
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													
                                                </td>
												
												  
												
												
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    <?php
                        break;
                    }
                    ?>
                    <?php
                    if (isset($_GET['delete'])) {
                        $user_idd = $_GET['delete'];
                        $query = "DELETE FROM categoriespila WHERE cat_id = {$user_idd} ";
                        $delete_Learners = mysqli_query($connection, $query);
                        if (!$delete_Learners) {
                            die("Query Failed" . mysqli_error($delete_Learners));
                        }
                        header("Location: categoriespila.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>
	