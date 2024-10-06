<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Modal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
        body {
            background: url(../images/bk1.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .feedback-btn {
            margin-top: 20px;
            background-color: blue; /* Light blue background color */
            color: #fff; /* White text color */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .feedback-btn:hover {
            background-color: red; /* Darker blue on hover */
        }

        /* Customize modal background with increased transparency */
        .modal-content {
            background-color: rgba(255, 255, 255, 0.5); /* White background with 50% opacity */
        }
    </style>
</head>
<body>

<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary feedback-btn" data-toggle="modal" data-target="#feedbackModal">
    Give Feedback
</button>

<!-- Feedback Modal -->
<div class="modal" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!-- Use modal-lg class for a larger modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Feedback Novaliches</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Feedback form -->
                <?php include "feedback.php"; ?>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
