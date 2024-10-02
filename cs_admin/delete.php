<?php
include "partials/_dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE `s.no`=$id";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: admin.php?msg=Record deleted successfully");
}
else {
    echo "Failed" .mysqli_error($conn);
}
?>