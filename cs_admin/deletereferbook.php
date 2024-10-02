<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_book_pdf'])){
    $id = $_POST['delete_id'];
    $books_pdf = $_POST['delete_book_pdf'];
    $sql = "DELETE FROM `books` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Pdf/".$books_pdf);
        header("Location: ReferBook.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>