<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Courses </title>

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>

<body class="">

    <?php include('include/userheader.inc.php'); ?>

    <div class="text-center my-3">
        <h1> My Courses </h1>
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
            $result = mysqli_query($conn, "SELECT * FROM paymenttable, coursetable WHERE fname='$fname' && paymenttable.coursename = coursetable.coursename")
                or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            echo "<table class='w-100 fw-bold'>";
            echo "<tr>";
            echo "
                <td>Sl No. </td>
                <td>Course-Name</td>
                <td>Time of Purchase</td>
                <td>Options</td>";
            echo "</tr>";
            echo "</table><hr>";
            echo "<table class='table table-hover table-dark'>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    echo "<tr>";
                    echo  "
                        <td>" . $i . "</td> 
                <td class='text-capitalize'>" . $row['coursename'] . "</td>
                        <td>" . $row['paymenttime'] . "</td>
                        <td> 
                        <button class='btn btn-outline-success'>
                            <a class='text-decoration-none text-white fw-bold'
                            href='coursesdetails.php?id={$row['id']}' target='_blank'>
                                View Lectures
                            </a>
                            </button>
                        </td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<span class='badge'>$i</span>";
            } else {

                echo "
                    <table class='table table-hover table-dark'>
                    <tr>
                    <td style='text-align:center;'>
                        Yet to Buy a Course
                    </td>
                    </tr>
                    </table>";
            }
        }
    }
    ?>
</body>

</html>