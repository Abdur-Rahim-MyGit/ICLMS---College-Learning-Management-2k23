<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_cia_pdf'])){
    $id = $_POST['delete_id'];
    $cia_pdf = $_POST['delete_cia_pdf'];
    $sql = "DELETE FROM `cia` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("pdf/".$cia_pdf);
        header("Location: cia.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>