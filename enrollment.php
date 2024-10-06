<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
  
    <?php include "includes/navigation.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Driver's Lesson Enrollment Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<style>

body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;
}

h1 {
	font-size: 36px;
	margin-bottom: 10px;
	margin-top:50px;
}

form {
	background-color: #f2f2f2;
	padding: 20px;
	margin: 20px;
	border-radius: 5px;
}

label {
	display: block;
	margin-bottom: 10px;
	font-size: 16px;
	font-weight: bold;
}

input[type="text"],
input[type="email"],
select {
	display: block;
	margin-bottom: 10px;
	padding: 5px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
	width: 100%;
}

input[type="date"] {
	display: block;
	margin-bottom: 10px;
	padding: 5px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
}

input[type="submit"] {
	background-color: #333;
	color: #fff;
	border: none;
	border-radius: 5px;
	padding: 10px 20px;
	font-size: 16px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #666;
}
</style>

	<header>
		<h1>Driver's Lesson Enrollment Form</h1>
	</header>
	
	
	   
	
	<form action="enrollment.php" method="POST">
		<label for="name">Full Name:</label>
		<input type="text" name="name"  placeholder="Please enter your Name" id="name" required>
		

		<label for="email">Email:</label>
		<input type="email" name="email"  placeholder="Please enter your Email" id="email"  required>
		

		<label for="phone">Phone Number:</label>
		<input type="text" name="phone"  placeholder="Please enter your Contact Number" id="contact" required>

		<label for="address">Address:</label>
		<input type="text" name="address" placeholder="Please enter your Address" id="address" required>

		<label for="license_type">License Type:</label>
		<select name="license_type" required >
			<option value="none">Select License Type</option>
			<option value="learner">Learner's Permit</option>
			<option value="provisional">Provisional License</option>
			<option value="full">Full License</option>
		</select>

		<label for="lesson_type">Lesson Type:</label>
		<select name="lesson_type" required>
			<option value="none">Select Lesson Type</option>
			<option value="beginner">Beginner Lesson</option>
			<option value="advanced">Advanced Lesson</option>
		</select>
		
		
		
		
		  
		  <div class="form-group">
                                    <label for="time" class="control-label">Preferred Time</label>
                                    <select name="time" id="time" class="form-control form-control-border border-navy select2" required>
                                        <?php 
                                        $time = date("Y-m-d")." 8:00";
                                        for($i = 0 ; $i < 9;$i++):
                                        ?>
                                        <option><?= date("h:i A",strtotime($time." +{$i} hours")) ?> - <?= date("h:i A",strtotime($time." +".($i + 1)." hours +30 mins")) ?></option>
                                        <?php
                                            $i++;
                                            endfor;
                                        ?>
                                    </select>
                                </div>
        
		<label for="address">Birthday:</label>
		<input type="date" name="birthday" placeholder="Please enter your Birthday" id="birthday" required>


		
		<label for="date">Preferred Date:</label>
		<input type="date" name="date" required>
		
		
                                   
                               
                          

		<input type="submit" name="submit" value="Enroll">
		
		
	</form>
	
	
</body>
</html>


	
<?php
$server="localhost";
$username= "root";
$password="";
$dbname="campus";

$conn = mysqli_connect($server ,  $username, $password, $dbname) ;

if(isset($_POST['submit']))
{
    if(!empty($_POST['name'] && !empty($_POST['email']&& !empty($_POST['birthday']&& !empty($_POST['phone']&& !empty($_POST['address']&& !empty($_POST['license_type']&& !empty($_POST['lesson_type']&& !empty($_POST['time']&& !empty($_POST['date']))))))))))
    {
        $name = $_POST['name'];
		$email = $_POST['email'];
		$birthday = $_POST['birthday'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
        $license_type = $_POST['license_type'];
		$lesson_type = $_POST['lesson_type'];
		$time = $_POST['time'];
		$date = $_POST['date'];
       

        $query = "insert into enrollment(name,email,birthday,phone,address,license_type,lesson_type,time,date) values('$name','$email','$birthday','$phone','$address','$license_type','$lesson_type','$time','$date')";

        
		$run = mysqli_query($conn,$query) or die(mysql_error());
        if($run)
        {

            echo "Your Account Has Been Submitted Successfully";
        }
        else
        {
            echo "Your Form Not Submitted successfully";
        }
    }
}
?>

<?php include "includes/footer.php"; ?>