<?php
$id=$_GET['id'];
require "partials/_dbconnect.php";
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $username = $_POST["name"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $department = $_POST["dept"];
    $phone = $_POST["phone"];
    $regno = $_POST["regno"];

    $sql = "UPDATE `users` SET `username`='$username',`regno`='$regno',`password`='$password',`phone`='$phone',`email`='$email',`department`='$department',`role`='$role' WHERE `s.no`=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: admin.php?msg=Record has been updated successfully");
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
    <title>PHP CRUD APPLICATION</title>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
        PHP Complete CRUD Application
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>
        <?php 
        // $id = $_GET['id'];
        $sql = "SELECT * FROM `users` where `s.no`=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
        <div class="container d-flex justify-content-center">
        <form action="" method = "POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">User-name</span>
              <input type="text" value="<?php echo $row['username'] ?>" id="name" name="name" required>
            </div>
            <div class="input-box">
              <span class="details">Register Number</span>
              <input type="text" value="<?php echo $row['regno'] ?>" id="regno" name="regno" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="email" value="<?php echo $row['email'] ?>" id="email" name="email" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" value="<?php echo $row['phone'] ?>" id="phone" name="phone" required>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" value="<?php echo $row['password'] ?>" id="password" name="password" required>
            </div>
            <div class="input-box">
              <span class="details">Role</span>
              <input type="text" value="<?php echo $row['role'] ?>" id="role" name="role" required>
            </div>
            <div class="input-box">
              <span class="details">Department</span>
              <input type="text" value="<?php echo $row['department'] ?>" id="dept" name="dept" required>
            </div>
            
          </div>
          <div class="button">
            <input type="submit"name="submit" value="Register" >
          </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>