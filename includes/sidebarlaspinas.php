          
 <?php include "db.php"; ?>
  

		  <div class="col-md-4">

             


                <!-- Login -->
              

   <?php
if (!isset($_SESSION['s_username'])) {
?>
    <div class="well" style="background-color: #f8f9fa; border: 1px solid #dce0e5; border-radius: 10px; padding: 20px;">
        <h4 style="color: #1877f2; text-align: center; font-size: 24px; font-weight: bold;">Login Laspinas</h4>
        <form action="includes/loginlaspinas.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Username" style="border: 1px solid #dce0e5; border-radius: 5px; padding: 10px;">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" style="border: 1px solid #dce0e5; border-radius: 5px; padding: 10px; margin-top: 10px;">
            </div>
            <button class="btn btn-primary btn-block" name="login" style="border: none; background-color: #1877f2; border-radius: 5px; padding: 10px; font-weight: bold;">Login</button>
            <div style="text-align: center; margin-top: 10px;">
                <a href="includes/forgetpasslaspinas/forgot_password.php" style="text-decoration: none; color: #1877f2;">Forgot Password?</a>
				<a href="registrationlaspinas.php" style="text-decoration: none; color: #1877f2;">Registration</a>
            </div>
        </form>
    </div>
<?php
}
?>

                



                



            </div>
			
			
			
			
<script language="javascript" type="text/javascript">  

 document.getElementById("loc_select").onchange = function(){
	  
	  let selector = document.getElementById("loc_select");
      let value = selector[selector.selectedIndex].value;
  
    
     let nodeList = document.getElementById("city_select").querySelectorAll("option");
      nodeList.forEach(function(option){
   
        if(option.classList.contains(value)){
        option.style.display="block";
      }else{
          option.style.display="none";
       }
    
      });  
}

</script>