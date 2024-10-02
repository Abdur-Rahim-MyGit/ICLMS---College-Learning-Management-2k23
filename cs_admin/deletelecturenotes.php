<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_notes_pdf'])){
    $id = $_POST['delete_id'];
    $notes_pdf = $_POST['delete_notes_pdf'];
    $sql = "DELETE FROM `notes` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$notes_pdf);
        header("Location: lecturenotes.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>