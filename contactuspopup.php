<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/popup.css">
</head>

<body>

    <?php
    if (isset($_GET['fullname'])) {
        $fullname = $_GET["fullname"];
        $email = $_GET["email"];
        $subject = $_GET["subject"];
        $message = $_GET["message"];

        if ($fullname == "" || $email == "" || $message == "" ||  $subject == "") {
            echo "
        <div class='card text-white text-center mx-auto bg-danger mb-3 rounded-3' style='max-width: 18rem;'>
            <div class='card-header'>
                Message could not be sent!
            </div>
            <div class='card-body'>
                <h5 class='card-title'>
                    At least one field is empty!
                </h5>
                <p class='card-text'>
                    All inputs are requires to send suggestions! 
                </p>
                <button class='btn btn-outline-secondary rounded-pill'>
                    <a href='http://localhost/Learning-Zone/#contactus'>
                        Go Back!
                    </a>
                </button>
            </div>
        </div>";
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
                $time = date("m/d/y G.i:s<br>", time());
                $sql = "INSERT INTO contacttable VALUES('$fullname','$email','$message','$subject','$time')";
                $result = mysqli_query($conn, $sql);

                echo "
            <div class='card text-white text-center mx-auto bg-success mb-3 rounded-3' style='max-width: 18rem;'>
                <div class='card-header'>
                    Messade Sent!
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>
                        Thank You, " . $fullname . "
                    </h5>
                    <p class='card-text'>
                        We appreciate you for taking out your valueable time for us 
                    </p>
                    <button class='btn btn-outline-dark rounded-pill'>
                    <a href='http://localhost/Learning-Zone/'>
                        Continue
                    </a>
                    </button>
                </div>
            </div>";
            } else {
                echo "error";
            }
        }
    }
    ?>
</body>

</html>