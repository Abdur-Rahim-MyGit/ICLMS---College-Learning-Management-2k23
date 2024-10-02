<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_timetable_pdf'])){
    $id = $_POST['delete_id'];
    $timetable_pdf = $_POST['delete_timetable_pdf'];
    $sql = "DELETE FROM `timetable` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$notes_pdf);
        header("Location: timetable.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>