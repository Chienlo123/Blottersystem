

<?php include"includes/admin_header.php"; ?>

<div id="wrapper">
    <!-- Navigation -->
     <?php include"includes/admin_navigationadmin.php"; ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Application For Student Permit
                        <small>Requirements Laspinas</small>
                    </h1>

                    <?php
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = "";
                    }

                    switch ($source) {
                        case 'update_user':
                             include "includes/update_userlaspinas.php";
                            break;

                      

                        default:
                            ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                     <tr>
                                        <th>Id</th>
                                        <th>UserName</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Gcash-ScreenShot</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
										<th>Payment</th>
                                        <th>Role</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                     <?php 
									   

                                        $query = "SELECT *  FROM  userslaspinas where user_role = 'Enroll' ||  user_role = 'Not Enroll' order by user_id desc";
									  
                                        $select_users = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_users)) {
                                            $user_id = $row['user_id'];
                                            $username = $row['username'];
                                            $name = $row['name'];
                                            $user_lastname = $row['user_lastname'];
                                            $email = $row['email'];
                                            $user_role = $row['user_role'];
                                            $user_phoneno = $row['user_phoneno'];  
											$payment = $row['payment'];  
                                            $user_image = $row['user_image'];                                      

                                     ?>
                                        <tr>
                                            <td><?php echo $user_id ?></td>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $user_lastname ?></td>
                                        <td><img width="100" src="../admin/images/<?php echo $user_image ?>"></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $user_phoneno ?></td>
										<td><?php echo $payment ?></td>
                                       
                                            <td>
                                                <?php
                                                if ($user_role == 'Enroll') {
                                                    echo "<span style='color:green'>$user_role</span>";
                                                } else {
                                                    echo "<span style='color:red'>$user_role</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
    <button class="btn btn-primary" data-toggle="modal" data-target="#optionsModal<?php echo $user_id; ?>">Options</button>
    <div class="modal fade" id="optionsModal<?php echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="optionsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
		                 <div class="modal-header bg-primary text-white">
							<h5 class="modal-title" id="optionsModalLabel">Options for Learner ID: <?php echo $user_id; ?></h5>
							<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

								  <div class="modal-body">
										<p>Choose an option:</p>
										<div class="list-group">
											<ul class="list-group">
												<li class="list-group-item">
													<a href='userslaspinasadmin.php?delete=<?php echo $user_id; ?>' class="btn btn-danger btn-block">Delete</a>
												</li>
												<li class="list-group-item">
													<a href='userslaspinasadmin.php?source=update_user&user_id=<?php echo $user_id; ?>' class="btn btn-primary btn-block">Update</a>
												</li>
												<li class="list-group-item">
													<a href='userslaspinasadmin.php?Enroll=<?php echo $user_id; ?>' class="btn btn-success btn-block">Enroll</a>
												</li>
												<li class="list-group-item">
													<a href='userslaspinasadmin.php?Not_Enroll=<?php echo $user_id; ?>' class="btn btn-warning btn-block">Not Enroll</a>
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
                        $user_idd = $_GET['delete'];
                        $query = "DELETE FROM userslaspinas WHERE user_id = {$user_idd} ";
                        $delete_Learners = mysqli_query($connection, $query);
                        if (!$delete_Learners) {
                            die("Query Failed" . mysqli_error($delete_Learners));
                        }
                        header("Location: userslaspinasadmin.php");
                    }
                    ?>
                    <?php
                    if (isset($_GET['Not_Enroll'])) {
                        $user_id = $_GET['Not_Enroll'];
                        $query = "UPDATE userslaspinas SET user_role = 'Not Enroll' WHERE user_id = '$user_id'";
                        $add_admin = mysqli_query($connection, $query);
                        if (!$add_admin) {
                            die("Query Failed" . mysqli_error($connection));
                        }
                        header("Location: userslaspinasadmin.php");
                    }
                    ?>
                    <?php
                    if (isset($_GET['Enroll'])) {
                        $user_id = $_GET['Enroll'];
                        $query = "UPDATE userslaspinas SET user_role = 'Enroll' WHERE user_id = '$user_id'";
                        $add_admin = mysqli_query($connection, $query);
                        if (!$add_admin) {
                            die("Query Failed" . mysqli_error($connection));
                        }
                        header("Location: userslaspinasadmin.php");
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