<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $sql = "select * from users where email = '$email' AND password = '$password' AND role = '$role'";
    $result = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($result);

    while($row = mysqli_fetch_array($result)){
        if($row['email']==$email && $row['password']==$password && $row['role']=='other_department'){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: ../../other_dept/other_department.php");
        }
        if($row['email']==$email && $row['password']==$password && $row['role']=='computer science'){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          header("location: ../../cs_dept/home.php");
        }
        if($row['email']==$email && $row['password']==$password && $row['role']=='arabic'){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: ../../ar_dept/arabic_department.php");
          }
          if($row['email']==$email && $row['password']==$password && $row['role']=='english'){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: ../../eng_dept/english_department.php");
          }
          if($row['email']=='31120u18037@gmail.com' && $row['password']=='admin' && $row['role']=='computer science'){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: ../../cs_admin/admin.php");
          }
        else{
          $showError = "Invalid Credentials";
        }
      
    }

    
    // if($row['email']==$email && $row['password']==$password && $row['role']=='computer science'){
      //   header("location: cs_department.php");
      // }elseif($row['email']==$email && $row['password']==$password && $row['role']=='other_department'){
      //   header("location:other_department");
      // }else{
      //       $showError = "Invalid Credentials";
      //   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>College Web-Site Souban</title>
    <!-- Style Sheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" hr ef="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    </div>
    <div class="isclogo">
        <img src="logo1.png" class="log">
    </div>
    <header>.
<!-- Navigation Bar Souban-->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">  Islamiah College</h2>
            </div>
            <div class="menu">
                <ul>
                    <li class="active"><a href="Index.html">Home</a>  </li>
                    <li class="active1"><a href="About.html">About</a></li>
                    <li class="active2"><a href="Department.html">Department</a>
                    <li class="active3"><a href="service.html">Services</a></li>
                    <li class="active4"><a href="contat.html">Contact</a></li>
                    <li class="active5"><a href="Developer.html">Developers</a></li>
                </ul>
            </div>
<!-- Search Box Souban -->
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To Search">
                <a href="team.png"> <button class="btn">Search</button></a>
            </div>
        </div> 
<!-- Content Souban -->
        <div class="content">
            <h1>Welcome To Islamiah <br><span>College</span> <br>(Autonomous)</h1>
            <p class="par"><br> 
            Islamiah College (Autonomous) - Vaniyambadi,100 years of education excellence. <br>
            was established in year 1919 and it's located in Vaniyambadi, Tamil Nadu.<br>
            The College Offers Courses at the under Graduate,post Graduate and Doctorate Levels. <br>
            </p> 
            <nav id="sideNav">
                <ul>
                    <li class="sidebars"><a href="Index.html">Home</a></li>
                    <li class="sidebars"><a href="About.html">About</a></li>
                    <li class="sidebars"><a href="Announcement.html">Announcement</a></li>
                    <li  class="sidebars"><a href="Department.html">Courses</a></li>
                    <li class="sidebars"><a href="Department.html">Department</a></li>
                    <li class="sidebars"><a href="Calender.html">College Calender</a></li>
                    <li class="sidebars"><a href="Syllabus.html">Autonomous Syllabus</a></li>
                    <li class="sidebars"><a href="About.html">Infrastucture</a></li>
                    <li class="sidebars"><a href="contat.html">Contact</a></li>
                </ul>
            </nav><img src="menu2.jpg" id="menubtns">
<!-- Java Script  -->
            <script>
                var menubtns=document.getElementById("menubtns");
                var sideNav=document.getElementById("sideNav");
                sideNav.style.right="-250px";
                menubtns.onclick=function(){
                    if(sideNav.style.right == "-250px"){
                        sideNav.style.right = "0";
                    }
                    else{
                        sideNav.style.right = "-250px"
                    }
                }
            </script>
        
<!-- Join Button -->
                <button class="cn"><a href="Form.html">  Join Us  </a></button>
<!-- Log-in Form Souban -->
                <div class="form">
                    <form action="/ICLMS/Home-Page/Html/index.php" method="POST">
                    <h2>Log-in Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="password" placeholder="Enter Password Here" required>
                    <input type="text" name="role" placeholder="Select Your Department" required>
                    <button class="btnn"><a href="#">Login</a></button>
                    <p class="link">Don't have an account<br>
                    <a href="Form.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>
                    <div class="icons">
                    </form>
<!-- Icons -->
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
                </div>
                </div>
        
<!-- About -->
        <br><br><br><br><br>
        <div class="about">
            <div class="abt">
                <img src="img2.png" alt="">
            </div>
        <div class="contentt">
            <h1>About <br><span>Us</span> <br></h1>
            <p class="par"><br> 
            Islamiah College (Autonomous) - Vaniyambadi,100 years of education excellence. <br>
            was established in year 1919 and it's located in Vaniyambadi, Tamil Nadu.<br>
            The College Offers Courses at the under Graduate,post Graduate and Doctorate Levels. <br>
            </p> <button class="cn"><a href="About.html"> Learn More</a></button>
<!-- Scholarship / Lectres / Videos-->
        <br><br><br><br><br><br><br><br>
        <div class="containers">
            
            <div class="box">
            <img class="scholarimg" src="scholars.png" alt="">
                <br><br><br><br><br><br><br><br>
                    <h1 class="no">Scholarship Facility</h1>
                    <br><br>

                    <p>Goverment provides best Facility <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">  Know More  </a>    </p>
                </div>
            
            <div class="box">
            <img class="lectimg" src="lect.png" alt="">
                <br><br><br><br><br><br><br><br><br>
                <h1 class="no">Skilled Lectures</h1>
                <br><br><br>
                    <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">Know More</a>    </p>
            </div>
            
            <div class="box">
            <img class="bookimg" src="log/224595.png" alt="">
                <br><br><br><br><br><br><br><br>
                <h1 class="no">Books Library Stores</h1>
                <br><br> 
                    <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">Know More</a>    </p>
            </div>
        </div><br><br>     <br><br><br><br><br><br><br><br>
                    <hr class="hr1">
<!-- Principle Info -->
        <img class="memimg" src="images/contact-img.png" alt="">
        <div class="memb">
        <h1 class="memb">Distinguished <br><span>(Members)</span> </h1>
        <br></div><br><br>
        <div class="membs">
        <p class="par1">Islamiah College (Autonomous) - is a symbol of devotion to education and love
            for learning of the <br> Muslims of Vaniyambadi, who in their zeal for
            translating into action the message of Sir Syed <br> Ahmed Khan,
            established the Vaniyambadi Muslim Educational Society in
            1901. <br></p><br><button class="cn"><a href="About.html"> Learn More</a></button>
            <!-- The Society was registered in 1905  and soon under its 
            auspices the Islamiah Elementary School was started.-->
            <br><br><br><br><br></div> 

          <div class="clginfo">
            <img class="clgpri" src="prin.jpg" alt="">
                <div class="containers">
                    <div class="box1">
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <h1 class="no"> Principal Message</h1>
                        
                        <br><br><p class="parainfo">"At the dawn of the 20th century there was not a single school <br> in the whole of South India Managed and Maintained by Muslims <br> in accordance with their tradition and culture <br> & imparting secular education. The Muslims of Vaniyambadi fired by <br> the inspiring lead given by Sir Syed Ahmed Khan rose as <br> torch bearers of Muslim..."
                        <br><br><br><br></p><p>
                        <a class="prin" href="About.html">Know More</a>    </p>
                        <!-- <p class="prin"><a href="About.html"></a> Know More</p> -->
                    </div>
                </div>
            </div> 
<!-- Secretary Message -->
          <div class="clginfos">
            <img class="clgpri2" src="secra.jpg" alt="">
            <div class="containers">
                <div class="box1">
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <h1 class="no">Secretary Message</h1>
                    <br>
                    <p class="parainfo"><br>"Islamiah College is a symbol of devotion to education and love <br> for  learning of the Muslims of Vaniyambadi. <br> The College was started in 1919 and got recognition in July 1921. <br> Though its name is “Islamiah College”, it is absolutely and <br> totally secular and holds a true national out-look. From its very inception, <br> it has drawn members...."
                </p><br><br><br><p>
                <a class="prin" href="About.html">Know More</a>     </p>
                <!-- <p class="prin" ><a href="About.html"></a> Know More </p> -->
                </div>
            </div>
        </div>  
    </div>
</section>          <br><br><br><br><br><br><br><br>
<!-- <iframe class="ifraimg"  src="Image Slider on Website/index.html"></iframe> -->

                <iframe class="ifra1" src="Souban/index.html"></iframe>

<!-- <hr class="hrline"> -->

<!-- Courses -->
    <div class="courses">
        <div class="about">
            <div class="abts">
                <img src="home-img.png" alt="">
            </div>
        <div class="contentt">
            <h1><br><span>Courses</span> We Have <br></h1>
            <p class="par"><br> 
            Islamiah College (Autonomous) - Vaniyambadi,100 years of education excellence. <br>
            was established in year 1919 and it's located in Vaniyambadi, Tamil Nadu.<br>
            The College Offers Courses at the under Graduate,post Graduate and Doctorate Levels. <br>
            </p> <button class="cn"><a href="About.html"> Learn More</a></button>
        </div>
    </div>
    </div>
<!-- Box -->
    <div class="courseswe">
     <div class="containers1">
            <img class="msc" src="course-3.png" alt="">
            <div class="box">
                <br><br><br><br><br><br><br><br>
                    <h1 class="no">B.Sc <b>&</b> M.Sc</h1>
                    <br><br>

                    <p>Goverment provides best Facility <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">  Know More  </a>    </p>
                </div>
            <img class="lang" src="course-9.png" alt="">
            <div class="box">
            
                <br><br><br><br><br><br><br><br><br>
                <h1 class="no">Language's</h1>
                <br><br><br>
                    <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">Know More</a>    </p>
            </div>
            <img class="mcom" src="course-7.png" alt="">
            <div class="box">
                <br><br><br><br><br><br><br><br>
                <h1 class="no">B.Com & M.Com</h1>
                <br><br> 
                    <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Doloribus, odit.</p>
                    <br><br><a class="hovfacility" href="About.html">Know More</a>    </p>
            </div>
        </div>
<!-- Infrastucture -->
            
            <!-- <div class="carddev"> -->
 
            <!-- <iframe class="ifra" src="Responsive Our Team Section/index.html"></iframe></div>
            <div class="carddev2">
                <br><br><br><br><br><br><br><br><br><br>
            <iframe class="ifra" src="Responsive Card Slider/index.html"></iframe>
            </div>  -->
            

            <iframe class="ifrafoot" src="Foot/index.html"></iframe>
            <div class="isclogo">
                <img src="logo1.png" class="logfoot">
            </div>
            
            <!-- <div class="card">
                <div class="imgx">
                    <img src="clg.jpg" alt="">
                </div>
                <div class="contentx">
                    <div class="details">
                        <h2>Computer Dept <br> <spann class="span1">Senior UI Design</spann> </h2>
                        <div class="data">
                            <h3>342 <br><spann class="span1">post</spann></h3>
                            <h3>342 <br><spann class="span1">followers</spannn></h3>
                            <h3>342 <br><spann class="span1">none</spann></h3>
                        </div>
                        <div class="actionbtn">
                            <button>Follow</button>
                            <button>message</button>
                        </div>
                    </div>
                </div>
            </div>  -->

            </div>
        </div>
    </div>
</body>
</html>