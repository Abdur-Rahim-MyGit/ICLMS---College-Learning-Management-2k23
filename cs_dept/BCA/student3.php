<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon"
        href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon.ico">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <style>
        .navbar-custom .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .6);
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            color:#c0d3169d;
        }
    </style>
    <style>
        .ho:hover {
            text-shadow: none !important;
            box-sizing: border-box !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            -webkit-transform: scale(1.1) !important;
            -ms-transform: scale(1.1) !important;
            transform: scale(1.1) !important;
            z-index: 2;
        }
    </style>
    <title>ICLMS</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <?php require 'partials/_nav.php'?>
        <div class="content">
        <?php require 'partials/top_nav.php'?>
        <br><br><br><br>
            <div class="container my-4 mt-4 listmn">
                <table id="example" class="table table-striped"> <br>
                    <thead class="bg" style="background-color: rgba(19, 7, 48, 0.349); border-radius: 40px;">
                        <tr>
                            <th>Name</th>
                            <th>image</th>
                            <th>Reg.no</th>
                            <th>Course</th>
                            <th>Date Of Birth</th>
                            <th>Phone No</th>
                            <!-- <th>Salary</th> -->
                        </tr>
                    </thead>
                    <style>
                    </style>
                    <tbody style="color: aliceblue;">
                    <?php
                        require 'partials/_dbconnect.php';
                        $sql = "SELECT * from `student` where `group`='computer application' and `year`='III year'";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td class="text-center"><img src="../../cs_admin/photo/<?php echo $row['image'];?>"
                                    alt="" width=50 ,height= 50></td>
                            <td><?php echo $row['regno'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['dob'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                        </tr>
                        <?php        
                    }
                ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>

            </div>
            
        </div>
        <footer>
            <iframe class="ifrafootst" src="Foot/index.html" frameborder="0"></iframe>
          </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script>
            $(".count").counterUp({ time: 4000 });
        </script>
        <script>
            $(".sidebar ul li").on('click', function () {
                $(".sidebar ul li.active").removeClass('active');
                $(this).addClass('active');
            });

            $('.open-btn').on('click', function () {
                $('.sidebar').addClass('active');

            });

            $('.close-btn').on('click', function () {
                $('.sidebar').removeClass('active');

            })

        </script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+Jc
        
    </body>
    </html>
    