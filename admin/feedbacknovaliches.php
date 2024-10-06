<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/Notificationsnovaliches/admin_navigationnovaliches.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Feedback
                        <small>Novaliches</small>
                    </h1>

                    <?php

                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = "";
                    }

                    switch ($source) {
                        case 'add_Learners':
                            include "includes/add_Learnersnovaliches.php";
                            break;

                        case 'update':
                            include "includes/updatenovaliches.php";
                            break;

                        default: ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Question1</th>
                                    <th>Question2</th>
                                    <th>Question3</th>
                                    <th>Question4</th>
                                    <th>Message</th>
                                    <th>Option</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php

                                $query = "SELECT *  FROM  feedbacknovaliches order by id desc";
                                $select_posts = mysqli_query($connection, $query);

                                while ($row = mysqli_fetch_assoc($select_posts)) {
                                    $id = $row['id'];

                                    $name = $row['name'];
                                    $choices1 = $row['choices1'];
                                    $choices2 = $row['choices2'];
                                    $choices3 = $row['choices3'];
                                    $choices4 = $row['choices4'];
                                    $message = $row['message'];

                                    ?>

                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $choices1 ?></td>
                                        <td><?php echo $choices2 ?></td>
                                        <td><?php echo $choices3 ?></td>
                                        <td><?php echo $choices4 ?></td>
                                        <td><?php echo $message ?></td>

                                        <?php echo "<td><a href='feedbacknovaliches.php?delete=$id' class='btn btn-danger'>Delete</a></td>"; ?>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <?php
                            break;
                    }
                    ?>

                    <?php

                    if (isset($_GET['delete'])) {

                        $id = $_GET['delete'];

                        $query = "DELETE FROM feedbacknovaliches WHERE id = {$id} ";

                        $delete_query = mysqli_query($connection, $query);

                        if (!$delete_query) {
                            die("Query Failed" . mysqli_error($delete_query));
                        }
                        header("Location: feedbacknovaliches.php");
                    }

                    ?>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php"; ?>
