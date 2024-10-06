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
 
     
	 
	
	 
	<button type="button" class="btn btn-primary" onclick="window.location.href='usersadmin.php'"> 
		    <h2><b>All Users Marikina</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 <button type="button" class="btn btn-primary" onclick="window.location.href='userslaspinasadmin.php'"> 
		    <h2><b>All Users Laspinas</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 
	 <button type="button" class="btn btn-primary" onclick="window.location.href='usersnovalichesadmin.php'"> 
		    <h2><b>All Users Novaliches</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 
	 <button type="button" class="btn btn-primary" onclick="window.location.href='userspilaadmin.php'"> 
		    <h2><b>All Users Pila</b>  </h2> 
		  <p>See All Users</p></br>
	 </button>
	 
	 
	 	<button type="button" class="btn btn-primary" onclick="window.location.href='queryadmin.php'"> 
		    <h2><b>Contact</b>  </h2> 
		  <p>Add Contact</p></br>
	 </button>
	 
	
	 
	
<?php include"includes/admin_footer.php"; ?>