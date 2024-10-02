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
            color: #d7b539;
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
            <br><br><br><br><br>
       
        <section class="vidlects"> 
          <div class="containers my-4 mt-4" >
            <div class="row row-cols-1 row-cols-md-4 g-4" >
                <div class="col qbn">
                  <img src="features-4.svg" class="oneys" alt="">
                    <div class="card h-100 lectcss">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body"><br><br><br><br><br>
                            <h5 class="card-title"><br>1st Year</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="attendence.php" class=" linkme btn btn-dark">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <!-- 3rd deck -->
                <div class="col qbn">
                  <img src="features-2.svg" class="twoys" alt="">
                  <div class="card h-100 lectcss">
                      <!-- <img src="..." class="card-img-top" alt="..."> -->
                      <div class="card-body"> <br><br><br><br><br>
                          <h5 class="card-title"><br>2nd Year</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural
                              lead-in to additional content. This content is a little bit longer.</p>
                          <a href="attendence2.php" class="linkme btn btn-dark">Click Here</a>
                      </div>
                      <div class="card-footer text-muted">
                          2 days ago
                      </div>
                  </div>
              </div>
                <div class="col qbn">
                  <img src="features-1.svg" class="threeys" alt="">
                    <div class="card h-100 lectcss">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body"><br><br><br><br><br>
                            <h5 class="card-title"><br>3rd Year</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="attendence3.php" class="linkme btn btn-dark">Click Here</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                
        </section>
      </div>
        <footer>
          <iframe class="ifrafootatten" src="Foot/index.html" frameborder="0"></iframe>
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
    