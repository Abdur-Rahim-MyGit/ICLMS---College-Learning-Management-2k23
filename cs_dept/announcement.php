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
            <div class="container my-2 text-lg-left ">
              <br><br><br><br><br>

                <h2 class="justify-content-center" style="color:  rgb(255, 255, 255);">Announcements</h2><br>
<br>
                <?php
                        require 'partials/_dbconnect.php';
                        $sql = "SELECT * from `announcement`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                <div class="row">
                    <div class="col-3">
                    <h4 class="justify-content-center mx-3" style="color:  rgba(250, 235, 215, 0.493);"><strong><?php echo $row['title'] ?></strong></h4>
                    </div>
                    <div class="col-8">
                        <h6 style="color: rgba(250, 235, 215, 0.493);" class="text-sm-end"><?php echo $row['date'] ?></h6>
                    </div>
                </div>               
                <p class="mx-5" style="color: rgba(250, 235, 215, 0.493) ;">
                <?php echo $row['description'] ?>
                </p>
                <p class="mx-5" style="color: rgb(124, 88, 42);">
                    <!-- <strong>Basket Ball-</strong>06.10.2022-3:30pm</br></br>
                    <strong>Foot Ball-</strong>06.10.2022-3:30pm</br></br>
                    <strong>Hand Ball-</strong>06.10.2022-3:30pm</br></br> -->
                    <?php echo $row['information'] ?>
                </p>
                <?php        
                    }
                ?>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
        </div>
        <footer>
          <iframe class="ifrafoot" src="Foot/index.html" frameborder="0"></iframe>
        </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
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
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="evo-calendar.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+Jc
        
    </body>
    </html>
    