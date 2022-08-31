<?php

session_start();

if(isset($_SESSION['success']) && $_SESSION['success'] == true){
    header('location: index.php');
}

// initializing variables
$errors = array();

include('db.php');

// LOGIN USER
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM `admin` WHERE `email` ='$username' AND `password` ='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          while($row = mysqli_fetch_assoc($results)){
            $name = $row['name'];
          }
          $_SESSION['name'] = $name;
          $_SESSION['success'] = true;
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 my-5">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Admin Login</h1>
                            <?php include('errors.php'); ?>
							<form method="POST" class="needs-validation" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" novalidate="">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										
									</div>
									<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-grid gap-2">
									<button type="submit" name="submit" class="btn btn-success">
										Login
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2022 &mdash; Amicritas 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>