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
</head>

<body>

    <?php include('include/userheader.inc.php'); ?>

    <div class="mt-3 text-center">
        <h1> My Reviews </h1>
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
            $result = mysqli_query($conn, "select * from reviewtable where username='$fname'")
                or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            echo "<table class='w-100 fw-bold'>";
            echo "<tr >";
            echo "
                <td> Sl No. </td>
                <td> Comment </td>
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
                    <td>" . $row['comment'] . "</td>
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
                            Yet to give any review
                        </td>
                    </tr>
                </table>";
            }
        }
    }
    ?>