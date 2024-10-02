<?php
$id=$_GET['id'];
require "partials/_dbconnect.php";
if(isset($_POST['upload'])){
    // $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	// $file_name = $_FILES['file']['name'];
	// $file_type = $_FILES['file']['type'];	
	// $temp_name = $_FILES['file']['tmp_name'];
	// $file_size = $_FILES['file']['size'];
    $title = $_POST["title"];
    // $image = $_POST["image"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $information = $_POST["information"];
    // $phone = $_POST["phone"];
	
	// $file_destination = "photo/".$file_name;

    $sql = "UPDATE `announcement` SET `title`='$title',`date`='$date',`description`='$description',`information`='$information' WHERE `id`=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: announcement.php?msg=Record has been updated successfully");
    }
    else {
        echo "Failed:" .mysqli_error($conn);
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
    <div class="title">Update Announcement</div>
    <?php 
        // $id = $_GET['id'];
        $sql = "SELECT * FROM `announcement` where `id`=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="content">
      <div class="Rahim">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" value="<?php echo $row['title'] ?>" id="title" name="title" required>
          </div>
          <!-- <div class="input-box" >
            <span class="details">Image</span>
            <td><input type="file" name="file" class="makeme" value="" <img src="" alt=""> required></td>
          </div> -->
          <div class="input-box">
            <span class="details">Date</span>
            <input type="text" value="<?php echo $row['date'] ?>" id="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" value="<?php echo $row['description'] ?>" id="description" name="description" required>
          </div>
          <div class="input-box">
            <span class="details">Information</span>
            <input type="text" value="<?php echo $row['information'] ?>" id="information" name="information" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="upload" value="Update" >
        </div>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>