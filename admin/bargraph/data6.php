<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=campus", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':choices4'		=>	$_POST["choices4"]
		);

		$query = "
		INSERT INTO feedback 
		(choices4) VALUES (:choices4)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT choices4, COUNT(id) AS Total 
		FROM feedback 
		GROUP BY choices4
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'choices4'		=>	$row["choices4"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>