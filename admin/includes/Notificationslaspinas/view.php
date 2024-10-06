<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" integrity="sha384-d7Ij+Gp5PzAFhFIU3E3h4AJbF5GGV61FzV68pP1nJwsZUyK3VRtuFkcro4wHPMSpH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 24px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Notification</h1>

        <?php
        include("functions.php");

        $user_id = $_GET['user_id'];

        $query ="UPDATE `userslaspinas` SET `status` = 'read' WHERE `user_id` = $user_id;";
        performQuery($query);

        $query = "SELECT * from `userslaspinas` where `user_id` = '$user_id';";
        if(count(fetchAll($query)) > 0){
            foreach(fetchAll($query) as $i){
                if($i['type'] == 'like'){
                    echo '<p class="alert alert-success">'.ucfirst($i['name']).' liked your post.<br/>' . $i['date'] . '</p>';
                } else {
                    echo '<p class="alert alert-info">Someone registered.<br/>' . $i['name'] . ' ' . $i['user_lastname'] . ' - ' . $i['user_role'] . '</p>';
                }
            }
        }
        ?>

        <br/>
        <a href="../../reportlaspinas.php" class="btn btn-primary">Back</a>
    </div>
</body>
</html>
