

<?php include "includes/admin_header.php"; ?>

<div id="wrapper"  style="margin-top:70px;margin-right:100px; margin-left:20px;" >
    <!-- Navigation -->
    <?php include "includes/admin_navigationadmin.php"; ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Application For Student Permit
                        <small>Requirements Novaliches</small>
                    </h1>

                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = "";
                    }

                    switch ($source) {
                        case 'add_Learners':
                            include "includes/add_Learnersnovaliches.php";
                            break;

                        case 'update':
                            include "includes/updatenovaliches.php";
                            break;

                        default:
                            ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">UserName</th>
										 <th style="text-align:center">Name</th>
                                         
										<th style="text-align:center">App Driver License</th>
										<th style="text-align:center">PSA/NSO</th>
										
										 <th style="text-align:center">MedicalCertificate</th>
                                       <th style="text-align:center">Image</th>
                                        <th style="text-align:center">Date</th>
									   <th style="text-align:center">Status</th>
									      <th style="text-align:center">Options</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM  postsnovaliches order by post_id desc";
                                    $select_posts = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($select_posts)) {
                                       $Learners_id = $row['post_id'];
                                        $admin_name = $row['post_author'];
                                        $Learners_name = $row['post_title'];
										
                                        $ADL = $row['ADL'];
                                        $PSA_NSO = $row['PSA_NSO'];
                                       
                                        $medicalcerti = $row['medicalcerti'];
                                        $image = $row['post_image'];
                                        $confirm = $row['confirm'];
                                        $date = $row['post_date'];
                                        ?>
                                        <tr>
                                             <td><?php echo $admin_name ?></td>
                                            <td><?php echo $Learners_name ?></td>
                                        
                                            <td><?php echo $parentconsent ?></td>
                                          
											
											
											  <td><img width="100" src="../images/<?php echo $ADL ?>"></td>
										<td><img width="100" src="../images/<?php echo $PSA_NSO ?>"></td>
									     <td><img width="100" src="../images/<?php echo $medicalcerti ?>"></td>
                                
                                            <td><img width="100" src="../images/<?php echo $image ?>"></td>
                                            <td><?php echo $date ?></td>
                                            <td>
                                                <?php
                                                if ($confirm == 'Complete') {
                                                    echo "<span style='color:green'>$confirm</span>";
                                                } else {
                                                    echo "<span style='color:red'>$confirm</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
    <button class="btn btn-primary" data-toggle="modal" data-target="#optionsModal<?php echo $Learners_id; ?>">Options</button>
    <div class="modal fade" id="optionsModal<?php echo $Learners_id; ?>" tabindex="-1" role="dialog" aria-labelledby="optionsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
		                 <div class="modal-header bg-primary text-white">
							<h5 class="modal-title" id="optionsModalLabel">Options for Learner ID: <?php echo $Learners_id; ?></h5>
							<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

								  <div class="modal-body">
										<p>Choose an option:</p>
										<div class="list-group">
											<ul class="list-group">
												<li class="list-group-item">
													<a href='Learnersnovalichesadmin.php?delete=<?php echo $Learners_id; ?>' class="btn btn-danger btn-block">Delete</a>
												</li>
												<li class="list-group-item">
													<a href='Learnersnovalichesadmin.php?source=update&Learners_id=<?php echo $Learners_id; ?>' class="btn btn-primary btn-block">Update</a>
												</li>
												<li class="list-group-item">
													<a href='Learnersnovalichesadmin.php?Complete=<?php echo $Learners_id; ?>' class="btn btn-success btn-block">Complete</a>
												</li>
												<li class="list-group-item">
													<a href='Learnersnovalichesadmin.php?Not_Complete=<?php echo $Learners_id; ?>' class="btn btn-warning btn-block">Not Complete</a>
												</li>
											</ul>
										</div>
									</div>

        </div>
    </div>
</td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php
                            break;
                    }
                    ?>
                    <?php
                    if (isset($_GET['delete'])) {
                        $Learners_idd = $_GET['delete'];
                        $query = "DELETE FROM postsnovaliches WHERE post_id = {$Learners_idd} ";
                        $delete_Learners = mysqli_query($connection, $query);
                        if (!$delete_Learners) {
                            die("Query Failed" . mysqli_error($delete_Learners));
                        }
                        header("Location: Learnersnovalichesadmin.php");
                    }
                    ?>
                    <?php
                    if (isset($_GET['Not_Complete'])) {
                        $post_idd = $_GET['Not_Complete'];
                        $query = "UPDATE postsnovaliches SET confirm = 'Not_Complete' WHERE post_id = '$post_idd'";
                        $add_admin = mysqli_query($connection, $query);
                        if (!$add_admin) {
                            die("Query Failed" . mysqli_error($connection));
                        }
                        header("Location: Learnersnovalichesadmin.php");
                    }
                    ?>
                    <?php
                    if (isset($_GET['Complete'])) {
                        $post_idd = $_GET['Complete'];
                        $query = "UPDATE postsnovaliches SET confirm = 'Complete' WHERE post_id = '$post_idd'";
                        $add_admin = mysqli_query($connection, $query);
                        if (!$add_admin) {
                            die("Query Failed" . mysqli_error($connection));
                        }
                        header("Location: Learnersnovalichesadmin.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>
