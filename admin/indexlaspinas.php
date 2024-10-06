<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigationlaspinas.php"; ?>

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
 
     <button type="button" class="btn btn-primary" onclick="window.location.href='Learnerslaspinas.php'"> 
		  <h2><b> Requirements</b>  </h2>    
		  <p>See More Information</p></br>
	 </button>
         
     <button type="button" class="btn btn-primary" onclick="window.location.href='Learnerslaspinas.php?source=add_Learnerslaspinas'"> 
		    <h2><b>Requirements</b>  </h2> 
		  <p>Add Requirements</p></br>
	 </button>
     
	<button type="button" class="btn btn-primary" onclick="window.location.href='categorieslaspinas.php'"> 
		    <h2><b>Categories</b>  </h2> 
		  <p>Add Categories</p></br>
	 </button>
 

    
	 <button type="button" class="btn btn-primary" onclick="window.location.href='querylaspinas.php'"> 
		    <h2><b>Contact</b>  </h2> 
		  <p>Add Contact</p></br>
	 </button>
	 
	<button type="button" class="btn btn-primary" onclick="window.location.href='userslaspinas.php'"> 
		    <h2><b>All Users</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 
	
	 <button type="button" class="btn btn-primary" onclick="window.location.href='../profilelaspinas.php'"> 
		    <h2><b>Profile</b>  </h2> 
		  <p>See Profile</p></br>
	 </button>
	 
	 <button type="button" class="btn btn-primary" onclick="window.location.href='reportlaspinas.php'"> 
		    <h2><b>Reports</b>  </h2> 
		  <p>See Total Reports</p></br>
	 </button>
	 
	
<?php include"includes/admin_footer.php"; ?>