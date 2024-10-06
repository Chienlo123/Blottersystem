<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigationlaspinas.php"; ?>

<style>
    /* Add your custom CSS styles here */
	
    .fcf-body {
		
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
        background-color: #f0f0f0;
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .fcf-form-control {
        padding: 10px;
        margin-bottom: 15px;
    }

    .fcf-label {
        font-weight: 600;
    }

    .fcf-btn {
        padding: 10px 20px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .fcf-btn:hover {
        background: #0056b3;
    }

    .fcf-success {
        background: #4CAF50;
        color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: none; /* Hide initially */
    }

</style>

<body>
    <div class="fcf-body">
        <h3 style="text-align:center; font-weight: 600; font-size: 40px;">Contact us Laspinas</h3>
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="name" class="fcf-label">Your name</label>
                <input type="text" id="name" name="name" class="form-control fcf-form-control" required>
            </div>

            <div class="form-group">
                <label for="email" class="fcf-label">Your email address</label>
                <input type="email" id="email" name="email" class="form-control fcf-form-control" required>
            </div>

            <div class="form-group">
                <label for="message" class="fcf-label">Your message</label>
                <textarea id="message" name="message" class="form-control fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn fcf-btn">Submit</button>
        </form>

        <div class="fcf-success">
            Thank you for contacting us. We will be in touch with you very soon.
        </div>
    </div>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "campus";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['email'] && !empty($_POST['message']))) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = "INSERT INTO contactlaspinas (name, email, message) VALUES ('$name', '$email', '$message')";
            $run = mysqli_query($conn, $query) or die(mysql_error());

            if ($run) {
                echo "<script>document.querySelector('.fcf-success').style.display = 'block';</script>";
            } else {
                echo "<script>document.querySelector('.fcf-success').style.display = 'block';</script>";
            }
        }
    }
    ?>

</body>
</html>
<?php include "includes/footerlaspinas.php"; ?>
