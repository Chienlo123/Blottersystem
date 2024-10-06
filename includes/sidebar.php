          
 <?php include "db.php"; ?>
  

		  <div class="col-md-4" style="margin-top:70px;">

          


                <!-- Login -->
                <?php
if (!isset($_SESSION['s_username'])) {
?>
    <div class="well" style="background-color: #f8f9fa; border: 1px solid #dce0e5; border-radius: 10px; padding: 20px;">
        <h4 style="color: #1877f2; text-align: center; font-size: 24px; font-weight: bold;">Login Muntinlupa</h4>
        <form action="includes/login.php" method="post">
            <div >
                <input name="username" type="text" class="form-control" placeholder="Username" style="border: 1px solid #dce0e5; border-radius: 5px; padding: 10px;">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" style="border: 1px solid #dce0e5; border-radius: 5px; padding: 10px; margin-top: 10px;">
            </div>
            <button class="btn btn-primary btn-block" name="login" style="border: none; background-color: #1877f2; border-radius: 5px; padding: 10px; font-weight: bold;">Login</button>
            <div style="text-align: center; margin-top: 10px;">
                <a href="includes/forgetpass/forgot_password.php" style="text-decoration: none; color: #1877f2;">Forgot Password?</a>
				<a href="registration.php" style="text-decoration: none; color: #1877f2;">Registration</a>
            </div>
			
			
        </form>
    </div>
<?php
}
?>




                





            </div>
			
			
	