<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=campus", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':user_role'		=>	$_POST["user_role"]
		);

		$query = "
		INSERT INTO usersmarikina where user_role = 'Enroll ' || user_role = 'Not Enroll'
		(user_role) VALUES (:user_role)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT user_role, COUNT(user_id) AS Total 
		FROM usersmarikina where user_role = 'Enroll ' || user_role = 'Not Enroll'
		GROUP BY user_role
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'user_role'		=>	$row["user_role"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>