<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_syllabus_pdf'])){
    $id = $_POST['delete_id'];
    $syllabus_pdf = $_POST['delete_syllabus_pdf'];
    $sql = "DELETE FROM `syllabus` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$syllabus_pdf);
        header("Location: Syllabus.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>