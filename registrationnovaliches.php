<?php include "includes/db.php"; ?>
<?php include "includes/headernovaliches.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigationnovaliches.php"; ?>

<?php

if (isset($_POST['register'])) {
//echo "registered";


    $pay_course = $_POST['pay_course'];
    $u_role = $_POST['u_role'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
	
    $password = $_POST['password'];

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
	

    move_uploaded_file($tmp_image, "admin/images/$image");
    if ($image == "") {
      $image = "gcash.png";
    }

if ($username=="" || $name=="" || $lastname=="" || $email=="" || $phone_no=="" || $image=="" || $password=="") {
  # code...
  echo "**ALL FIELDS MANDATORY";
}

else {

$query = "INSERT INTO usersnovaliches(username, password, name, user_lastname, email, user_phoneno, user_role,paycourse, user_image,type, status, date) VALUES('$username', '$password', '$name', '$lastname', '$email', '$phone_no', '$u_role','$pay_course', '$image', 'comment', 'unread', CURRENT_TIMESTAMP) ";

$register_user = mysqli_query($connection, $query);

if(!$register_user) {
    die("Query Failed" . mysqli_error($connection));
}

 echo "<script>alert('You Are Successfully Register  Please go to Login ')</script>";
    
                  echo "<script> document.location.href='admin/reportnovaliches.php';</script>";

}

}

?>

    <!-- Page Content -->
    <!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->
	
	<style>


h1
{
	text-align: center;
	
}
.qr-code-container {
	margin-top: 15px;
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	text-align: center;
}

.qr-code-container img {
	max-width: 100%;
	height: auto;
}

</style>


    <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="images/raj.png" style="margin-top: 30%;">
    </div>
    <div class="col-lg-6">
      <h2>Enrollment Novaliches</h2>
      <div class="registration-box">
        <form action="" method="post" enctype="multipart/form-data">
			  
			  
		
			  
			   <div class="form-group">
                  <label> User Type</label>
                  <input type="text" class="form-control" id="email" value="Not Enroll"  name="u_role" required readonly>
                </div>
				 
				 
				 <div class="form-group">
				<h1>GCash Payment QR Code</h1>
		<div class="qr-code-container">
			<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=gcash://send%3Famount%3D50%26recip%3D09171234567%26memo%3DTest%20Payment" alt="GCash Payment QR Code">
		</div>
		
		
                  
                  
				  <div class="form-group">
                    <label>Screen Shot of Payment</label>
                    <input type="file" name="image" >
                </div>
                </div>
		
		           <div class="form-group">
                  <label>Payment Type</label>
                  <input type="text" class="form-control" id="paycourse" value="TDC" name="pay_course" required readonly>
                </div>
		       
		       
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username" required>
                </div>

                <div class="form-group">
                  <label>Firstname:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Firstname" name="name" required>
                </div>

                <div class="form-group">
                  <label>Lastname:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Lastname" name="lastname" required>
                </div>

               

                <div class="form-group">
                  <labe>Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                
                <div class="form-group">
                  <label>Phone No:</label>
                  <input type="number" class="form-control" id="pwd" placeholder="Enter phone No" name="phone_no" required>
                </div>
	
				
				


                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                </div>
				
		
         
          
          <button type="submit" class="btn btn-register" name="register">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
        <hr>


<?php include "includes/footer.php"; ?>


<style>

<style>
  .container {
    padding: 20px;
  }

  .registration-box {
    background-color: #f3f3f3; /* Background color for the registration box */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    font-weight: bold;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn-register {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #1E90FF;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
  }
</style>

</style>
