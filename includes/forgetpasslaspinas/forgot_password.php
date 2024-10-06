<?php include "../db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
	
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h1 class="card-title text-center mb-7">Password Reset</h1>
					<h2 class="text-center mb-4">
    <span class="text-primary">Enter Your Email Account Laspinas</span>
    <br>
    <small class="text-muted">to reset your password</small>
</h2>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];

                        // Check if the email exists in your database
                        $query = "SELECT * FROM userslaspinas WHERE email = '$email'";

                        // Execute the query
                        // Assuming you're using MySQLi for database operations
                        $result = mysqli_query($connection, $query); // $connection should be your database connection

                        if (mysqli_num_rows($result) > 0) {
                            // email found, display the form to set a new password
                            echo '<form action="reset_password.php" method="post">
                                <input type="hidden" name="email" value="' . $email . '">
                                <div class="form-group">
                                    <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                            </form>';
                        } else {
                            echo '<div class="alert alert-danger mt-3">Email not found in the database.</div>';
                        }
                        
                        // Add the back button to return to the login page
                        echo '<a href="../../indexlaspinas.php" class="btn btn-secondary btn-block mt-2">Back to Login</a>';
                    } else {
                        // Display the form for entering the email
                        echo '<form action="forgot_password.php" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and jQuery script links here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
