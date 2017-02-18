<!DOCTYPE html>
<!-- Drew - A Multipurpose Landing Page Template, designed by David Rozando (http://design.davidrozando.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- BASIC INFO -->
    <title>MacCil Marketing</title>
    <meta name="author" content="David Rozando">
    <meta name="keywords" content="">
    <meta name="description" content="MacCil Marketing">
    <!-- FAVICONS -->
    <link rel="icon" href="images/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicons/faviocon.ico">
    <!-- CSS
	================================= -->
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <!-- LIBRARIES CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- COLORS -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/pink.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/red.css"> -->
    <link id="color-css" rel="stylesheet" href="css/colors/blue.css">
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/yellow.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/green.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/turquoise.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/blue.css"> -->

</head>

<body class="enable-animations enable-preloader">
    <div id="document" class="document">
        <!-- HEADER
		================================= -->
        <header id="header" class="header-section section section-dark navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header navbar-left">
                    <!-- RESPONSIVE MENU BUTTON -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
                    <!-- HEADER LOGO -->
                    <a id="test" class="navbar-logo navbar-brand" href="index.php">
                        <img src="images/logos/logo.png" srcset="images/logos/header-logo@2x.png 2x" alt="Drew">
                    </a>
                </div>
                <nav id="navigation" class="navigation navbar-collapse collapse navbar-right">
                    <!-- NAVIGATION LINKS -->
                    <ul id="header-nav" class="nav navbar-nav">
                        <li><a href="index.php" class="hidden">Top</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li class="current"><a href="index.php#events">Events</a></li>
                        <!-- HEADER ACTION BUTTON -->
                        <li class="header-action-button"><a href="index.php#contact" class="btn btn-primary">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- HEADLINE
		================================= -->
        <section id="eventContainer">
            <script id="event-template" edata="<?php 
                    echo $_GET['event']
                ?>" type="text/x-handlebars-template">
            </script>
        </section>
        <div id="eventModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="//placehold.it/1000x600" id="eveModPic" class="img-responsive">
                        <br>
                        <p id="modText"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LIBRARIES JS
	================================= -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respimage.min.js"></script>
    <script src="js/jpreloader.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/jquery.nav.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/handlebars-v4.0.5.js"></script>
    <script src="js/compEvents.handlebar"></script>
    <!-- MAIN SCRIPT
	================================= -->
    <script src="js/event-template.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
