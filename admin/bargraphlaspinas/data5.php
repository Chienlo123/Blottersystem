<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=campus", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':choices3'		=>	$_POST["choices3"]
		);

		$query = "
		INSERT INTO feedbacklaspinas 
		(choices3) VALUES (:choices3)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT choices3, COUNT(id) AS Total 
		FROM feedbacklaspinas 
		GROUP BY choices3
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'choices3'		=>	$row["choices3"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>