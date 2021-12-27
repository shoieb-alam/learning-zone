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

</head>

<body class="bg-light text-center">

    <?php include('../include/adminheader.inc.php'); ?>

    <div class="py-5">
        <h1>Add a Course</h1>

        <!-- COUSE ADDING FORM-->
        <form action="addingcoursepopup.php" class="container pt-4" method="POST" enctype="multipart/form-data">

            <div class="form-floating mb-3 form-group w-50 mx-auto">
                <input type="name" class="form-control" id="floatingInput" placeholder="Course name" name="coursename">
                <label for="floatingInput">Course Name</label>
            </div>
            <div class="row">

                <div class="col-md-6">

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description">
                        <label for="floatingInput">Description</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial Title 1" name="title1">
                        <label for="floatingInput">Add Tutorial Title 1</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial Title 2" name="title2">
                        <label for="floatingInput">Add Tutorial Title 2</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial Title 3" name="title3">
                        <label for="floatingInput">Add Tutorial Title 3</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial Title 4" name="title4">
                        <label for="floatingInput">Add Tutorial Title 4</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial Title 5" name="title5">
                        <label for="floatingInput">Add Tutorial Title 5</label>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="form-floating mb-3 form-group">
                        <input type="file" class="form-control" id="floatingInput" placeholder="Image" name="image">
                        <label for="floatingInput">Image</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial title 1" name="url1">
                        <label for="floatingInput">Add Tutorial URL 1</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial URL 2" name="url2">
                        <label for="floatingInput">Add Tutorial URL 2</label>
                    </div>
                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial URL 3" name="url3">
                        <label for="floatingInput">Add Tutorial URL 3</label>
                    </div>
                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial URL 4" name="url4">
                        <label for="floatingInput">Add Tutorial URL 4</label>
                    </div>
                    <div class="form-floating mb-3 form-group">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add Tutorial URL 5" name="url5">
                        <label for="floatingInput">Add Tutorial URL 5</label>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-success rounded-pill text-white my-3 w-50 fw-bold btn-lg">Add This Course</button>
        </form>

        <!--/ COURSE ADDING FORM-->
    </div>
</body>

</html>