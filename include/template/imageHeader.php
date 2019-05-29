<?php
include_once '../../db.inc.php';
include "routeVaribale.php";
include "../../include/language/config.php";

?>    <!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->

    <meta https-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>china contract machining</title>
    <meta name="keywords" content="HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Cloud Software"/>
    <meta name="description" content="Metal- Responsive HTML5/CSS3 Template"/>
    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- //Fonts -->


    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../../css/normalize.css"/>

    <!-- Owl Carousel CSS -->
    <link href="../../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../css/off-canvas.css"/>
    <link rel="stylesheet" href="../../css/style1.css"/>


    <!-- =========================================
    Head Libs
    ========================================== -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../../js/respond.min.js"></script>
    <![endif]-->
    <meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Responsive Image Gallery with jQuery"/>
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3"/>
    <meta name="author" content="Codrops"/>
    <link rel="shortcut icon" href="../../img/templatesImage/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../css/style4.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/elastislide.css"/>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'/>
    <noscript>
        <style>
            .es-carousel ul {
                display: block;
            }
        </style>

    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>

    </script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $imagesSrc; ?>taplogo1.PNG">
    <style>
        .lang{
            background: #333333;
            color: #F9C535;
            border-radius: 15%;
            padding: 4px;
        }
    </style>
</head>
<!-- /head -->


<body>
<div class="wrapper" id="wrapper">
    <div class="offcanvas-pusher">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <section class="header">
                        <header class="header-wrapper">
                            <div class="header-top">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-3">
                                        <div class="logo">
                                            <a title="DBM.inc" href="../../index.php">
                                                <img src="<?php echo $imagesSrc; ?>logo1.png" alt="Steellex">
                                            </a>
                                            <div>
                                                <a href="?lang=en" class="lang">English</a> | <a class="lang" href="?lang=ch">中文</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 visible-lg visible-md">
                                        <div class="location">

                                            <p>
                                                <span style="font-weight:bold"><?php echo $lang['Hongkong Office:'] ?></span> <?php echo $lang['Precision Machinery Technology (HK) Co., Limited.'] ?>
                                            </p>
                                            <p><span style="font-weight:bold"><?php echo $lang['US Sales:'] ?></span>
                                                5008 Sweetser Ave,
                                                Evansville, IN 47715, USA.</p>

                                        </div>

                                    </div>
                                    <div class="col-md-2 col-lg-2 visible-lg visible-md">
                                        <div class="phone">
                                            <p><?php echo $lang['Call us!'] ?></p>
                                            <strong><?php echo $lang['number'] ?></strong>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="main-nav-bar">
                                <div class="navbar">
                                    <div class="navbar-header navbar-right pull-left">
                                        <!-- offcanvas-trigger-effects -->
                                        <div id="offcanvas-trigger-effects" class="offcanvas">
                                            <button type="button" class="navbar-toggle visible-xs"
                                                    data-toggle="offcanvas"
                                                    data-target=".navbar-collapse" data-placement="left"
                                                    data-effect="offcanvas-effect">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                        <!-- offcanvas-trigger-effects -->
                                    </div>

                                    <!-- navbar-collapse -->
                                    <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                                        <ul class="nav navbar-nav navbar-left">
                                            <li><a href="../../index.php"><?php echo $lang['home'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>about.php"><?php echo $lang['About Us'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>Equipment.php"><?php echo $lang['Equipments'] ?></a></li>
                                            <li class="dropdown"><a href="<?php echo $mainpage;?>service.php"><?php echo $lang['Services'] ?></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="Aluminum.php"><?php echo $lang['Aluminum Parts'] ?></a></li>
                                                    <li><a href="Automobile.php"><?php echo $lang['Automobile Parts'] ?></a></li>
                                                    <li><a href="hydraulic.php"><?php echo $lang['Hydraulic Pump Parts'] ?></a></li>
                                                    <li><a href="machinery.php"> <?php echo $lang['Machinery Equipment'] ?>
                                                    <li><a href="powertool.php"><?php echo $lang['Power Tool Parts'] ?></a></li>
                                                    <li><a href="stainless.php"><?php echo $lang['Stainless Parts'] ?></a></li>
                                                    <li><a href="testequipment.php"><?php echo $lang['Test Equipment'] ?></a></li>
                                                    <li><a href="valvebody.php"><?php echo $lang['Valve Body'] ?></a></li></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo $mainpage;?>quality.php"><?php echo $lang['Quality Control'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>contact.php"><?php echo $lang['Contact Us'] ?></a></li>
                                        </ul>

                                        <!-- /navbar-nav -->


                                    </nav>
                                    <!-- /navbar-collapse -->
                                </div>
                                <!-- /navbar -->
                            </div>
                            <!-- .main-nav-bar -->
