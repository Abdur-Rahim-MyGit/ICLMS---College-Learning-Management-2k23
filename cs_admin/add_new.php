<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $username = $_POST["name"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $department = $_POST["dept"];
    $phone = $_POST["phone"];
    $regno = $_POST["regno"];
    // $exists = false;

    $exitSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $exitSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
      // $exists = true;
      $showError = "email Already Exists!!!";
    }
    else{
      $exists = false;
      if(($password) && $exists == false){
          $sql = "INSERT INTO `users` (`username`, `email`, `password`, `department`, `phone`, `role`, `regno`) VALUES ('$username', '$email', '$password', '$department', '$phone', '$role', '$regno')";
          $result = mysqli_query($conn, $sql);
          if($result){
              $showAlert = true;
          }
      }
      else{
          $showError = "password do not Match!!!";
      }
    }
    if($result){
      header("location: admin.php?msg=New record created successfully");
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

        <div class="container d-flex justify-content-center">
        <form action="" method = "POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">User-name</span>
              <input type="text" placeholder="Enter your name" id="name" name="name" required>
            </div>
            <div class="input-box">
              <span class="details">Register Number</span>
              <input type="text" placeholder="Enter your Reg-Num" id="regno" name="regno" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="email" placeholder="Enter your email" id="email" name="email" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your number" id="phone" name="phone" required>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password" id="password" name="password" required>
            </div>
            <div class="input-box">
              <span class="details">Role</span>
              <input type="text" placeholder="Enter your Role" id="role" name="role" required>
            </div>
            <div class="input-box">
              <span class="details">Department</span>
              <input type="text" placeholder="Select Your Department" id="dept" name="dept" required>
            </div>
            
          </div>
          <div class="button">
            <input type="submit" value="Register" >
          </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>