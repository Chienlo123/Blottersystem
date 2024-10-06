<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=campus", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':choices2'		=>	$_POST["choices2"]
		);

		$query = "
		INSERT INTO feedbacklaspinas 
		(choices2) VALUES (:choices2)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT choices2, COUNT(id) AS Total 
		FROM feedbacklaspinas 
		GROUP BY choices2
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'choices2'		=>	$row["choices2"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>