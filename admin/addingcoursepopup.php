<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses</title>

    <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/popup.css">
</head>

<body class="bg-light text-center">

    <?php include('../include/adminheader.inc.php'); ?>
    
    <?php
    if (isset($_POST['coursename'])) {
        $coursename = $_POST["coursename"];
        $description = $_POST["description"];
        $title1 = $_POST["title1"];
        $url1 = $_POST["url1"];
        $title2 = $_POST["title2"];
        $url2 = $_POST["url2"];
        $title3 = $_POST["title3"];
        $url3 = $_POST["url3"];
        $title4 = $_POST["title4"];
        $url4 = $_POST["url4"];
        $title5 = $_POST["title5"];
        $url5 = $_POST["url5"];

        $image = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];

        if ($coursename == "" || $description == "" || $image == "" || $title1 == "" || $url1 == "" || $title2 == "" || $url2 == "" || $title3 == "" || $url3 == "" || $title4 == "" || $url4 == "" || $title5 == "" || $url5 == "") {
            echo "
            <div class='modal fade' id='courseAdding' tabindex='-1' aria-labelledby='courseAddingLabel' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='courseAddingLabel'></h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                  </div>
                  <div class='modal-body'>
                    <p> At least one field is empty </p>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Go back</button>
                  </div>
                </div>
              </div>
            </div>

            <div class='card text-white text-center mx-auto bg-danger mb-3 rounded-3' style='max-width: 18rem;'>
            <div class='card-header'>
            Course Can't be Added!
            </div>
            <div class='card-body'>
                <h5 class='card-title'>
                    At least one field is empty!
                </h5>
                <p class='card-text'>
                    All inputs are requires to add a course! 
                </p>
                <button class='btn btn-outline-secondary rounded-pill'>
                    <a href='http://localhost/Learning-Zone/admin/adcourse.php'>
                        Go Back!
                    </a>
                </button>
            </div>
        </div>
            ";
        } else {

            if ($_SERVER['REQUEST_METHOD'] == "POST") //con establish
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
                move_uploaded_file($tmpname, '../img/courses/' . $image);
                $sql = "INSERT INTO coursetable(coursename, description, image, title1, url1, title2, url2, title3,url3, title4, url4, title5, url5) VALUES('$coursename', '$description', '$image', '$title1','$url1','$title2','$url2','$title3','$url3','$title4','$url4','$title5','$url5')";
                $result = mysqli_query($conn, $sql);

                echo "
              <div class='card text-white text-center mx-auto bg-success mb-3 rounded-3' style='max-width: 18rem;'>
                <div class='card-header'>
                Course Added
                </div>
                <div class='card-body'>
                    <h5 class='card-title mb-5'>
                        Successfully added " . $coursename . " Course
                    </h5>
                  
                    <button class='btn btn-outline-dark rounded-pill'>
                    <a href='http://localhost/Learning-Zone/courses.php'>
                        View Course
                    </a>
                    </button>
                </div>
            </div>
              ";
            } else {
                echo "error";
            }
        }
    }
    ?>
</body>

</html>