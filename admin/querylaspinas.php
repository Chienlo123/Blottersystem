<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/Notificationslaspinas/admin_navigationlaspinas.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Contacts
                            <small>Us</small>
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
                                include "includes/add_Learnerslaspinas.php";
                                break;
                            
                            case 'update':
                                include "includes/updatelaspinas.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Option</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT *  FROM  contactlaspinas";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $id = $row['id'];
                                            
                                            $name = $row['name'];
                                            $email = $row['email'];
											$message = $row['message'];
                                           
                                        

                                     ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $message ?></td>
                                       
                                       
										<?php echo "<td><a href='querylaspinas.php?delete=$id' class='btn btn-danger'>Delete</a></td>"; ?>
                                        
                                    </tr>
                                    <?php } ?>
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
                            
                            $id = $_GET['delete'];
                          
                            $query = "DELETE FROM contactlaspinas WHERE id = {$id} ";

                            $delete_query = mysqli_query($connection,$query);
							
                            if(!$delete_query) {
                                die("Query Failed" . mysqli_error($delete_query));
                            }
                            header("Location: querylaspinas.php");
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