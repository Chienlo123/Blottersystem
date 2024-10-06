<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
  
    <?php include "includes/navigation.php"; ?>


 
    <div class="container">


        <div class="row">
		
		 
		   <?php include "includes/sidebar.php"; ?>

         
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
                          Auto Motorcycle driving School In Marikina
                        </p>
                       
                        <hr>
                        <a href="Learners_info.php?Learners_id=<?php echo $Learners_id; ?>"><img class="img-responsive" src="images/wew.jpg" alt=""></a>
                     
                        <p>
						DRIVING IS A SPECTACULAR FORM OF AMNESIA.EVERYTHING IS TO BE DISCOVERED,EVERYTHING TO BE OBLITERATED.
						</p>
						
				
                       

                        <hr>
						
			<div id="header" class="shadow mb-4" >
              <div class="d-flex justify-content-center h-100 w-100 align-items-center flex-column px-3">
                  
                  <center ><a href="registration.php" class="btn btn-lg btn-light rounded-pill w-25" id="enrollment"><img class="img-responsive" src="images/enroll2.jpg" alt=""></a></center>
				  
              </div>
          </div>
                    <?php } ?>      

            </div>

    

        </div>
     

        <hr>

<?php include "includes/footer.php"; ?>