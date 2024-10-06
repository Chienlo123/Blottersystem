 
<?php include"includes/admin_header.php"; ?>
  
   
    <div id="wrapper"   style="margin-top:70px;margin-right:100px; margin-left:20px;" >
        
        <!-- Navigation -->
       <?php include"includes/Notificationspila/admin_navigationpila.php"; ?>

        <div id="page-wrapper" >

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Application For Student Permit
                            <small> Requirements</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'add_Learners':
                                include "includes/add_Learnerspila.php";
                                break;
                            
                            case 'update':
                                include "includes/updatepila.php";
                                break;

                            default: ?>
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

                                        $query = "SELECT *  FROM  postspila where confirm = 'Not_Complete'order by post_id desc";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $Learners_id = $row['post_id'];
                                            $admin_name = $row['post_author'];
                                            $Learners_name = $row['post_title'];
											
											$ADL = $row['ADL'];
											$PSA_NSO = $row['PSA_NSO'];
											$medicalcerti = $row['medicalcerti'];
											
											
											$image = $row['post_image'];
                                            $District = $row['District'];
                                            $City = $row['City'];
											$confirm = $row['confirm'];
											$date = $row['post_date'];
                                           
                                        
                                       

                                     ?>
                                    <tr>
                                        
                                        <td><?php echo $admin_name ?></td>
                                        <td><?php echo $Learners_name ?></td>
                                       
										<td><img width="100" src="../images/<?php echo $ADL ?>"></td>
										<td><img width="100" src="../images/<?php echo $PSA_NSO ?>"></td>
									     <td><img width="100" src="../images/<?php echo $medicalcerti ?>"></td>
                                        <td><img width="100" src="../images/<?php echo $image ?>"></td>
                                        <td><?php echo $date ?></td>
										 <td>
										 
										 	
									<?php 
										
										if($confirm == 'Complete'){
											echo"<span style='color:green'>$confirm</span>";
										}
										else{
											echo"<span style='color:red'>$confirm</span>";
										}
								     ?>
										 
										 
										 
										 
										 </td>

										    <td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Options</button></td>
                                    
                                    </tr>
                                    <?php }?>
                                </tbody>
                                </table><?php
                                break;
                        }
                        // if ($source = 'add_Learners') {
                        //        include "includes/add_Learners.php";   
                        // }
                        // elseif ($source = '') {
                        //     
                        // }   
                        ?>


                      

                        <?php 

                           if (isset($_GET['delete'])) {
                            
                            $Learners_idd = $_GET['delete'];
                            $query = "DELETE FROM postspila WHERE post_id = {$Learners_idd} ";

                            $delete_Learners = mysqli_query($connection,$query);
                            if(!$delete_Learners) {
                                die("Query Failed" . mysqli_error($delete_Learners));
                            }
                            header("Location: Learnerspila.php");
                        }


                        ?>
						
						
						 <?php 


                         if (isset($_GET['Not_Complete'])) {
                            $post_idd = $_GET['Not_Complete'];
                            $query = "UPDATE postspila SET confirm = 'Not_Complete' WHERE post_id = '$post_idd'";
                            
                            $add_admin = mysqli_query($connection, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($connection));
                            }
                          header("Location: Learnerspila.php");
                        }

                        ?>
						
						<?php 

						if (isset($_GET['Complete'])) {
                            $post_idd = $_GET['Complete'];
                            $query = "UPDATE postspila SET confirm = 'Complete' WHERE post_id = '$post_idd'";
                            
                            $add_admin = mysqli_query($connection, $query);

                            if(!$add_admin) {
                                die("Query Failed" . mysqli_error($connection));
                            }
                           header("Location: Learnerspila.php");
                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>







   
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Choose an Action</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
				
				   
				
				<style>
    .modal-body .list-group-item a.btn {
        width: 400px; /* Adjust the width as needed */
        padding: 10px 20px; /* Adjust padding as needed */
        font-size: 18px; /* Adjust font size as needed */
        border-radius: 10px; /* Add rounded corners */
        text-align: center; /* Center text horizontally */
        margin: 0 auto; /* Center horizontally */
        margin-bottom: 10px; /* Add spacing between buttons */
        text-decoration: none; /* Remove underline from links */
    }
    
    .modal-body .list-group-item a.btn:hover {
        opacity: 0.8; /* Change opacity on hover for visual feedback */
    }
</style>

          <div class="modal-body">
    <ul class="list-group">
        <li class="list-group-item">
            <a href="Learnerspila.php?delete=<?php echo $Learners_id; ?>" class="btn btn-danger btn-block">Delete</a>
        </li>
        <li class="list-group-item">
            <a href="Learnerspila.php?source=update&Learners_id=<?php echo $Learners_id; ?>" class="btn btn-primary btn-block">Update</a>
        </li>
        <li class="list-group-item">
            <a href="Learnerspila.php?Complete=<?php echo $Learners_id; ?>" class="btn btn-success btn-block">Complete</a>
        </li>
        <li class="list-group-item">
            <a href="Learnerspila.php?Not_Complete=<?php echo $Learners_id; ?>" class="btn btn-warning btn-block">Not Complete</a>
        </li>
    </ul>
</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
