<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Messages </title>
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

<body class="">

    <header>
        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="home.php">Learning Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="btn-trial nav-item">
                            <a class="nav-link rounded-3" href="myaccount.php">My Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/ Navigation bar-->
    </header>

    <div class="mt-3 text-center">
        <h1> My Massages </h1>
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

            $fname = $_SESSION["username"];
            $result = mysqli_query($conn, "select * from contacttable where fullname='$fname'")
                or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            echo "<table class='w-100 fw-bold'>";
            echo "<tr >";
            echo "
                <td> Sl No. </td>
                <td> Subject </td>
                <td> Message </td>
                <td> Time of Review </td>";
            echo "</tr>";
            echo "</table><hr>";
            echo "<table class='table table-hover table-dark'>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    echo "<tr>";
                    echo  "
                        <td>" . $i . "</td> 
                        <td>" . $row['subject'] . "</td>
                        <td>" . $row['message'] . "</td>
                        <td>" . $row['time'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<span class='badge'>$i</span>";
            } else {

                echo "
                <table class='table table-hover table-dark'>
                    <tr>
                        <td class='text-center'>
                            Yet to send a Message
                        </td>
                    </tr>
                </table>";
            }
        }
    }
    ?>

</body>

</html>