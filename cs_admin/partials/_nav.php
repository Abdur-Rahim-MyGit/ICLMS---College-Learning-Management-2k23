<?php
// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
//   $loggedin = true;
// }
// else{
//   $loggedin = false;
// }
echo '
<div class="main-container d-flex">
<div class="sidebar" id="side_nav">
  <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
    <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">CS</span><span
        class="text-white">Computer Science</span></h1>
    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
  </div>

  <ul class="list-unstyled px-2">
    <li class="eff"><a href="staff.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-id-card"></i> &nbsp;
      Dept Details</a></li>
    <li class="eff"><a href="staff.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-id-card"></i> &nbsp;
        staff Profile</a></li>
    <li class="eff"><a href="student.php" class="text-decoration-none px-3 py-2 d-block"><i
          class="fas fa-id-badge"></i> &nbsp; Students
        Profile</a></li>
    <li class="eff dropdown"><a href="cia.php" class="text-decoration-none px-3 py-2 d-block"><i
          class="fad fa-sort-amount-down"></i> &nbsp;
        CIA Marks</a>
    </li>
    <li class="eff"><a href="calender.php" class="text-decoration-none px-3 py-2 d-block"><i
          class="fas fa-calendar-alt"></i> &nbsp;
        College Calender</a></li>
    <li class="eff"><a href="announcement.php"
        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
        <span><i class="fas fa-bullhorn"></i> &nbsp; Announcements</span>
        <span class="bg-dark rounded-pill text-white py-0 px-2">02</span>
      </a>
    </li>
    <li class="eff dropdown"><a href="attendance.php" class="text-decoration-none px-3 py-2 d-block "><i
          class="fas fa-clipboard-user"></i> &nbsp;
        Attendance</a>
    </li>
  </ul>
  <hr class="h-color mx-2">

  <ul class="list-unstyled px-2">
    <li class="eff dropdown"><a href="Syllabus.php" class="text-decoration-none px-3 py-2 d-block "><i
        class="fas fa-clipboard-user"></i> &nbsp;Autonomous Syllabus</a>
    </li>
  <li class="eff dropdown"><a href="lecturenotes.php" class="text-decoration-none px-3 py-2 d-block "><i
      class="fas fa-clipboard-user"></i> &nbsp;
      Lecture Notes</a>
  </li>
    <li class="eff dropdown"><a href="timetable.php" class="text-decoration-none px-3 py-2 d-block "><i
        class="fas fa-clipboard-user"></i> &nbsp;
        Time Table</a>
    </li>
    <li class="eff"><a href="examtime.php" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-table"></i> &nbsp; Exam Time
        Table</a></li>
    <li class="eff"><a href="questionbank.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-question-circle"></i> &nbsp;
        Question Banks</a></li>
    <li class="eff"><a href="ReferBook.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-book"></i> &nbsp; Reference
        Books</a></li>
</ul>
  <hr class="h-color mx-2">

  <ul class="list-unstyled px-2">
    <li class="eff"><a href="videolect.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-photo-video"></i> &nbsp; Video
        Lectures</a></li>
  </ul>
</div>
</div>
';
?>