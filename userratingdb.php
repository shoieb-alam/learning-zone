<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Suggestions </title>

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

    <style>
        body {
            background: url('img/reviewback.jpg') no-repeat;
            background-size: cover;
        }

        .card {
            position: relative;
            top: 100px;
        }

        a,
        a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php

    $fname = $_SESSION["username"];
    if (isset($_GET['ui'])) {
        $ui = $_GET["ui"];
        $performance = $_GET["performance"];
        $design = $_GET["design"];
        $usablity = $_GET["usablity"];

        if ($ui == "" || $performance == "" || $usablity == "") {
            echo "all inputs required";
        } else {

            if ($_SERVER['REQUEST_METHOD'] == "GET") //con establish
            {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                    echo "";
                } else {
                    echo "";
                }

                $sql = "insert into ratingtable values('$fname','$ui','$performance','$design','$usablity')";
                $result = mysqli_query($conn, $sql);
                echo "
                <div class='card text-white bg-success mb-3 text-center mx-auto' style='max-width: 18rem;'>
                    <div class='card-header'>
                        Suggestion Submitted!
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>
                            Thank You, " . $fname . "
                        </h5>
                        <p class='card-text'>
                            We appreciate you for taking out your         valueable time for us 
                        </p>
                        <button class='btn-secondary'>
                            <a href='http://localhost/Learning-Zone/myaccount.php'> Continue </a>
                        </button>
                    </div>
                </div>";
            }
        }
    }
    ?>
</body>

</html>