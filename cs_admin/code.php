<?php
// $id=$_GET['id'];
require "partials/_dbconnect.php";
if(isset($_POST['upload'])){
    // $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];	
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $id = $_POST['staff_id'];
    $name = $_POST["name"];
    // $image = $_POST["image"];
    $qualification = $_POST["qualification"];
    $experiance = $_POST["experiance"];
    $role = $_POST["role"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
    // $file_name = $_FILES['file']['name'];
    $old_image = $_POST["staff_old"];

    if($_FILES['file']['name'] !=''){
        $update_filename = $file_name;
    }
    else{
        $update_filename = $old_image;
    }
	
	// $file_destination = "photo/".$file_name;
  // if($_FILES['file']['name'] !=''){
  //     if(file_exists("photo/".$_FILES['file']['name']))
  //     {
  //       $filename=$_FILES['file']['name'];
  //       header("location: staff.php?msg=Imange Already Exits");

  //     }
  // }
    // else
    // {
      $sql = "UPDATE `staff` SET `name`='$name',`image`='$update_filename',`qualification`='$qualification',`experiance`='$experiance',`role`='$role',`phone`='$phone',`department`='$department' WHERE `id`=$id";
      $result = mysqli_query($conn, $sql);
  
      if($result){
          if($_FILES['file']['name'] !=''){
            move_uploaded_file($_FILES['file']['tmp_name'], "photo/".$_FILES['file']['name']);
            unlink("photo/".$old_image);
          }
          header("location: staff.php?msg=Record has been updated successfully");
      }
      else {
          echo "Failed:" .mysqli_error($conn);
      }
    }
// }


if(isset($_POST['stu_upload'])){
  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];	
  $temp_name = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $id = $_POST['stu_id'];
  $name = $_POST["name"];
    $regno = $_POST["regno"];
    $course = $_POST["course"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
    $group = $_POST["group"];
    $year = $_POST["year"];
  // $file_name = $_FILES['file']['name'];
  $old_image = $_POST["stu_old"];

  if($_FILES['file']['name'] !=''){
      $update_filename = $file_name;
  }
  else{
      $update_filename = $old_image;
  }

    $sql = "UPDATE `student` SET `name`='$name',`image`='$update_filename',`regno`='$regno',`course`='$course',`dob`='$dob',`phone`='$phone',`department`='$department',`group`='$group',`year`='$year' WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        if($_FILES['file']['name'] !=''){
          move_uploaded_file($_FILES['file']['tmp_name'], "photo/".$_FILES['file']['name']);
          unlink("photo/".$old_image);
        }
        header("location: student.php?msg=Record has been updated successfully");
    }
    else {
        echo "Failed:" .mysqli_error($conn);
    }
  }


  if(isset($_POST['cia_upload'])){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];	
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $id = $_POST['cia_id'];
    $title = $_POST["title"];
      $year = $_POST["year"];
      $department = $_POST["department"];
      $group = $_POST["group"];
    // $file_name = $_FILES['file']['name'];
    $old_pdf = $_POST["cia_old"];
  
    if($_FILES['file']['name'] !=''){
        $update_filename = $file_name;
    }
    else{
        $update_filename = $old_pdf;
    }
  
      $sql = "UPDATE `cia` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
      $result = mysqli_query($conn, $sql);
  
      if($result){
          if($_FILES['file']['name'] !=''){
            move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
            unlink("pdf/".$old_pdf);
          }
          header("location: cia.php?msg=Record has been updated successfully");
      }
      else {
          echo "Failed:" .mysqli_error($conn);
      }
    }



    if(isset($_POST['attendance_upload'])){
      $file_name = $_FILES['file']['name'];
      $file_type = $_FILES['file']['type'];	
      $temp_name = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $id = $_POST['attendance_id'];
      $title = $_POST["title"];
        $year = $_POST["year"];
        $department = $_POST["department"];
        $group = $_POST["group"];
      // $file_name = $_FILES['file']['name'];
      $old_pdf = $_POST["attendance_old"];
    
      if($_FILES['file']['name'] !=''){
          $update_filename = $file_name;
      }
      else{
          $update_filename = $old_pdf;
      }
    
        $sql = "UPDATE `attendance` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            if($_FILES['file']['name'] !=''){
              move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
              unlink("Pdf/".$old_pdf);
            }
            header("location: attendance.php?msg=Record has been updated successfully");
        }
        else {
            echo "Failed:" .mysqli_error($conn);
        }
      }


      if(isset($_POST['syllabus_upload'])){
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];	
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $id = $_POST['syllabus_id'];
        $title = $_POST["title"];
          $year = $_POST["year"];
          $department = $_POST["department"];
          $group = $_POST["group"];
        // $file_name = $_FILES['file']['name'];
        $old_pdf = $_POST["syllabus_old"];
      
        if($_FILES['file']['name'] !=''){
            $update_filename = $file_name;
        }
        else{
            $update_filename = $old_pdf;
        }
      
          $sql = "UPDATE `syllabus` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
          $result = mysqli_query($conn, $sql);
      
          if($result){
              if($_FILES['file']['name'] !=''){
                move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                unlink("Pdf/".$old_pdf);
              }
              header("location: Syllabus.php?msg=Record has been updated successfully");
          }
          else {
              echo "Failed:" .mysqli_error($conn);
          }
        }



        if(isset($_POST['notes_upload'])){
          $file_name = $_FILES['file']['name'];
          $file_type = $_FILES['file']['type'];	
          $temp_name = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $id = $_POST['notes_id'];
          $title = $_POST["title"];
            $year = $_POST["year"];
            $department = $_POST["department"];
            $group = $_POST["group"];
          // $file_name = $_FILES['file']['name'];
          $old_pdf = $_POST["notes_old"];
        
          if($_FILES['file']['name'] !=''){
              $update_filename = $file_name;
          }
          else{
              $update_filename = $old_pdf;
          }
        
            $sql = "UPDATE `notes` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
            $result = mysqli_query($conn, $sql);
        
            if($result){
                if($_FILES['file']['name'] !=''){
                  move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                  unlink("Pdf/".$old_pdf);
                }
                header("location: lecturenotes.php?msg=Record has been updated successfully");
            }
            else {
                echo "Failed:" .mysqli_error($conn);
            }
          }


          
        if(isset($_POST['timetable_upload'])){
          $file_name = $_FILES['file']['name'];
          $file_type = $_FILES['file']['type'];	
          $temp_name = $_FILES['file']['tmp_name'];
          $file_size = $_FILES['file']['size'];
          $id = $_POST['timetable_id'];
          $title = $_POST["title"];
            $year = $_POST["year"];
            $department = $_POST["department"];
            $group = $_POST["group"];
          // $file_name = $_FILES['file']['name'];
          $old_pdf = $_POST["timetable_old"];
        
          if($_FILES['file']['name'] !=''){
              $update_filename = $file_name;
          }
          else{
              $update_filename = $old_pdf;
          }
        
            $sql = "UPDATE `timetable` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
            $result = mysqli_query($conn, $sql);
        
            if($result){
                if($_FILES['file']['name'] !=''){
                  move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                  unlink("Pdf/".$old_pdf);
                }
                header("location: timetable.php?msg=Record has been updated successfully");
            }
            else {
                echo "Failed:" .mysqli_error($conn);
            }
          }


          if(isset($_POST['examtimetable_upload'])){
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];	
            $temp_name = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $id = $_POST['examtimetable_id'];
            $title = $_POST["title"];
              $year = $_POST["year"];
              $department = $_POST["department"];
              $group = $_POST["group"];
            // $file_name = $_FILES['file']['name'];
            $old_pdf = $_POST["examtimetable_old"];
          
            if($_FILES['file']['name'] !=''){
                $update_filename = $file_name;
            }
            else{
                $update_filename = $old_pdf;
            }
          
              $sql = "UPDATE `examtime` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
              $result = mysqli_query($conn, $sql);
          
              if($result){
                  if($_FILES['file']['name'] !=''){
                    move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                    unlink("Pdf/".$old_pdf);
                  }
                  header("location: examtime.php?msg=Record has been updated successfully");
              }
              else {
                  echo "Failed:" .mysqli_error($conn);
              }
            }


            if(isset($_POST['question_upload'])){
              $file_name = $_FILES['file']['name'];
              $file_type = $_FILES['file']['type'];	
              $temp_name = $_FILES['file']['tmp_name'];
              $file_size = $_FILES['file']['size'];
              $id = $_POST['question_id'];
              $title = $_POST["title"];
                $year = $_POST["year"];
                $department = $_POST["department"];
                $group = $_POST["group"];
              // $file_name = $_FILES['file']['name'];
              $old_pdf = $_POST["question_old"];
            
              if($_FILES['file']['name'] !=''){
                  $update_filename = $file_name;
              }
              else{
                  $update_filename = $old_pdf;
              }
            
                $sql = "UPDATE `question` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
                $result = mysqli_query($conn, $sql);
            
                if($result){
                    if($_FILES['file']['name'] !=''){
                      move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                      unlink("Pdf/".$old_pdf);
                    }
                    header("location: questionbank.php?msg=Record has been updated successfully");
                }
                else {
                    echo "Failed:" .mysqli_error($conn);
                }
              }


              if(isset($_POST['book_upload'])){
                $file_name = $_FILES['file']['name'];
                $file_type = $_FILES['file']['type'];	
                $temp_name = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $id = $_POST['book_id'];
                $title = $_POST["title"];
                  $year = $_POST["year"];
                  $department = $_POST["department"];
                  $group = $_POST["group"];
                // $file_name = $_FILES['file']['name'];
                $old_pdf = $_POST["book_old"];
              
                if($_FILES['file']['name'] !=''){
                    $update_filename = $file_name;
                }
                else{
                    $update_filename = $old_pdf;
                }
              
                  $sql = "UPDATE `books` SET `title`='$title',`pdf`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
                  $result = mysqli_query($conn, $sql);
              
                  if($result){
                      if($_FILES['file']['name'] !=''){
                        move_uploaded_file($_FILES['file']['tmp_name'], "pdf/".$_FILES['file']['name']);
                        unlink("Pdf/".$old_pdf);
                      }
                      header("location: ReferBook.php?msg=Record has been updated successfully");
                  }
                  else {
                      echo "Failed:" .mysqli_error($conn);
                  }
                }


                if(isset($_POST['videos_upload'])){
                  $file_name = $_FILES['file']['name'];
                  $file_type = $_FILES['file']['type'];	
                  $temp_name = $_FILES['file']['tmp_name'];
                  $file_size = $_FILES['file']['size'];
                  $id = $_POST['videos_id'];
                  $title = $_POST["title"];
                    $year = $_POST["year"];
                    $department = $_POST["department"];
                    $group = $_POST["group"];
                  // $file_name = $_FILES['file']['name'];
                  $old_video = $_POST["videos_old"];
                
                  if($_FILES['file']['name'] !=''){
                      $update_filename = $file_name;
                  }
                  else{
                      $update_filename = $old_video;
                  }
                
                    $sql = "UPDATE `videos` SET `title`='$title',`video`='$update_filename',`year`='$year',`department`='$department',`group`='$group' WHERE `id`=$id";
                    $result = mysqli_query($conn, $sql);
                
                    if($result){
                        if($_FILES['file']['name'] !=''){
                          move_uploaded_file($_FILES['file']['tmp_name'], "Video/".$_FILES['file']['name']);
                          unlink("Video/".$old_video);
                        }
                        header("location: videolect.php?msg=Record has been updated successfully");
                    }
                    else {
                        echo "Failed:" .mysqli_error($conn);
                    }
                  }
?>