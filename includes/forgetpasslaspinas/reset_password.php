<?php
include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-4" style="text-align:center">Password Reset</h2>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $new_password = $_POST['new_password'];
                $confirm_password = $_POST['confirm_password'];

                // Check if the new password and confirm password match
                if ($new_password == $confirm_password) {
                    // Update the user's password in the database
                    $query = "UPDATE userslaspinas SET password = '$confirm_password' WHERE email = '$email'";
                    $result = mysqli_query($connection, $query);

                    if ($result) {
                        echo '<div class="alert alert-success mt-3">Password reset successfully. You can now <a href="../../indexlaspinas.php">login</a> with your new password.</div>';
                    } else {
                        echo '<div class="alert alert-danger mt-3">Password reset failed. Please try again later.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger mt-3">New password and confirm password do not match. Please try again.</div>';
                }
            } else {
                // Display the form to reset the password
                echo '<form action="reset_password.php" method="post">
                    <input type="hidden" name="email" value="' . $email . '">
                    <div class="form-group mt-3">
                        <input type="password" name="new_password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
