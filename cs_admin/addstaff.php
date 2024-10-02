<?php 

include("partials/_dbconnect.php");

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
    $name = $_POST["name"];
    $image = $_POST["image"];
    $qualification = $_POST["qualification"];
    $experiance = $_POST["experiance"];
    $role = $_POST["role"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
	
	$file_destination = "photo/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO `staff`(`name`, `image`, `qualification`, `experiance`, `role`, `phone`, `department`) VALUES ('$name','$file_name','$qualification','$experiance','$role','$phone','$department')";

	if(mysqli_query($conn,$q)) {

		header("location: staff.php?msg=Staff Added Successfully");
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a image to upload..!";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Saqib-User/Add-User.css">
    <title>PHP CRUD APPLICATION</title>
  </head>
  <body>
  <div class="container">
    <div class="title">Add New-User</div>
    <div class="content">
      <div class="Rahim">
      <form action="addstaff.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" id="name" name="name" required>
          </div>
          <div class="input-box" >
            <span class="details">Image</span>
            <input type="file" name="file" class="makeme" placeholder="Choose Your Image" required>
          </div>
          <div class="input-box">
            <span class="details">Qualification</span>
            <input type="text" placeholder="Enter Qualification" id="qualification" name="qualification" required>
          </div>
          <div class="input-box">
            <span class="details">Experiance</span>
            <input type="text" placeholder="Enter Experiance" id="experiance" name="experiance" required>
          </div>
          <div class="input-box">
            <span class="details">Role</span>
            <input type="text" placeholder="Enter Role" id="role" name="role" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" placeholder="Enter Phone Number" id="phone" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" placeholder="Enter Department" id="department" name="department" required>
          </div>
        </div>
        <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Sign-Up As </span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Student Log-in</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Administrator Log-in</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Out-sider</span>
            </label>
          </div>
        </div> -->
        <div class="button">
          <input type="submit" name="upload" value="Register" >
        </div>
      </form>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>