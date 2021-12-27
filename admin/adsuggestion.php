<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin > Suggestions (Registered) </title>

    <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>

<body class="bg-light">

    <?php include('../include/adminheader.inc.php'); ?>

    <main>
        <div class="mt-3 text-center">
            <h1>Authenticated User Send Suggestion</h1>
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

                $sql = "Select * from reviewtable order by time desc";
                $result = mysqli_query($conn, $sql);
                echo "<table class='w-100 fw-bold'>";
                echo "<tr >";
                echo "
                    <td> Sr </td>
                    <td>Username</td>
                    <td>Comment</td>
                    <td>Time of Review</td>";
                echo "</tr>";
                echo "</table><hr>";
                echo "<table class='table table-hover table-dark'>";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        echo "<tr >";

                        echo  "
                            <td >" . $i . "</td>
                            <td>" . $row["username"] . "</td>
                            <td>" . $row["comment"] . "</td>
                            <td>" . $row["time"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<span class='badge'>$i</span>";
                } else {

                    echo "0 results";
                }
            }
        }
        ?>
    </main>
</body>

</html>