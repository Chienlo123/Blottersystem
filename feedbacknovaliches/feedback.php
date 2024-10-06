
<style>
    /* Add your custom CSS styles here */

    .fcf-body {
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
        background-color: rgba(173, 216, 230, 0.8); /* Lightblue background with 80% opacity */
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
        <h3 style="text-align:center; font-weight: 600; font-size: 40px;">Your FeedBack </h3>
        <form action="index.php"method="POST">
		
		  <div class="form-group">
                <label for="name" class="fcf-label">Your name</label>
                <input type="text" id="name" name="name" class="form-control fcf-form-control" required>
            </div>
		

			<div class="form-group">
			  
			  

			   
				<label for="choices" class="fcf-label">1. Ikaw ba ay nasiyahan sa pangangalagang iyong natanggap mula sa aming EZ AUTO MOTORCYCLE DRIVING SCHOOL</label>
				<select id="choices" name="choices1" class="form-control fcf-form-control" required>
					<option value="(4)-Lubos na nasisiyahan">(4)-Lubos na nasisiyahan</option>
					<option value="(3)-Nasiyahan">(3)-Nasiyahan</option>
					<option value="(2)-Hindi gaanong nasiyahan">(2)-Hindi gaanong nasiyahan</option>
					<option value="(1)-Hindi nasiyahan">(1)-Hindi nasiyahan</option>
					<!-- Add more options as needed -->
				</select>
			</div>
			
			<div class="form-group">

			  
			   
				<label for="choices" class="fcf-label">2. Ikaw ba ay nabigyan ng sapat kaalaman patungkol sa mga serbisyong dapat mong matanggap?</label>
				<select id="choices" name="choices2" class="form-control fcf-form-control" required>
					<option value="(4)-Lubos na nasisiyahan">(4)-Lubos na nasisiyahan</option>
					<option value="(3)-Nasiyahan">(3)-Nasiyahan</option>
					<option value="(2)-Hindi gaanong nasiyahan">(2)-Hindi gaanong nasiyahan</option>
					<option value="(1)-Hindi nasiyahan">(1)-Hindi nasiyahan</option>
					<!-- Add more options as needed -->
				</select>
			</div>
			
				<div class="form-group">
			 
			   
				<label for="choices" class="fcf-label">3. Ikaw ba ay nasiyahan sa aming pasilidad?</label>
				<select id="choices" name="choices3" class="form-control fcf-form-control" required>
					<option value="(4)-Lubos na nasisiyahan">(4)-Lubos na nasisiyahan</option>
					<option value="(3)-Nasiyahan">(3)-Nasiyahan</option>
					<option value="(2)-Hindi gaanong nasiyahan">(2)-Hindi gaanong nasiyahan</option>
					<option value="(1)-Hindi nasiyahan">(1)-Hindi nasiyahan</option>
					<!-- Add more options as needed -->
				</select>
			</div>
			
				<div class="form-group">
			  
			   
				<label for="choices" class="fcf-label">4. Sa Kabuuan ikaw ba ay nasiyahan sa serbisyong iyong natanggap?</label>
				<select id="choices" name="choices4" class="form-control fcf-form-control" required>
					<option value="(4)-Lubos na nasisiyahan">(4)-Lubos na nasisiyahan</option>
					<option value="(3)-Nasiyahan">(3)-Nasiyahan</option>
					<option value="(2)-Hindi gaanong nasiyahan">(2)-Hindi gaanong nasiyahan</option>
					<option value="(1)-Hindi nasiyahan">(1)-Hindi nasiyahan</option>
					<!-- Add more options as needed -->
				</select>
			</div>

          

            <div class="form-group">
                <label for="message" class="fcf-label">Mairerekomenda mo ba sa iba ang serbisyong iyong natanggap?</label>
                <textarea id="message" name="message" class="form-control fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn fcf-btn">Submit</button>
        </form>

       
    </div>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "campus";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['choices1'] && !empty($_POST['choices2']&& !empty($_POST['choices3'] && !empty($_POST['choices4'] && !empty($_POST['message'])))))) {
            $name = $_POST['name'];
            $message = $_POST['message'];
			$choices1 = $_POST['choices1'];
			$choices2 = $_POST['choices2'];
			$choices3 = $_POST['choices3'];
			$choices4 = $_POST['choices4'];

            $query = "INSERT INTO feedbacknovaliches (name, choices1, choices2, choices3, choices4, message) VALUES ('$name', '$choices1', '$choices2', '$choices3', '$choices4', '$message')";
            $run = mysqli_query($conn, $query) or die(mysql_error());

           
        }
    }
    ?>

</body>
</html>
