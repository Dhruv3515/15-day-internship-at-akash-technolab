<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dhruv Life Insurance</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="slick/slick.css" rel='stylesheet' /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="slick/slick-theme.css" rel='stylesheet' />
    <link href="css/templatemo-real-dynamic.css" rel="stylesheet" />
<!--

TemplateMo 547 Real Dynamic

https://templatemo.com/tm-547-real-dynamic

-->
</head>

<body>
    <div class="tm-container">
        <div class="tm-site-header"></div> <!-- tm-site-header -->
        <div class="tm-site-header-overlay">
            <div class="tm-header-stripe ml-auto"></div>
            <div class="tm-header-stripe tm-header-stripe-short ml-auto"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 tm-site-header-left">
                        <h1 class="text-uppercase tm-site-name">Dhruv Life Care</h1>
                        <p class="text-white mb-0 tm-site-desc">Dhruv R Bavadiya</p>
                    </div>
                    <div class="col-lg-8 tm-site-header-right">
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                            <!-- Collapse button -->
                            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                        class="fas fa-bars text-white"></i></span></button>
                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse tm-nav" id="navbarNav">
                                <!-- Links -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link tm-nav-link" href="in.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="menu1.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="menu2.php">plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="menu3.php">Contact</a>
                                    </li>

                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div> <!-- col -->
                </div> <!-- row -->
            </div> <!-- container fluid -->
        </div> <!-- tm-site-header-overlay -->
        <div class="tm-header-stripe w-100"></div>
    </div>
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/logo.jpg">
        </div>
    </div>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">


           

         <?php
		 include('intro.php');
		 include('testinomal.php');
		 ?>
           <?php
		   include('upperheader.php');
		   include('footer.php');
		   
		   ?>
           
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="slick/slick.min.js"></script>
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            // Testimonials carousel
            $('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
</body>
</html>	