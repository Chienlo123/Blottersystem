<?php include "includes/db.php"; ?>
<?php include "includes/headeradmin.php"; ?>
    
  
    <?php include "includes/navigationadmin.php"; ?>

 
    <div class="container">

        <div class="row">
		
		 
		   <?php include "includes/sidebaradmin.php"; ?>

         
            <div class="col-md-8">

                <?php 

                    
                    $query = "SELECT *  FROM  posts where confirm = 'Complete' order by rand() limit 13";
                    $select_all_Learners = mysqli_query($connection,$query);

               
                    if($row = mysqli_fetch_assoc($select_all_Learners)) {
                        $Learners_id = $row['post_id'];
                           $admin = $row['post_author'];
						   $category = $row['post_category_id'];
						   $Learners_Name = $row['post_title'];
						   $image = $row['post_image'];
						   $detail = $row['post_content'];
						   
                           $District = $row['District'];
                           $City = $row['City'];
                            ?>

                            <!-- First Blog Post -->
                           <h2>
                            The Development web-Based System 
                        </h2>
                        <p class="lead">
                          Auto Motorcycle driving School Admin
                        </p>
                       
                        <hr>
                        <a href="Learners_infoadmin.php?Learners_id=<?php echo $Learners_id; ?>"><img class="img-responsive" src="images/admin.jpg" alt=""></a>
                     
                     
						
				
                       

                        </hr>
						
			
                    <?php } ?>      

            </div>

    

        </div>
     

        <hr>

<?php include "includes/footeradmin.php"; ?>