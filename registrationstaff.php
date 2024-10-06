<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

<?php

if (isset($_POST['register'])) {
//echo "registered";


    $Not_approved = $_POST['Not_approved'];
    $u_role = $_POST['u_role'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
	
    $password = $_POST['password'];

  


if ($username=="" || $name=="" || $lastname=="" || $email=="" || $phone_no=="" || $password=="") {
  # code...
  echo "**ALL FIELDS MANDATORY";
}

else {

$query = "INSERT INTO usersmarikina(username, password, name, user_lastname, email, user_phoneno, user_role,Not_approved,type, status, date) VALUES('$username', '$password', '$name', '$lastname', '$email', '$phone_no', '$u_role','$Not_approved', 'comment', 'unread', CURRENT_TIMESTAMP) ";

$register_user = mysqli_query($connection, $query);

if(!$register_user) {
    die("Query Failed" . mysqli_error($connection));
}

 echo "<script>alert('You Are Successfully Register  Please go to Login ')</script>";
    
                  echo "<script> document.location.href='admin/report.php';</script>";

}

}

?>

    <!-- Page Content -->
    <!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->
	



  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="your-stylesheet.css"> <!-- Include your stylesheet here -->
  <title>Registration Form</title>
</head>

<body class="d-flex align-items-center justify-content-center" >

  <div class="container" style="margin-left:500px;" >
    <div class="row">

      <div class="col-lg-6">
        <h2 class="text-center">Registration-Staff Muntinlupa</h2>
        <div class="registration-box">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>User Type</label>
              <input type="text" class="form-control" value="Staff" name="u_role" required readonly>
			  <br>
			    <input type="text" class="form-control" value="Staff_Registered" name="Not_approved" required readonly>
            </div>
			
			

            <div class="form-group">
              <label>Username:</label>
              <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            </div>

            <div class="form-group">
              <label>Firstname:</label>
              <input type="text" class="form-control" placeholder="Enter Firstname" name="name" required>
            </div>

            <div class="form-group">
              <label>Lastname:</label>
              <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" required>
            </div>

            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>

            <div class="form-group">
              <label>Phone No:</label>
              <input type="number" class="form-control" placeholder="Enter phone No" name="phone_no" required>
            </div>

            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>

              <button type="submit" class="btn btn-register" name="register">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>



<?php include "includes/footer.php"; ?>




<style>

 body {
      background-color: #add8e6; /* Light Blue */
    }
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


