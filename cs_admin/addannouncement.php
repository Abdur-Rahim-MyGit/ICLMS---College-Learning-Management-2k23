<?php 

include("partials/_dbconnect.php");

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $information = $_POST["information"];
    // $role = $_POST["role"];
    // $phone = $_POST["phone"];
	


	// if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO `announcement`(`title`, `date`, `description`, `information`) VALUES ('$title','$date','$description','$information')";

	if(mysqli_query($conn,$q)) {

		header("location: announcement.php?msg=announcement Added Successfully");
	}
	else {
		
		$failed = "Something went wrong??";
	}
// }

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
    <div class="title">Add New-Announcement</div>
    <div class="content">
      <div class="Rahim">
      <form action="addannouncement.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Enter your title" id="title" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="text" placeholder="Enter date" id="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="Enter description" id="description" name="description" required>
          </div>
          <div class="input-box">
            <span class="details">Information</span>
            <input type="text" placeholder="Enter information" id="information" name="information" required>
          </div>
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