<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Zone</title>

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
    if (isset($_POST['fname'])) {
        $fname = $_POST["fname"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        if ($fname == "" || $pass == "") {
            echo "
            <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
                <div class='card-header'>
                    Account can't be created!
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>
                        All inputs are neccessary!
                    </h5>
                    <p class='card-text'>
                        All inputs are necessary  to create new account
                    </p>
                    <button class='btn-secondary'>
                        <a href='home.php'>Go Back</a>
                    </button>
                </div>
            </div>";
        } else {

            if ($_SERVER['REQUEST_METHOD'] == "POST") //con establish
            {
                $localhost = "localhost";
                $username = "root";
                $password = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $username, $password, $db);
                if (!$conn) {
                    echo "";
                } else {
                    echo "";
                }
                $result = mysqli_query($conn, "select * from exptable where fname='$fname'")
                    or die("FAILED!!" . mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                if ($row['fname'] == $fname) {
                    echo "
                    <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Account cant be created!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>
                                Username," . $fname . "
                            </h5>
                            <p class='card-text'>
                                Alreday exists please choose another username to create new account
                            </p>
                            <button class='btn-secondary'>
                                <a href='home.php'>Go Back</a>
                            </button>
                        </div>
                    </div>";
                } else {
                    $sql = "insert into exptable values('$fname','$pass','$email')";
                    $result = mysqli_query($conn, $sql);
                    echo "
                    <div class='card text-white bg-success mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Account Created!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>
                                Welcome," . $fname . "
                            </h5>
                            <p class='card-text'>
                                Hello welcome to the family of learners 
                            </p>
                            <button class='btn-success'>
                                <a href='home.php'>Go Home!</a>
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