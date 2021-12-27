<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="css/popup.css">
</head>

<body>
    <?php
    if (isset($_GET['username'])) {
        $username = $_GET["username"];
        $comment = $_GET["comment"];

        if ($username == "" || $comment == "") {

            echo "
            <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
                <div class='card-header'>
                    Suggestion could not be sent!
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>
                        Username or Suggestion is empty!
                    </h5>
                    <p class='card-text'>
                        All inputs are requires to send suggestions! 
                    </p>
                    <button class='btn-success'>
                        <a href='home.php'>Create Account</a>
                    </button>
                    <button class='btn-secondary'>
                        <a href='home.php'>Go Back!</a>
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
                $result = mysqli_query($conn, "SELECT * FROM exptable WHERE fname='$username'")
                    or die("FAILED!!" . mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                if ($row['fname'] != $username) {

                    echo "
                    <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Suggestion could not be sent!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>
                                Username is incorrect!
                            </h5>
                            <p class='card-text'>
                                Only account holders can give suggestions!
                            </p>
                            <button class='btn-success'>
                                <a href='home.php'>Create Account</a>
                            </button>
                            <button class='btn-secondary'>
                                <a href='http://localhost/Learning-Zone/'>Go Back!</a>
                            </button>
                        </div>
                    </div>";
                } else if ($row['fname'] == $username) {
                    $reviewtime = date("m/d/y G.i:s<br>", time());
                    $sql = "INSERT INTO reviewtable VALUES('$username','$comment','$reviewtime')";
                    $result = mysqli_query($conn, $sql);
                    echo "
                    <div class='card text-white bg-success mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Suggestion Submitted!</div>
                        <div class='card-body'>
                            <h5 class='card-title'>
                                Thank You," . $username . "
                            </h5>
                            <p class='card-text'>
                                We appreciate you for taking out your valueable time for us 
                            </p>
                            <button class='btn-secondary'>
                                <a href='home.php'>Continue</a>
                            </button>
                        </div>
                    </div>";
                }
            }
        }
    }
    ?>
</body>

</html>