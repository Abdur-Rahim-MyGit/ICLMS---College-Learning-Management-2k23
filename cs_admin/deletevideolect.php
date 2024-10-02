<?php
include "partials/_dbconnect.php";
if(isset($_POST['del_videos_pdf'])){
    $id = $_POST['delete_id'];
    $videos = $_POST['delete_videos_pdf'];
    $sql = "DELETE FROM `videos` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        unlink("Video/".$videos);
        header("Location: videolect.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed" .mysqli_error($conn);
    }
}
?>