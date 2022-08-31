<?php

// initializing variables
$errors = array();

$success = "";

include('db.php');

if (isset($_POST['addsur'])) {
	$surtitle = mysqli_real_escape_string($conn, $_POST['surtitle']);
	$surdescription = mysqli_real_escape_string($conn, $_POST['surdescription']);

	$file_name = $_FILES['surveyimage']['name'];
	$file_size =$_FILES['surveyimage']['size'];
	$file_tmp =$_FILES['surveyimage']['tmp_name'];
	$file_type=$_FILES['surveyimage']['type'];
	$tmp = explode('.', $file_name);
	$file_ext=strtolower(end($tmp));

	$extensions= array("jpeg","jpg","png","gif");

	if(in_array($file_ext,$extensions)=== false){
		array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
	 }

	if (empty($surtitle)) {
        array_push($errors, "Please provide a Survey title");
     }

	 if (empty($surdescription)) {
        array_push($errors, "Please provide a Survey Description");
     }

	 if($file_size > 10097152){
		array_push($errors, "File size must be less than 10 MB");
	 }

	 if(empty($errors)==true){

		$sql = "INSERT INTO `survey`(`title`, `description`, `image`) VALUES ('$surtitle','$surdescription','$file_name')";

		if ($conn->query($sql) === TRUE) {
			move_uploaded_file($file_tmp,"images/".$file_name);
			$success = "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	 }else{
		$conn->close();
	 }
}

?>


<?php include('header.php');?>
          <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
              <h4 class="mb-3 mb-md-0">Welcome <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];}?>!</h4>
            </div>
            
          </div>

          <div class="row">
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title">Add Survey</h6>
								<h6 class="card-title text-success"><?php echo $success ;?></h6>
								<?php include('errors.php'); ?>

								<form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
										<label for="surveytitle" class="form-label">Survey Title</label>
										<input type="text" class="form-control" id="surveytitle" name="surtitle" autocomplete="off" placeholder="Title">
									</div>
									<div class="mb-3">
										<label for="surveydescription" class="form-label">Survey Description</label>
										<textarea rows="4" cols="50" class="form-control" id="surveydescription" name="surdescription" autocomplete="off" placeholder="Description"></textarea>
									</div>
									<div class="mb-3">
										<label for="surveyimage" class="form-label">Survey Image</label>
										<input type="file" class="form-control" id="surveyimage" name="surveyimage">
									</div>
									<button type="submit" name="addsur" class="btn btn-primary me-2">Add</button>
								</form>

              </div>
            </div>
					</div>
          
<?php include('footer.php');?>