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
    $title = $_POST["title"];
    // $image = $_POST["image"];
    $year = $_POST["year"];
    $department = $_POST["department"];
    $group = $_POST["group"];
    // $course = $_POST["course"];
    // $dob = $_POST["dob"];
    // $phone = $_POST["phone"];
	
	$file_destination = "pdf/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO `cia`(`title`, `pdf`, `year`,`department`,`group`) VALUES ('$title','$file_name','$year','$department','$group')";

	if(mysqli_query($conn,$q)) {

		header("location: cia.php?msg=pdf Added Successfully");
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
    <div class="title">Add New-Pdf</div>
    <div class="content">
      <div class="Rahim">
      <form action="addcia.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">title</span>
            <input type="text" placeholder="Enter your name" id="title" name="title" required>
          </div>
          <div class="input-box" >
            <span class="details">Pdf</span>
            <input type="file" name="file" class="makeme" placeholder="Choose Your Pdf" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" placeholder="Enter Qualification" id="year" name="year" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" placeholder="Enter Department" id="department" name="department" required>
          </div>
          <div class="input-box">
            <span class="details">Group</span>
            <input type="text" placeholder="Enter Group" id="group" name="group" required>
          </div>
        </div>
        </div>
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