<?php
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
$selectdb = mysqli_select_db($conn, $db);
