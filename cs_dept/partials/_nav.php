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
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
          class="fas fa-id-badge"></i> &nbsp; Students
        Profile</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
        <li>
          <a href="student.php" class="dropdown-item nefs" >I Year</a>
          <a href="student2.php" class="dropdown-item nefs">II Year</a>
          <a href="student3.php" class="dropdown-item nefs">III Year</a>
        </li>
      </ul>
    </li>
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
        data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
          class="fad fa-sort-amount-down"></i> &nbsp;
        CIA Marks</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
        <li>
          <a href="cia1.php" class="dropdown-item nefs" >I Year</a>
          <a href="cia2.php" class="dropdown-item nefs">II Year</a>
          <a href="cia3.php" class="dropdown-item nefs">III Year</a>
        </li>
      </ul>
    </li>
    <li class="eff"><a href="calender.php" class="text-decoration-none px-3 py-2 d-block"><i
          class="fas fa-calendar-alt"></i> &nbsp;
        College Calender</a></li>
    <li class="eff"><a href="announcement.php"
        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
        <span><i class="far fa-bullhorn"></i> &nbsp; Announcements</span>
        <span class="bg-dark rounded-pill text-white py-0 px-2">02</span>
      </a>
    </li>
    <li class="eff"><a href="attendance.php" class="text-decoration-none px-3 py-2 d-block "><i
          class="far fa-clipboard-user"></i> &nbsp;
        Attendance</a>
    </li>
  </ul>
  <hr class="h-color mx-2">

  <ul class="list-unstyled px-2">
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block "
      data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
        class="far fa-clipboard-user"></i> &nbsp;Autonomous Syllabus</a>
    <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
      <li>
        <a href="Syllabus.php" class="dropdown-item nefs" >I Year</a>
        <a href="Syllabus2.php" class="dropdown-item nefs">II Year</a>
        <a href="Syllabus3.php" class="dropdown-item nefs">III Year</a>
      </li>
    </ul>
</li>
  <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block "
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
      class="far fa-clipboard-user"></i> &nbsp;
      Lecture Notes</a>
  <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
    <li>
      <a href="lecturenotes.php" class="dropdown-item nefs" > I Year</a>
      <a href="lecturenotes2.php" class="dropdown-item nefs"> II Year</a>
      <a href="lecturenotes3.php" class="dropdown-item nefs"> III Year</a>
    </li>
  </ul>
</li>
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block "
      data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
        class="far fa-clipboard-user"></i> &nbsp;
        Time Table</a>
    <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
      <li>
        <a href="timetable.php" class="dropdown-item nefs" > I Year</a>
        <a href="timetable2.php" class="dropdown-item nefs"> II Year</a>
        <a href="timetable3.php" class="dropdown-item nefs"> III Year</a>
      </li>
</ul>
  </li>
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i 
      class="fal fa-table"></i> &nbsp; Exam Time
        Table</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
            <li>
              <a href="examtimetable.php" class="dropdown-item nefs" > I Year</a>
              <a href="examtimetable2.php" class="dropdown-item nefs"> II Year</a>
              <a href="examtimetable3.php" class="dropdown-item nefs"> III Year</a>
            </li>
      </ul>
        </li>
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i 
    class="fas fa-question-circle"></i> &nbsp;
        Question Banks</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
            <li>
              <a href="question.php" class="dropdown-item nefs" > I Year</a>
              <a href="question2.php" class="dropdown-item nefs"> II Year</a>
              <a href="question3.php" class="dropdown-item nefs"> III Year</a>
            </li>
      </ul>
    </li>
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i
     class="fas fa-book"></i> &nbsp; Reference
        Books</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
            <li>
              <a href="ReferBook.php" class="dropdown-item nefs" > I Year</a>
              <a href="ReferBook2.php" class="dropdown-item nefs"> II Year</a>
              <a href="ReferBook3.php" class="dropdown-item nefs"> III Year</a>
            </li>
      </ul>
    </li>
</ul>
  <hr class="h-color mx-2">

  <ul class="list-unstyled px-2">
    <li class="eff dropdown"><a href="#" class="dropdown-toggle text-decoration-none px-3 py-2 d-block"
    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i 
    class="fas fa-photo-video"></i> &nbsp; Video
        Lectures</a>
        <ul class="dropdown-menu" style="background-color: #452e46f3; border-radius: 15px;">
            <li>
              <a href="vidlect.php" class="dropdown-item nefs" > I Year</a>
              <a href="vidlect2.php" class="dropdown-item nefs"> II Year</a>
              <a href="vidlect3.php" class="dropdown-item nefs"> III Year</a>
            </li>
      </ul>
  </li>
  </ul>
  <hr class="h-color mx-2">

  <ul class="list-unstyled px-2">
    <li class="eff"><a href="https://www.islamiahcollege.edu.in/results" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-poll-h"></i> &nbsp; Result</a>
    </li>
  </ul>
</div>
</div>
';
?>