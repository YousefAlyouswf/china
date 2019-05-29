<?php
include_once '../../db.inc.php';
include "routeVaribale.php";
include "../../include/language/config.php";
?>
<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta content="text/html; charset=utf-8" https-equiv="Content-Type"/>
    <title>china contract machining</title>
    <meta content="HTML5, CSS3, responsive, Template" name="keywords"/>
    <meta content="Cloud Software" name="author"/>
    <meta content="Metal- Responsive HTML5/CSS3 Template" name="description"/>

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta content="width=device-width, initial-scale=1.0 user-scalable=no" name="viewport"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet'
          type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="../../fonts/flaticon/flaticon.css" rel="stylesheet"/>
    <!-- //Fonts -->


    <!-- Normalize CSS -->
    <link href="../../css/normalize.css" rel="stylesheet"/>

    <!-- Owl Carousel CSS -->
    <link href="../../css/owl.carousel.css" media="screen" rel="stylesheet">
    <link href="../../css/owl.theme.css" media="screen" rel="stylesheet">

    <!-- =========================================
    CSS
    ========================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../css/off-canvas.css" rel="stylesheet"/>
    <link href="../../css/style1.css" rel="stylesheet"/>


    <!-- =========================================
    Head Libs
    ========================================== -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../../js/respond.min.js"></script>
    <![endif]-->
    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="../../img/templatesImage/taplogo1.PNG">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<!-- /head -->

<style>
    .lang{
        background: #333333;
        color: #F9C535;
        border-radius: 15%;
        padding: 4px;
    }
</style>
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

                                            <a href="../../index.php">
                                                <img alt="Dongguan Precision Machinery Co" src="<?php echo $imagesSrc; ?>logo1.png">
                                            </a>

                                            <div>
                                                <?php if(isset($nolang)){
                                                    echo '<a href="/?lang=en" class="lang">English</a> | <a class="lang" href="/?lang=ch">中文</a>';
                                                } else{
                                                    echo '<a href="?lang=en" class="lang">English</a> | <a class="lang" href="?lang=ch">中文</a>';
                                                }?>


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
                                        <div class="offcanvas" id="offcanvas-trigger-effects">
                                            <button class="navbar-toggle visible-xs" data-effect="offcanvas-effect"
                                                    data-placement="left"
                                                    data-target=".navbar-collapse" data-toggle="offcanvas"
                                                    type="button">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <nav class="collapse navbar-collapse navbar main-nav" role="navigation">
                                        <ul class="nav navbar-nav navbar-left">
                                            <li><a href="../../index.php"><?php echo $lang['home'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>about.php"><?php echo $lang['About Us'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>Equipment.php"><?php echo $lang['Equipments'] ?></a></li>
                                            <li class="dropdown"><a href="<?php echo $mainpage;?>service.php"><?php echo $lang['Services'] ?></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo $imagepage ?>Aluminum.php"><?php echo $lang['Aluminum Parts'] ?>        </a></li>
                                                    <li><a href="<?php echo $imagepage ?>Automobile.php"><?php echo $lang['Automobile Parts'] ?>    </a></li>
                                                    <li><a href="<?php echo $imagepage ?>hydraulic.php"><?php echo $lang['Hydraulic Pump Parts'] ?> </a></li>
                                                    <li><a href="<?php echo $imagepage ?>machinery.php"> <?php echo $lang['Machinery Equipment'] ?> </a></li>
                                                    <li><a href="<?php echo $imagepage ?>powertool.php"><?php echo $lang['Power Tool Parts'] ?>     </a></li>
                                                    <li><a href="<?php echo $imagepage ?>stainless.php"> <?php echo $lang['Stainless Parts'] ?>     </a></li>
                                                    <li><a href="<?php echo $imagepage ?>testequipment.php"> <?php echo $lang['Test Equipment'] ?>  </a></li>
                                                    <li><a href="<?php echo $imagepage ?>valvebody.php"> <?php echo $lang['Valve Body'] ?>          </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo $mainpage;?>quality.php"> <?php echo $lang['Quality Control'] ?></a></li>
                                            <li><a href="<?php echo $mainpage;?>contact.php"> <?php echo $lang['Contact Us'] ?></a></li>
                                        </ul>
                                        <!-- /navbar-nav -->


                                    </nav>
                                    <!-- navbar-collapse -->
                                    <!-- /navbar-collapse -->
                                </div>
                                <!-- /navbar -->
                            </div>
                            <!-- .main-nav-bar -->
