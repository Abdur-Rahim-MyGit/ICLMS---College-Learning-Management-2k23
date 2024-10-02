<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_student_img'])){
    $id = $_POST['delete_id'];
    $student_img = $_POST['delete_student_img'];
    $sql = "DELETE FROM `student` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("photo/".$student_img);
        header("Location: student.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>