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
    $name = $_POST["name"];
    // $image = $_POST["image"];

    $regno = $_POST["regno"];
    $course = $_POST["course"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
    $group = $_POST["group"];
    $year = $_POST["year"];
	
	// $file_destination = "photo/".$file_name;

    $sql = "UPDATE `student` SET `name`='$name',`regno`='$regno',`course`='$course',`dob`='$dob',`phone`='$phone',`department`='$department',`group`='$group',`year`='$year' WHERE `id`=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: student.php?msg=Record has been updated successfully");
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
    <div class="title">Update Student</div>
    <?php 
        $id = $_GET['id'];
        $sql = "SELECT * FROM `student` where `id`=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="content">
      <div class="Rahim">
      <form action="code.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <input type="hidden" name="stu_id" value="<?php echo $row['id'] ?>">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" value="<?php echo $row['name'] ?>" id="name" name="name" required>
          </div>
          <!-- <div class="input-box" >
            <span class="details">Image</span>
            <td><input type="file" name="file" class="makeme" value="" <img src="" alt=""> required></td>
          </div> -->
          <div class="input-box">
            <span class="details">Reg.no</span>
            <input type="text" value="<?php echo $row['regno'] ?>" id="regno" name="regno" required>
          </div>
          <div class="input-box">
            <span class="details">Course</span>
            <input type="text" value="<?php echo $row['course'] ?>" id="course" name="course" required>
          </div>
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="text" value="<?php echo $row['dob'] ?>" id="dob" name="dob" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" value="<?php echo $row['phone'] ?>" id="phone" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" value="<?php echo $row['department'] ?>" id="department" name="department" required>
          </div>
          <div class="input-box">
            <span class="details">Group</span>
            <input type="text" value="<?php echo $row['group'] ?>" id="group" name="group" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" value="<?php echo $row['year'] ?>" id="year" name="year" required>
          </div>
          <div class="input-box" >
            <span class="details">Image</span>
            <input type="file" name="file" class="makeme" placeholder="Choose Your Image">
            <input type="hidden" name="stu_old" value="<?php echo $row['image'];?>">
          </div>
          <img src="<?php echo "photo/".$row['image'];?>" width="100px" alt="">
        </div>
        <div class="button">
          <input type="submit" name="stu_upload" value="Update" >
        </div>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>