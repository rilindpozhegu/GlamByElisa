<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="img/logo-elisa1.png"/>
    
    <title>Glam By Elysa</title>
    <link rel="shortcut icon" type="img/logo-elisa1.png" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/scrolling-nav.css?<?= filemtime('css/scrolling-nav.css') ?>">
    <link rel="stylesheet" href="css/home-galery.css?<?= filemtime('css/home-galery.css') ?>">
    <link rel="stylesheet" href="css/modal_style.css?<?= filemtime('css/modal_style.css') ?>">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">

     <!-- PhotoSwipe -->
    <link rel="stylesheet" href="css/default-skin.css?<?= filemtime('css/default-skin.css') ?>">
    <link rel="stylesheet" href="css/photoswipe.css">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Preloader -->
    <div id="overlay">
        <img src="img/logo-elisa1.png" class="preloader_img">
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navigationbar-elisa" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll navbar-left">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a> -->
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
                        <li class="dropdown dropdown-navigationbar">
                            <a id="drop1" class="active1n" href="http://glambyelisa.com/">HOME</a>
                        </li>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">ABOUT US</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="portfolio.php">PORTFOLIO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="services.php">SERVICES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contacts.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/slider/homepage 1.jpg" alt="..." class="carousel-image">
                    <div class="carousel-caption">
                        
                    </div>
                </div>
                <div class="item">
                    <img src="img/slider/homepage 2.jpg" alt="..." class="carousel-image">
                    <div class="carousel-caption">
                        
                    </div>
                </div>
                <div class="item">
                    <img src="img/slider/homepage 3.jpg" alt="..." class="carousel-image">
                    <div class="carousel-caption">
                        
                    </div>
                </div>
                <div class="item">
                    <img src="img/slider/homepge 4.jpg" alt="..." class="carousel-image">
                    <div class="carousel-caption">
                        
                    </div>
                </div>
    </section>

    <style type="text/css">
        .active1n {
            color: #fff !important;
        }
    </style>

    <div class="logo-slider-over col-md-12 container">
        <img src="img/logo-elisa1.png">
        <h1>&nbsp;GLAM<span>BY</span>ELYSA</h1>
        <button class="slider-top-button default_button">More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>

<!--  Portfolio Section 1  -->
<section class="section1">
    <div class="container-fluid">
        <div class="row">   
            <div class="twentygrid col-xs-12 padding-none first-panel-glam">
                <div class="col-md-12 col-xs-6 image-s1 padding-none">
                    <img src="img/homeservices/makeup service front.jpg">
                    <div class="overlay_image_g">
                        <div class="text">
                           <button class="default_button" data-toggle="modal" data-target="#myModal">Book Now <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>    
                <div class="col-md-12 col-xs-6 text-s1">
                <hr  width="40%" align="left" color:"pink" class="mobile-d-n">
                    <h1>Makeup and Trials</h1>
                    <!-- <p>(all include lashes)<br>
                    Wedding make up<br>
                    Trial<br>
                    Photography
                    </p> -->

                    <a href="services.php#service_four"><button class="default_button">More<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                </div>
            </div> 
            <div class="twentygrid col-xs-12 padding-none first-panel-glam">
                <div class="col-md-12 col-xs-6 text-s1">
                <hr  width="40%" align="left" color:"pink" class="mobile-d-n">
                    <h1>Bridal & Hair Updos</h1>
                    <!-- <p>
                    HAIR UP DOS & STYLING<br>
                    Waves<br>
                    Straight<br>
                    Romantic<br>

                    </p> -->
                <a href="services.php#service_three"><button class="default_button">More<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                </div>
                <div class="col-md-12 col-xs-6 image-s1 padding-none">
                    <img src="img/homeservices/homepage 2.jpg" style="object-position: 10%;">
                    <div class="overlay_image_g">
                        <div class="text">
                           <button class="default_button"  data-toggle="modal" data-target="#myModal">Book Now <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="twentygrid col-xs-12 padding-none first-panel-glam">
                <div class="col-md-12 col-xs-6 image-s1 padding-none">
                    <img src="img/homeservices/homepge 4.jpg">
                    <div class="overlay_image_g">
                        <div class="text">
                           <button class="default_button"  data-toggle="modal" data-target="#myModal">Book Now <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-6 text-s1">
                <hr  width="40%" align="left" color:"pink" class="mobile-d-n">
                    <h1>Skincare Treatment</h1>
                    <!-- <p>Acne facial<br>
                    Chemical peels+led light<br>
                    Microdermabrasion <br>
                    </p> -->
                <a href="services.php#service_one"><button class="default_button">More<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                </div>
            </div>
            <div class="twentygrid col-xs-12 padding-none first-panel-glam">
                <div class="col-md-12 col-xs-6 text-s1">
                <hr  width="40%" align="left" color:"pink" class="mobile-d-n">
                    <h1>Brow Bar</h1>
                    <!-- <p>Brow shaping and waxing<br>
                    Brows waxing<br>
                    Brow tinting<br>
                    (Microblading)coming soon

                    </p> -->
                <a href="services.php#service_three"><button class="default_button">More<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                </div>
                <div class="col-md-12 col-xs-6 image-s1 padding-none">
                    <img src="img/homeservices/Brow service front.jpg" style="object-position: 0%;">
                    <div class="overlay_image_g">
                        <div class="text">
                           <button class="default_button"  data-toggle="modal" data-target="#myModal">Book Now <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="twentygrid col-xs-12 padding-none first-panel-glam">
                <div class="col-md-12 col-xs-6 image-s1 padding-none">
                    <img src="img/homeservices/waxing service front.jpg">
                    <div class="overlay_image_g">
                        <div class="text">
                           <button class="default_button"  data-toggle="modal" data-target="#myModal">Book Now <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-6 text-s1">
                <hr  width="40%" align="left" color:"pink" class="mobile-d-n">
                    <h1>Waxing</h1>
                    <!-- <p>Lip<br>
                    Chin<br>
                    Cheeks<br>
                    Full Face
                    </p> -->
                <a href="services.php#service_two"><button class="default_button">More<i class="fa fa-angle-right" aria-hidden="true"></i>
                </button></a>
                </div>
            </div>
            
        </div>
    </div>
</section>


    <!-- About Section -->
<!--     <section id="about" class="about-section container-fluid about-section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>ELYSA</h1>
                    <h4 style="text-align: center;">Understanding every woman's style and preferences is the key to achieve the look you love.</h4>
                    <div class="col-md-12">
                    <p>
                    CT &amp; NY licensed Skincare Specialist, Eyebrow Contouring and makeup artist based in Connecticut 
                    Elysa&#39;s passionate journey with makeup has begun in her early teen&#39;s age, thanks to her older sisters
                    who routinely asked her to do their hair and create unique looks with makeup ever since Elysa has
                    developed a passion for creativity and the satisfaction from helping people look at their best. 
                    Throughout her career just to name a few she has enjoyed working for L.A Productions and
                    entertainment, film director Wayne Holmes, numerous photographers, and Beauty at Your Door,
                    providing on-location makeup services for brides and she has as well donated her services to local
                    events for charities as a way to give back to the community.Her early teen experience planted the seeds for her to pursue a career in makeup when she moved to
                    New York City back in 2001. Later, drawing inspiration from &quot;ABOUTFACE&quot; Scott Barnes book (celebrity
                    makeup artist) which talks about the secret of great make up is to have healthy skin; Elysa became a
                    skincare specialist.
                    Having a great canvas to work on it&#39;s the core to great make up which consequently asserted the value
                    of offering facial treatments for every skin type and condition. Therefore, GLAMBYELYSA offers a bar equipped with the most advanced facial treatments which allows 
                    us to help our clients&#39; skin to look young and healthy every day-- not just on their best days.
                    Today, at GLAMBYELYSA our utmost joy is to observe your satisfaction with the variety of services we
                    offer especially creating looks for brides on the most special day of their lives with our premier bridal
                    services, event and commercial makeup artistry. 
                    We believe the key success factor for a makeup artist is to understand the woman&#39;s style and
                    personality in order to creating a look that truly reflects them while enhancing their best features. 
                    In addition to makeup and skincare one of Elysa&#39;s specialties is eyebrow shaping and contouring which
                    dramatically accentuates the features of the face in the most flattering way.</p>
                    </div>
                    <div class="col-md-12">
                    <a href="#contact"><button class="default_button">Contact</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Portfolio section
================================================== -->
<div id="galery-id"></div>
<section id="portfolio" class="portfolio-section-home">
   <div class="container-fluid">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section"> 
                        <!-- iso box section -->
                        <div class="clearfix"></div>
                        <div class="iso-box-section">
                           <div class="iso-box-wrapper">

                                <div class="my-gallery row">

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/1.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/1.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/2.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/2.png" itemprop="thumbnail" alt="Image description" class="small_image_gall"/>
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/3.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/3.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/4.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/4.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/5.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/5.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/6.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/6.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/7.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/7.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/8.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/8.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/9.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/9.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/10.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/10.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/11.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/11.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/12.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/12.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/13.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/13.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/14.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/14.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/15.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/15.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/16.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/16.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/17.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/17.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>

                                    <figure class="iso-box graphic branding col-md-2 col-xs-6">
                                        <a href="img/galery/18.png" itemprop="contentUrl" data-size="2978x2086">
                                            <img src="img/galery/18.png" itemprop="thumbnail" alt="Image description" class="small_image_gall" />
                                        </a>
                                    <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->

                                    </figure>
                                    


                                </div>
                                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                    <!-- Background of PhotoSwipe. 
                                     It's a separate element, as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>

                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">

                                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>

                                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                        <div class="pswp__ui pswp__ui--hidden">

                                            <div class="pswp__top-bar">

                                                <!--  Controls are self-explanatory. Order can be changed. -->

                                                <div class="pswp__counter"></div>

                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"><i title="Close (Esc)" class="fa fa-times pswp__button--close" aria-hidden="true"></i></button>

                                                <button class="pswp__button pswp__button--share" title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></button>

                                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>

                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"><i class="fa fa-search-plus" aria-hidden="true"></i></button>

                                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                        <div class="pswp__preloader__cut">
                                                            <div class="pswp__preloader__donut"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div>
                                            </div>

                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                            </button>

                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </button>

                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>                              
                            </div>
                        </div>
               </div>
         </div>

      </div>
   </div>
</section>

<!-- Testimonials -->
      <div id="demo" class="testimonial_section">
        <div class="container">
          <div class="row">
            <div class="col-md-1 mobile-d-n customNavigation">
                 <a class="btn prev prev-btn1"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
            <div class="span12 col-md-10">                
                <div id="owl-demoa" class="owl-carousel desktop_testimonial_slider">
                    
                    <div class="item testimonial_panel">               
                        <img src="img/logo-elisa.png">
                        <div class="row">
                            <div class="#">
                                <h3>Elysa</h3>
                                <!-- <span>GENERAL MANAGER</span> -->
                                <p>“Beauty about enhancing what you have. Let Yourself shine through”</p>
                            </div>
                        </div>  
                    </div>
                   
                   <div class="item testimonial_panel">               
                        <img src="img/logo-elisa.png">
                        <div class="row">
                            <div class="#">
                                <h3>Elysa</h3>
                                <p>”Happy girls are the prettiest” </p>
                            </div>
                        </div>  
                    </div>

                    <div class="item testimonial_panel">               
                        <img src="img/logo-elisa.png">
                        <div class="row">
                            <div class="#">
                                <h3>Elysa</h3>
                                <p>"Beauty is being the best possible version of yourself inside and out”</p>
                            </div>
                        </div>  
                    </div>
                </div>  
            </div>
            <div class="col-md-1 mobile-d-n customNavigation">
                <a class="btn prev prev-btn1"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
    </div>

<div class="clearfix"></div>
    <!-- Slide Images Carocel -->
<!--     <div class="container-fluid bottom-slider_images">
    <div class="container">
    <h3>Read Our</h3>
    <h1>BLOG</h1>
        <div id="owl-demo">

            <div class="item">
                <div class="">
                    <img src="img/bottom-slider1.jpg" alt="test" class="img-responsive">

                    <div class="overlayText">
                    <p>JANUARY 12, 2016</p>
                      <h1>THIS BLOG <br>TITLE IS AWESOME</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <button class="default_button">Read More...</button>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="">
                    <img src="img/bottom-slider1.jpg" alt="test" class="img-responsive">

                    <div class="overlayText">
                    <p>JANUARY 12, 2016</p>
                      <h1>THIS BLOG <br>TITLE IS AWESOME</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <button class="default_button">Read More...</button>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="">
                    <img src="img/bottom-slider1.jpg" alt="test" class="img-responsive">

                    <div class="overlayText">
                    <p>JANUARY 12, 2016</p>
                      <h1>THIS BLOG <br>TITLE IS AWESOME</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <button class="default_button">Read More...</button>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="">
                    <img src="img/bottom-slider1.jpg" alt="test" class="img-responsive">

                    <div class="overlayText">
                    <p>JANUARY 12, 2016</p>
                      <h1>THIS BLOG <br>TITLE IS AWESOME</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <button class="default_button">Read More...</button>
                    </div>

                </div>
            </div>

            <div class="item">
                <div class="">
                    <img src="img/bottom-slider1.jpg" alt="test" class="img-responsive">

                    <div class="overlayText">
                    <p>JANUARY 12, 2016</p>
                      <h1>THIS BLOG <br>TITLE IS AWESOME</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <button class="default_button">Read More...</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div> -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
            <div class="container footer-name-social">
                <div class="col-md-4 contact-section-mobile">
                    <p>Get in Touch With</p>
                    <h1>ELYSA</h1>
                    <a href="https://web.facebook.com/glambyelisa?_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <a href="https://www.thumbtack.com/-Dallas-TX/service/2630717"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                    <p><a href="#">info@glambyelysa.com</a>
                    </p>
                </div>
                <div class="col-md-8 footer-email-forms">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="text" name="name" placeholder="Your Email">
                        <input type="text" name="name" placeholder="Your Address">
                    </div>
                    <div class="col-md-6">
                        <textarea type="text" name="text" placeholder="Your Message" rows="8"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="button-big default_button">Send <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
    </section>

    <footer>
        <div class="container-fluid footer-bootom col-md-12">
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

    <?php include 'modal_book_now.php';?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>

    <!-- Bottom slider -->
    <script src="js/owl.carousel.js"></script>

    <script type="text/javascript" src="js/preloader.js"></script>

    <!-- Core JS file -->
    <script src="js/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="js/photoswipe-ui-default.min.js"></script>

    <!-- Galery Script -->
    <script type="text/javascript" src="js/galery-script.js"></script>

    <script type="text/javascript">
        $('.nav a').on('click', function() {
            $('.btn-navbar').click(); //bootstrap 2.x
            $('.navbar-toggle').click() //bootstrap 3.x by Richard
        });
    </script>


    <!-- Bottom Slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 5000,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });

         $(document).ready(function() {
            $("#owl-demoa").owlCarousel({
                autoPlay: 9000,
                items: 1,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>

     <script>
          $('.carousel').carousel({
           interval: 10000
          });
         </script>   

</body>

</html>
