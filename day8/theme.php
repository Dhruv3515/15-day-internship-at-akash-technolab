


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
                                        <a class="nav-link tm-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="menu2.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="menu3.php">Plans</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href=".menu4.php">Contact</a>
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


            <div class="row tm-mb-10 tm-contact-row mx-auto">
                <div class="col-lg-6 tm-contact-left">
                    <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <h3 class="tm-text-primary tm-mb-5">Our Location</h3>
                            <address class="tm-mb-9"> A/21 SARDARMALL THAKKARBAPANAGR,AHMEDABAD,382350</address>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="440" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ml-auto tm-contact-right">
                    <div class="tm-contact-form-wrap">
                        <h3 class="tm-text-primary tm-mb-6">Send Us a Message</h3>
                        <form id="contact-form" action ="connection.php	"  method="POST" class="tm-contact-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name" required="" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                            </div>
							   <div class="form-group">
                                <input type="monumber" name="monumber" class="form-control rounded-0" placeholder="number" required="" />
                            </div>
							
                            <div class="form-group">
                                <select class="form-control" id="contact-select" name="inquiry">
                                    <option value="-">LIC</option>
                                    <option value="purchase">STAR</option>
                                    <option value="technical">VEHICLE</option>
                                    <option value="billing">OTHER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message..." required=""></textarea>
                            </div>

                            <div class="form-group mb-0">
							<input type="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
           

         <?php
		
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