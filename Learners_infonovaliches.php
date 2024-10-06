<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigationnovaliches.php"; ?>
	
	
	
	
	
	
	<!--<h1 style="color:blue; font-family: Trattatello; text-align: center;"> welcome to our learners driving school </h1>-->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
		

            <!-- Blog Entries Column -->
            <div class="col-md">

                <?php 

                    if(isset($_GET['Learners_id'])) {
                        $selected_Learners = $_GET['Learners_id'];
                    }

                    $query = "SELECT *  FROM  posts WHERE post_id = $selected_Learners ";

                    $select_all_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_query)) {
						
						   $Learners_id = $row['post_id'];
                           $admin = $row['post_author'];
						   $category = $row['post_category_id'];
						   $Learners_Name = $row['post_title'];
						   $image = $row['post_image'];
						   $Luser= $row['user_id'];
						   $detail = $row['post_content'];
						  
						   $Address = $row['Address'];
                           $District = $row['District'];
                           $City = $row['City'];
                        ?>

                        <!-- First Blog Post -->
                        <h2>
                           Keep Safe Drivers
                        </h2>
                        <p class="lead">
                            Learners More
                        </p>
                       
                        <hr>
                        <img class="img-responsive" src="images/home.png" alt="">

                        <hr>
                        <p>SAFE DRIVING </br>
						CHANGE THE WAY YOU THINK</br>
						THINK ABOUT DRIVING.

						</p></br>
						*IT COULD SAVE YOUR LIFE & OTHERS 
						</br>
						*PREVENT ROAD RAGE
						</br>
						*LOWER YOUR INSURANCE RATES
						</br>
						*GET FEWER TICKETS
						</br>
						*SAVE MONEY - SAVE LIVE
						
						</br></br>
						
						
						
                        
                


                      

                             
								
								
					

                                <?php

                               if (isset($_POST['book'])) {
	  
	$name= $_POST['name'];
	$age = $_POST['userage'];
	$pno = $_POST['pno'];
	 $selected_Learners = $_GET['Learners_id'];
	  $Luser = $_GET['Learnersuser_id'];
	 $user_name = ucfirst($_SESSION['s_username']) ;
	           $curr_user_id = $_SESSION['s_id'];
      
  
    
  	$insert = "INSERT INTO orders( Learners_id, user_id, user_name, user_age, order_name, order_Phone, Learners_userid ) VALUES ('$selected_Learners', '$curr_user_id', '$user_name', '$age', '$name', '$pno', '$Luser')";
  	
  if(	mysqli_query($connection,$insert))
{
 
    echo "<script>alert('You Are successfully booking And We Will Contact Soon Thank you!......')</script>";
  
      echo "<script> document.location.href='index.php';</script>";
     
}

else{
    
     echo "<script>alert('Please Try Again')</script>";
     echo "<script> document.location.href='index.php';</script>";

  	}
  }
 
	}
?>
     </div>
 </div>
                     

                


                    <!-- Blog Comments -->

                <?php 

                    if (isset($_POST['submit_query'])) {
                        $user_name = $_SESSION['s_username'];
                        if($user_name == '') {
                            $user_name = "(unknown)";
                        }
                        $user_email = $_POST['user_email'];
                        $user_query = $_POST['user_query'];

                        $query = "INSERT INTO query(query_Learners_id, query_user, query_email, query_date, query_content, query_replied) VALUES ('$selected_Learners', '$user_name', '$user_email', now(), '$user_query', 'no')";

                        $query_insert = mysqli_query($connection, $query);
                        if(!$query_insert) {
                            die("Query Failed" . mysqli_error($connection));
                        }

                        $query = "UPDATE posts SET post_query_count = post_query_count + 1 WHERE post_id = $Learners_id";
                        $increase_query_count = mysqli_query($connection,$query);
                    }

                ?>



                <!-- Comments Form -->
                

            </div>
 
         
        </div>
    

        <hr>
		
		 
<script src="js/preventrefresh.js"></script>
<?php include "includes/footer.php"; ?>