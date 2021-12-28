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
    <link rel="stylesheet" href="css/popup.css">
</head>

<body>
    <?php
    if (isset($_GET['fname'])) {
        $fname = $_GET["fname"];
        $password = $_GET["pwd"];
        $email = $_GET["email"];

        if ($fname == "" || $password == "" || $email == "") {

            echo "
        <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
            <div class='card-header'>
                Login unsuccessfull!
            </div>
            <div class='card-body'>
                <h5 class='card-title'>
                    All inputs are neccessary!
                </h5>
                <p class='card-text'>
                    All inputs are necessary  to log into your  account
                </p>
                <button class='btn-danger'>
                    <a href='#' data-bs-target='#forgotpass' data-bs-toggle='modal'>
                    Try Again
                    </a>
                </button>
                <button class='btn-secondary'>
                    <a href='index.php'> Return Home </a>
                </button>
            </div>
        </div>";
        } else {

            if ($_SERVER['REQUEST_METHOD'] == "GET") //con establish
            {
                $localhost = "localhost";
                $usernamew = "root";
                $passw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passw, $db);
                if (!$conn) {
                    echo "";
                } else {
                    echo "";
                }
                $result = mysqli_query($conn, "select * from exptable where fname='$fname' and email='$email'")
                    or die("FAILED!!" . mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                if ($fname == 'admin' and $password == 'admin') {
                    header("Location: ./adminpanel.php");
                    echo "hello Admin";
                } else {
                    if ($row['fname'] == $fname and $row['email'] == $email) {
                        $sql = "update exptable SET password='$password' where fname='$fname'";
                        $result = mysqli_query($conn, $sql);

                        echo "
                    <div class='card text-white bg-success mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Account Password Updated!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title text-capitalize'>
                                Hello, " . $fname . "</h5>
                            <p class='card-text'>
                                Your Account Password has been updated! 
                            </p>
                            <button class='btn-secondary rounded-pill'>
                                <a href='index.php'> Return Home </a>
                            </button>
                        </div>
                    </div>";
                    } else {
                        echo "
                    <div class='card text-white bg-danger mb-3 text-center mx-auto' style='max-width: 18rem;'>
                        <div class='card-header'>
                            Login Failed!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>
                                Username or Email is incorrect!
                            </h5>
                            <p class='card-text'>
                                You need to enter valid username and email address 
                            </p>
                            <button class='btn-danger'>
                                <a href='#' data-bs-target='#forgotpass' data-bs-toggle='modal'>Forgot Password!</a>
                            </button>
                            <button class='btn-secondary'>
                                <a href='index.php'>Go back!</a>
                            </button>
                        </div>
                    </div>";
                    }
                }
            }
        }
    }
    ?>


    <!-- Forgot password modal  -->
    <div class="modal fade" id="forgotpass" tabindex="-1" aria-labelledby="forgotpass" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="text-center my-2">It will take just few seconds</h6>
                    <form method="GET" action="forgotpassword.php">
                        <div class="my-4">

                            <!----- username -------------->
                            <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />

                        </div>
                        <div class="my-4">

                            <!----- mail -------------->
                            <input class="form-control" id="loginpsw" placeholder="E-mail" type="text" autocomplete="off" name="email" />


                        </div>
                        <div class="my-4">

                            <!----- password -------------->
                            <input class="form-control" placeholder="New Password" id="loginpsw" type="text" autocomplete="off" name="pwd" />

                        </div>

                        <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-success container-fluid">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap5.0.2.bundle.min.js"></script>
</body>

</html>