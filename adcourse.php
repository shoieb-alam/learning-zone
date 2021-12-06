<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses</title>

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body class="bg-light text-center">

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

    <div class="py-5">
        <h1>Add a Course</h1>

        <!-- COUSE ADDING FORM-->
        <form action="addingcourse.php" class="container pt-4" method="POST">

            <div class="form-floating mb-3 form-group w-50 mx-auto">
                <input type="name" class="form-control" id="floatingInput" placeholder="Course name" name="coursename">
                <label for="floatingInput">Course Name</label>
            </div>
            <div class="row">

                <div class="col-md-6">

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