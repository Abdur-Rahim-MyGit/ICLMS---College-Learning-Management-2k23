<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_question_pdf'])){
    $id = $_POST['delete_id'];
    $question_pdf = $_POST['delete_question_pdf'];
    $sql = "DELETE FROM `question` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$question_pdf);
        header("Location: questionbank.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>