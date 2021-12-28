<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Learning Zone > Courses </title>

	<link rel="stylesheet" href="css/bootstrap5.0.2.min.css">
	<link rel="stylesheet" href="css/popup.css">
</head>

<body>
	<?php
	if (isset($_POST['fname'])) {
		$fname = $_POST["fname"];
		$password = $_POST["pass"];
		$cred = $_POST["cred"];
		$coursename = $_POST["coursename"];

		if ($fname == "" || $password == "" || $cred == "") {
			echo "        
		<div class='card text-white text-center mx-auto bg-danger mb-3 rounded-3' style='max-width: 18rem;'>
			<div class='card-header'>
				Transaction Failed!
			</div>
			<div class='card-body'>
				<h5 class='card-title'>
					Some input fields are empty!
				</h5>
				<p class='card-text'>All inputs are requires to Buy the course! 
				</p>
				<button class='btn-secondary rounded-pill'>
					<a href='courses.php'>Go Back!</a>
				</button>
			</div>
		</div>";
		} else if (strlen($cred) != 10) {

			echo "
			<div class='card text-white text-center mx-auto bg-danger mb-3' style='max-width: 18rem;'>
				<div class='card-header'>
					Transaction Failed!
				</div>
				<div class='card-body'>
					<h5 class='card-title'>
						Transaction ID is invalid!
					</h5>
					<p class='card-text'>
						All inputs must be valid to Buy the course! 
					</p>
					<button class='btn-secondary'>
						<a href='courses.php'>Go Back!</a>
					</button>
				</div>
			</div>";
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
				$result = mysqli_query($conn, "SELECT * FROM exptable WHERE fname='$fname' and password='$password'")
					or die("FAILED!!" . mysqli_error($conn));
				$row = mysqli_fetch_array($result);
				if ($row['fname'] == $fname and $row['password'] != $password) {
					echo "
					<div class='card text-white text-center mx-auto bg-danger mb-3' style='max-width: 18rem;'>
						<div class='card-header'>
							Wrong credentials!
						</div>
						<div class='card-body'>
							<h5 class='card-title'> 
								Password is incorrect!!
							</h5>
							<p class='card-text'>
								Looks like you have forgot your  password 
							</p>
							<button class='btn-danger'>
								<a href='#' data-bs-target='#forgotpass' data-bs-toggle='modal'>Forgot Password!</a>
							</button>
							<button class='btn-secondary'>
								<a href='courses.php'>Go Back!</a>
							</button>
						</div>
					</div>";
				} else if ($row['fname'] == $fname and $row['password'] == $password) //for success
				{
					$_SESSION["username"] = $fname;
					$paymenttime = date("m/d/y G.i:s<br>", time());
					$sql = "INSERT INTO paymenttable(fname, `password`, `cred`, `coursename`, `paymenttime`) VALUES('$fname', '$password', '$cred', '$coursename', '$paymenttime')";
					$result = mysqli_query($conn, $sql);

					echo "
					<div class='card text-white text-center mx-auto bg-success mb-3' style='max-width: 18rem;'>
						<div class='card-header'>
							Transaction Successfull!
						</div>
						<div class='card-body'>
							<h5 class='card-title'>
								Congrats," . $_SESSION["username"] . "
							</h5>
							<p class='card-text'>
								We have added <b class='text-capitalize'>" . $coursename . "</b> Course <br>to your account 
							</p>
							<button class='btn-success'>
								<a href='useraccount.php'>My Account</a>
							</button>
						</div>
					</div>";
				} else if ($row['fname'] != $fname) {

					echo "
					<div class='card text-white text-center mx-auto bg-danger mb-3' style='max-width: 18rem;'>
						<div class='card-header'>
							Transaction failed!
						</div>
						<div class='card-body'>
							<h5 class='card-title'>
								Username/Password is incorrect!
							</h5>
							<p class='card-text'>
							Only account holders can buy the courses! 
							</p>
							<button class='btn-success'>
								<a href='index.php'>Create Account</a>
							</button>
							<button class='btn-secondary'>
								<a href='courses.php'>Go Back!</a>
							</button>
						</div>
					</div>";
				}
			}
		}
	}
	?>

	<!-- Forgot password modal  -->
	<div class="modal fade" id="forgotpass" tabindex="-1" aria-labelledby="forgotpass" aria-hidden="true">
		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-header text-white">
					<h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h6 class="text-center my-2">It will take just few seconds</h6>
					<form method="GET" action="forgotpasswordpopup.php">
						<div class="my-4">

							<!----- username -------------->
							<input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />

						</div>
						<div class="my-4">

							<!----- mail -------------->
							<input class="form-control" id="loginpsw" placeholder="E-mail" type="text" autocomplete="off" name="email" />


						</div>
						<div class="my-4">

							<!----- password -------------->
							<input class="form-control" placeholder="New Password" id="loginpsw" type="text" autocomplete="off" name="pwd" />

						</div>

						<div class="modal-footer d-block">
							<button type="submit" class="btn btn-success container-fluid">Reset Password</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap5.0.2.bundle.min.js"></script>
</body>

</html>