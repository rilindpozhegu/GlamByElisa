<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/png" href="img/logo-elisa1.png"/>
    
    <title>Elysa Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link rel="stylesheet" type="text/css" href="css/galery-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">     <!-- PhotoSwipe -->
    <link rel="stylesheet" type="text/css" href="css/default-skin.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="css/home-galery.css">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Preloader -->
    <div id="overlay">
        <img src="img/logo-elisa1.png" class="preloader_img">
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navigtionbar-portfolio" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <img src="img/logo-elisa1.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                <p class="socialmedia-navigationbar">
                    <a href="https://web.facebook.com/glambyelisa?_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
                    <!-- <i class="fa fa-pinterest-p" aria-hidden="true"></i> -->
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <a href="https://www.thumbtack.com/-Dallas-TX/service/2630717"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                </p>
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="#" href="http://glambyelisa.com/">HOME</a>
                    </li>
                    <li>
                        <a class="#" href="about.php">ABOUT US</a>
                    </li>
                    <li>
                        <a class="active2n" href="#">PORTFOLIO</a>
                    </li>
                    <li>
                        <a class="#" href="services.php">SERVICES</a>
                    </li>
                    <li>
                        <a class="#" href="contacts.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="portfolio-cover conatiner-fluid">
        <div class="">
            <div class="col-md-12">
                <img src="img/logo-elisa1.png">
                <h1>GLAM<span>BY</span>ELYSA</h1>
                <!-- <p>PORTFOLIO</p> -->
            </div>
        </div>
    </section>
  <style type="text/css">
        .active2n {
            color: #fff !important;
        }
    </style>


    
   <!-- Portfolio section
================================================== -->


<div>

  <!-- Nav tabs -->
  <div class="navigation_portfolio__">
  <div class="container">
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">Makeup and Trials</a></li>
    <li role="presentation"><a href="#two" aria-controls="profile" role="tab" data-toggle="tab">Bridal & Hair Updos</a></li>
    <li role="presentation"><a href="#three" aria-controls="messages" role="tab" data-toggle="tab">Skincare Treatment</a></li>
    <li role="presentation"><a href="#four" aria-controls="settings" role="tab" data-toggle="tab">Brow Bar</a></li>
    <li role="presentation"><a href="#five" aria-controls="settings" role="tab" data-toggle="tab">Waxing</a></li>
  </ul>
  </div>
</div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="one"><?php include 'makeuptrials.php';?></div>
    <div role="tabpanel" class="tab-pane" id="two"><?php include 'bridal_hair.php';?></div>
    <div role="tabpanel" class="tab-pane" id="three"><?php include 'skincare_trat.php';?></div>
    <div role="tabpanel" class="tab-pane" id="four"><?php include 'brow_bar.php';?></div>
    <div role="tabpanel" class="tab-pane" id="five"><?php include 'waxing.php';?></div>
  </div>

</div>



    <footer>
        <div class="container footer-bootom col-md-12">
            <div class="container">
                <div class="col-md-6 rights-reserved">
                    <a href="http://emiratesgraphic.com/"><p>© All rights reserved Emirates Graphic</p></a>
                </div>
                <div class="col-md-6 social-media-footer">
                    <a href="https://web.facebook.com/glambyelisa?_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
                    <!-- <i class="fa fa-pinterest-p" aria-hidden="true"></i> -->
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <a href="https://www.thumbtack.com/-Dallas-TX/service/2630717"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>


       <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/photo-gallery.js"></script>
    <!-- Core JS file -->
    <script src="js/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="js/photoswipe-ui-default.min.js"></script>

    <!-- Galery Script -->
    <script type="text/javascript" src="js/galery-script.js"></script>
    <script type="text/javascript">
        $('.nav a').click(function(){
    $('.nav-collapse').collapse('hide');
});
    </script>
</body>

</html>
