<?php 

include("partials/_dbconnect.php");

if (isset($_POST['upload'])) {
    // $id = $_POST["id"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $type = $_POST["type"];
    // $phone = $_POST["phone"];
	
	// $file_destination = "photo/".$file_name;

	// if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO `calender`(`name`, `date`, `description`, `type`) VALUES ('$name','$date','$description','$type')";

	if(mysqli_query($conn,$q)) {

		header("location: calender.php?msg=Event Added Successfully");
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
// else {

// 	$msz = "Please select a image to upload..!";
// }
// }
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
    <div class="title">Add New-Event</div>
    <div class="content">
      <div class="Rahim">
      <form action="addevent.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter Name" id="name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="text" placeholder="Month/Date/Year eg:January/01/2023" id="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="Enter Description" id="description" name="description" required>
          </div>
          <div class="input-box">
            <span class="details">Type</span>
            <input type="text" placeholder="Enter Type" id="type" name="type" required>
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