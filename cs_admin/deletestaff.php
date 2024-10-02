<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_student_img'])){
    $id = $_POST['delete_id'];
    $staff_img = $_POST['delete_staff_img'];
    $sql = "DELETE FROM `staff` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("photo/".$staff_img);
        header("Location: staff.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>