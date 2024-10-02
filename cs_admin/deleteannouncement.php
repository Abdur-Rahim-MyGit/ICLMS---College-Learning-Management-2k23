<?php
include "partials/_dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `announcement` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: announcement.php?msg=Record deleted successfully");
}
else {
    echo "Failed" .mysqli_error($conn);
}
?>