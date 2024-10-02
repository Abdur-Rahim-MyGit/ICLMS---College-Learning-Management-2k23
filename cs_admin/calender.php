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
    <link rel="stylesheet" href="evo-calendar.min.css">
    <link rel="stylesheet" href="evo-calendar.midnight-blue.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-custom .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .6);
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            color: #d7b539;
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
      <?php
            if(isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-dismissible fade show" style=" margin-top:100px; background-color: rgb(255,255,255);" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
     <a href="addevent.php" class="btn btn-dark mb-2" style="margin-left: 528px; margin-top:80px; background-color : rgba(227 216 253 / 35%);">Add New</a>

            <div class="container my-4 mt-4 listmn"> 
                <table id="example" class="table table-striped"> <br>
                    <thead class="bg" style="background-color: rgba(19, 7, 48, 0.349); border-radius: 40px; align-items: center;">
                        <tr> 
                            <!-- <th>S.no</th> -->
                            <th>Id</th> 
                            <th>Name</th> 
                            <th>Date</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require 'partials/_dbconnect.php';
                        $sql = "SELECT * from `calender`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr >
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['type'] ?></td>
                            <td>
                                <a href="editevent.php?id=<?php echo $row['id'] ?>" class="link-light"><i class="fa-solid fa-pen-to-square fs-6 me-3"></i></a>
                                <a href="deleteevent.php?id=<?php echo $row['id'] ?>" class="link-light"><i class="fa-solid fa-trash fs-6 me-3"></i></a>
                            </td>
                        </tr>
                        <?php        
                    }
                ?>
                        
                    </tbody>
                </table> <br>
            
          
            </div> 
        </div>
        <footer>
          <iframe class="ifrafootcal" src="Foot/index.html" frameborder="0"></iframe>
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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="evo-calendar.min.js"></script>
        <script>
        
            $(document).ready(function () {
                $('#calendar').evoCalendar({
                    // settingName: settingValue
                    theme: "Midnight Blue",
                    calendarEvents: [
                        {
                            id: 'event1', // Event's ID (required)
                            name: "New Year", // Event name (required)
                            date: "January/1/2023", // Event date (required)
                            description: "    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolore velit molestias. Fugiat eius corrupti pariatur? Fuga ipsum quae, harum repellat rerum facere saepe, distinctio doloribus nemo dolore vel voluptatibus!",
                            type: "holiday", // Event type (required)
                            everyYear: true // Same event every year (optional)
                        },
                        {
                            id: 'event2', // Event's ID (required)
                            name: "Republic Day", // Event name (required)
                            date: "January/26/2023", // Event date (required)
                            description: "    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolore velit molestias. Fugiat eius corrupti pariatur? Fuga ipsum quae, harum repellat rerum facere saepe, distinctio doloribus nemo dolore vel voluptatibus!",
                            type: "holiday", // Event type (required)
                            everyYear: true // Same event every year (optional)
                        },
                        {
                            id: 'event3', // Event's ID (required)
                            name: "My Birthday", // Event name (required)
                            date: "february/14/2023", // Event date (required)
                            description: "    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolore velit molestias. Fugiat eius corrupti pariatur? Fuga ipsum quae, harum repellat rerum facere saepe, distinctio doloribus nemo dolore vel voluptatibus!",
                            type: "holiday", // Event type (required)
                            everyYear: true // Same event every year (optional)
                        },
                        {
                            name: "Vacation Leave",
                            badge: "02/13 - 02/15", // Event badge (optional)
                            date: ["February/13/2022", "February/15/2022"], // Date range
                            description: "Vacation leave for 3 days.", // Event description (optional)
                            type: "event",
                            color: "#63d867" // Event custom color (optional)
                        },
                    ]
                })
            })
        </script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+Jc
        
    </body>
    </html>
    