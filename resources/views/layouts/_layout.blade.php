
<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="web/libraries/font-awesome/css/font-awesome.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="web/libraries/jquery-bxslider/jquery.bxslider.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="web/libraries/flexslider/flexslider.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="web/css/realocation.css" media="screen, projection" id="css-main">
    <link rel="shortcut icon" href="/favicon.png"/>

    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">

    <title>
        Weather Zone | Real Time Weather Forecast
    </title>
</head>

<body>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="header-inner">
                <div class="header-bar">
                    <div class="container">
                        <div class="header-infobox">
                        </div><!-- /.header-infobox-->

                        <div class="header-infobox">
                        </div><!-- /.header-infobox-->

                        <ul class="header-bar-nav nav nav-register">
                        </ul>            </div><!-- /.container -->
                </div><!-- /.header-bar -->

                <div class="header-top">
                    <div class="container">
                        <div class="header-identity">
                            <a href="index.html" class="header-identity-target">
                                <span class="header-icon"><i class="fa fa-home"></i></span>
                                <span class="header-title">Weather Zone</span><!-- /.header-title -->
                                <span class="header-slogan">Real Time Weather <br> Forecast</span><!-- /.header-slogan -->
                            </a><!-- /.header-identity-target-->
                        </div><!-- /.header-identity -->

                        <div class="header-actions pull-right">
                        </div><!-- /.header-actions -->

                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- /.container -->
                </div><!-- .header-top -->

            </div><!-- /.header-inner -->
        </div><!-- /#header -->    </div><!-- /#header-wrapper -->
    <div id="main-wrapper">
        <div id="main">
            <div id="main-inner">

                <!-- MAP -->
                <div class="block-content no-padding">
                    <div class="block-content-inner">
                        <div class="map-wrapper">
                            <div id="map" data-style="1"></div><!-- /#map -->

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 map-navigation-positioning">

                                    </div><!-- /.col-sm-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->

                        </div><!-- /.map-wrapper -->
                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
            </div><!-- /#main-inner -->
        </div><!-- /#main -->
    </div><!-- /#main-wrapper -->

    <div id="footer-wrapper">
        <div id="footer">
            <div id="footer-inner">
                <div class="footer-top">
                    <div class="container">

                        <hr>

                        <div class="row">
                            <div class="col-sm-9">
                                <ul class="footer-nav nav nav-pills">
                                </ul><!-- /.footer-nav -->
                            </div>

                            <div class="col-sm-3">
                                <form method="post" action="?" class="form-horizontal form-search">
                                    <div class="form-group has-feedback no-margin">
                                        <input type="text" class="form-control" placeholder="Search">

                                        <span class="form-control-feedback">
                                            <i class="fa fa-search"></i>
                                        </span><!-- /.form-control-feedback -->
                                    </div><!-- /.form-group -->
                                </form>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer-top -->
                <div class="footer-bottom">
                    <div class="container">
                        <p class="center no-margin">
                            &copy; 2018  Weather Zone, All Right reserved
                        </p>

                        <div class="center">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul><!-- /.social -->
                        </div><!-- /.center -->
                    </div><!-- /.container -->
                </div><!-- /.footer-bottom -->
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->
    </div><!-- /#footer-wrapper -->
</div><!-- /#wrapper -->

<script type="text/javascript" src="web/js/jquery.js"></script>
<script type="text/javascript" src="web/libraries/isotope/jquery.isotope.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script type="text/javascript" src="web/js/gmap3.infobox.js"></script>
<script type="text/javascript" src="web/js/gmap3.clusterer.js"></script>
<script type="text/javascript" src="web/js/map.js"></script>

<script type="text/javascript" src="web/libraries/bootstrap-sass/vendor/web/javascripts/bootstrap/transition.js"></script>
<script type="text/javascript" src="web/libraries/bootstrap-sass/vendor/web/javascripts/bootstrap/collapse.js"></script>
<script type="text/javascript" src="web/libraries/jquery-bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="web/libraries/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="web/js/jquery.chained.min.js"></script>
<script type="text/javascript" src="web/js/realocation.js"></script>

</body>
</html>