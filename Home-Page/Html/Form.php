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
}

?>

<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration Form </title>
    <link rel="stylesheet" href="Form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="isclogo">
    <img src="lo.png" class="log">
</div>
  <div class="container">
    <div class="title">Islamiah College</div>
    <div class="content">
      <div class="Rahim">
        <form action="/Rahim/Form.php" method = "POST">
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
              <!-- <select name="details" id="">Department
              <option value="">English</option>
              <option value="">Urdu</option>
              <option value="">Arabic</option>
              <option value="">cs</option>
              <option value="">bio</option>
              <option value="">b.com</option>
            </select> -->
            </div>
            
          </div>
          <!-- <div class="gender-details">
            <input type="radio" name="usertype" id="dot-1">
            <input type="radio" name="usertype" id="dot-2">
            <input type="radio" name="usertype" id="dot-3">
            <span class="gender-title">Sign-Up As </span>
            <div class="category">
              <label for="usertype">
              <span class="dot one"></span>
              <span class="gender">Student Log-in</span>
            </label>
            <label for="usertype">
              <span class="dot two"></span>
              <span class="gender">Administrator Log-in</span>
            </label>
            <label for="usertype">
              <span class="dot three"></span>
              <span class="gender">Out-sider</span>
              </label>
            </div>
          </div> -->
          <div class="button">
            <input type="submit" value="Register" >
          </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>
