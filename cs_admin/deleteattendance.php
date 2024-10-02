<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_attendance_pdf'])){
    $id = $_POST['delete_id'];
    $attendance_pdf = $_POST['delete_attendance_pdf'];
    $sql = "DELETE FROM `attendance` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$attendance_pdf);
        header("Location: attendance.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>