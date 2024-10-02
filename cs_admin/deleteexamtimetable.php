<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_examtimetable_pdf'])){
    $id = $_POST['delete_id'];
    $examtimetable_pdf = $_POST['delete_examtimetable_pdf'];
    $sql = "DELETE FROM `examtime` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$examtimetable_pdf);
        header("Location: examtime.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>