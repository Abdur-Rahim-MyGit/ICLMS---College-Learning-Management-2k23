<?php
include "partials/_dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `calender` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: calender.php?msg=Record deleted successfully");
}
else {
    echo "Failed" .mysqli_error($conn);
}
?>