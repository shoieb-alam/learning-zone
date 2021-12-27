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

    <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>

<body class="bg-light">

    <?php include('../include/adminheader.inc.php'); ?>

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

            $sql = "Select * from paymenttable order by paymenttime desc";
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
                        <td>" . $row['paymenttime'] . "</td>
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