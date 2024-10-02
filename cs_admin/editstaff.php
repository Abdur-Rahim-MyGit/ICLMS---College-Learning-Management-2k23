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
    <div class="title">Update Staff</div>
    <?php 
        require "partials/_dbconnect.php";
        // echo '$_GET[`id`]';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `staff` where `id`=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="content">
      <div class="Rahim">
      <form action="code.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <input type="hidden" name="staff_id" value="<?php echo $row['id'] ?>">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" value="<?php echo $row['name'] ?>" id="name" name="name" required>
          </div>
          <!-- <div class="input-box" >
            <span class="details">Image</span>
            <td><input type="file" name="file" class="makeme" value="" <img src="" alt=""> required></td>
          </div> -->
          <div class="input-box">
            <span class="details">Qualification</span>
            <input type="text" value="<?php echo $row['qualification'] ?>" id="qualification" name="qualification" required>
          </div>
          <div class="input-box">
            <span class="details">Experiance</span>
            <input type="text" value="<?php echo $row['experiance'] ?>" id="experiance" name="experiance" required>
          </div>
          <div class="input-box">
            <span class="details">Role</span>
            <input type="text" value="<?php echo $row['role'] ?>" id="role" name="role" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" value="<?php echo $row['phone'] ?>" id="phone" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" value="<?php echo $row['department'] ?>" id="department" name="department" required>
          </div>
          <div class="input-box" >
            <span class="details">Image</span>
            <input type="file" name="file" class="makeme" placeholder="Choose Your Image">
            <input type="hidden" name="staff_old" value="<?php echo $row['image'];?>">
          </div>
          <img src="<?php echo "photo/".$row['image'];?>" width="100px" alt="">
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