<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/Notificationspila/admin_navigationpila.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Dashboard
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		<br><br>
 
     <button type="button" class="btn btn-primary" onclick="window.location.href='Learnerspila.php'"> 
		  <h2><b>Requirements</b>  </h2>    
		  <p>See More Information</p></br>
	 </button>
         
     <button type="button" class="btn btn-primary" onclick="window.location.href='Learnerspila.php?source=add_Learners'"> 
		    <h2><b> Requirements</b>  </h2> 
		  <p>Add Requirements</p></br>
	 </button>
     
	<button type="button" class="btn btn-primary" onclick="window.location.href='categoriespila.php'"> 
		    <h2><b>Categories</b>  </h2> 
		  <p>Add Categories</p></br>
	 </button>
	 
	 	<button type="button" class="btn btn-primary" onclick="window.location.href='querypila.php'"> 
		    <h2><b>Contact</b>  </h2> 
		  <p>Add Contact</p></br>
	 </button>
  
  
	 
	<button type="button" class="btn btn-primary" onclick="window.location.href='userspila.php'"> 
		    <h2><b>All Users</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 
	 
	 
	 <button type="button" class="btn btn-primary" onclick="window.location.href='../profilepila.php'"> 
		    <h2><b>Profile</b>  </h2> 
		  <p>See Profile</p></br>
	 </button>
	 
	 <button type="button" class="btn btn-primary" onclick="window.location.href='reportpila.php'"> 
		    <h2><b>Reports</b>  </h2> 
		  <p>See Total Reports</p></br>
	 </button>
	 
	
<?php include"includes/admin_footer.php"; ?>