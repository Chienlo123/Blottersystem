<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=campus", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':choices1'		=>	$_POST["choices1"]
		);

		$query = "
		INSERT INTO feedbacknovaliches
		(choices1) VALUES (:choices1)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT choices1, COUNT(id) AS Total 
		FROM feedbacknovaliches 
		GROUP BY choices1
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'choices1'		=>	$row["choices1"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>