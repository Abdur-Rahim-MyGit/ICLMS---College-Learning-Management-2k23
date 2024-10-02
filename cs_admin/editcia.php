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
    <div class="title">Update Cia</div>
    <?php 
        require "partials/_dbconnect.php";
        // echo '$_GET[`id`]';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `cia` where `id`=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="content">
      <div class="Rahim">
      <form action="code.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <input type="hidden" name="cia_id" value="<?php echo $row['id'] ?>">
          <div class="input-box">
            <span class="details">title</span>
            <input type="text" value="<?php echo $row['title'] ?>" id="title" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" value="<?php echo $row['year'] ?>" id="year" name="year" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" value="<?php echo $row['department'] ?>" id="department" name="department" required>
          </div>
          <div class="input-box">
            <span class="details">Group</span>
            <input type="text" value="<?php echo $row['group'] ?>" id="group" name="group" required>
          </div>
          <div class="input-box" >
            <span class="details">Pdf</span>
            <input type="file" name="file" class="makeme" placeholder="Choose Your Image">
            <input type="hidden" name="cia_old" value="<?php echo $row['pdf'];?>">
          </div>
          <!-- <img src="<?php echo "photo/".$row['image'];?>" width="100px" alt=""> -->
          <iframe src="<?php echo "Pdf/".$row['pdf'];?>" width="100px" frameborder="0"></iframe>
        </div>
        <div class="button">
          <input type="submit" name="cia_upload" value="Update" >
        </div>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>