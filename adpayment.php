<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin > Payments </title>

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/fonts.css">

    <style>
        td {
            width: 15%;
            text-align: center;
        }

        .badge {
            position: absolute;
            top: 5px;
            left: 20px;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }
    </style>
</head>

<body class="bg-light">

    <header>
        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-secondary">
            <div class="container">
                <a class="navbar-brand" href="home.php">Learning Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="btn-trial nav-item">
                            <a class="nav-link rounded-3" href="adminpanel.php">Admin Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/ Navigation bar-->

    </header>

    <div class="text-center my-3">
        <h1>Course Payment Details</h1>
    </div>
    <hr>

    <?php
    $i = 0;
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        $localhost = "localhost";
        $usernamew = "root";
        $passwordw = "";
        $db = "expdb";
        $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
        if (!$conn) {
            echo "Connection error";
        } else {
            echo "";

            $sql = "Select * from paymenttable order by time desc";
            $result = mysqli_query($conn, $sql);
            echo "
            <table class='w-100 fw-bold'>
                <tr>                
                    <td>Sl No.</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Transection ID No.</td>
                    <td>Course Name</td>
                    <td>Time of payment</td>
                </tr>
            </table>
            <hr>";

            echo "<table class='table table-hover table-dark'>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;

                    echo  "
                    <tr>
                        <td>" . $i . "</td>
                        <td>" . $row["fname"] . "</td>
                        <td>" . $row["password"] . "</td>
                        <td>" . $row["cred"] . "</td>
                        <td>" . $row["coursename"] . "</td>
                        <td>" . $row['time'] . "</td>
                    </tr>";
                }
                echo "</table>";
                echo "<span class='badge'> $i </span>";
            } else {
                echo "0 results";
            }
        }
    }
    ?>
</body>

</html>