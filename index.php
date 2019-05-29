<?php
include_once 'db.inc.php';
include "include/language/config.php";
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

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta content="text/html; charset=utf-8" https-equiv="Content-Type"/>
    <title>china contract machining</title>
    <meta content="HTML5, CSS3, responsive, Template" name="keywords"/>
    <meta content="Cloud Software" name="author"/>
    <meta content="Metal- Responsive HTML5/CSS3 Template" name="description"/>
    <META name="robots" content="index, follow">
    <META name="keywords" content="CNC Machining, Milling, Turning, China Precision CNC Machining Factory, Machine Shop, CNC machined parts, Outsource, Machining, CNC, Outsource Machining, China Machining Parts Manufacturer and Supplier, precision machining, custom precision Metal Parts, China Precision Cnc Machining, CNC Turning, CNC Milling, Fastener, Pipe Fitting, Gear">
    <META name="description" content="CNC machining China Factory offers custom precision CNC machining, CNC milling &amp; CNC turning services. Come to us for precision CNC machined, CNC milled &amp;CNC turned parts.">
    <META name="GENERATOR" content="MSHTML 9.00.8112.16448">
    <META name="DATA" content="Dongguan Precision Machinery">
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
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet"/>
    <!-- //Fonts -->


    <!-- Normalize CSS -->
    <link href="css/normalize.css" rel="stylesheet"/>

    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" media="screen" rel="stylesheet">
    <link href="css/owl.theme.css" media="screen" rel="stylesheet">

    <!-- =========================================
    CSS
    ========================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/off-canvas.css" rel="stylesheet"/>
    <link href="css/style1.css" rel="stylesheet"/>


    <!-- =========================================
    Head Libs
    ========================================== -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="img/templatesImage/taplogo1.PNG">
    <style>
        .lang{
            background: #333333;
            color: #F9C535;
            border-radius: 15%;
            padding: 4px;
        }
         .im{
             filter: brightness(25%);
             width: 1170px;
         }
    </style>
</head>


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
                                                <a href="index.php" title="Dongguan Precision Machinery Co">
                                                    <img alt="Dongguan Precision Machinery Co"
                                                         src="img/templatesImage/logo1.png">

                                                </a>
                                            <div>
                                                <a class="lang" href="index.php?lang=en" >English</a> | <a class="lang" href="index.php?lang=ch" >中文</a>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 visible-lg visible-md">
                                        <div class="location">

                                            <p>
                                                <span style="font-weight:bold"><?php echo $lang['Hongkong Office:']; ?></span> <?php echo $lang['Precision Machinery Technology (HK) Co., Limited.'] ?>
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
                                            <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
                                            <li><a href="pages/mainpages/about.php"><?php echo $lang['About Us'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/mainpages/Equipment.php"><?php echo $lang['Equipments'] ?></a>
                                            </li>
                                            <li class="dropdown"><a
                                                        href="pages/mainpages/service.php"><?php echo $lang['Services'] ?></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="pages/imagespages/Aluminum.php"><?php echo $lang['Aluminum Parts'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/Automobile.php"><?php echo $lang['Automobile Parts'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/hydraulic.php"><?php echo $lang['Hydraulic Pump Parts'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/machinery.php"><?php echo $lang['Machinery Equipment'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/powertool.php"><?php echo $lang['Power Tool Parts'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/stainless.php"><?php echo $lang['Stainless Parts'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/testequipment.php"><?php echo $lang['Test Equipment'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="pages/imagespages/valvebody.php"><?php echo $lang['Valve Body'] ?></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="pages/mainpages/quality.php"><?php echo $lang['Quality Control'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/mainpages/contact.php"><?php echo $lang['Contact Us'] ?></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </header>
                    </section>
                    <!--End .header -->
                </div>
                <div class="row">
                    <section class="banner-section">
                        <div class="carousel slide" data-ride="carousel" id="mainslider">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#mainslider"></li>
                                <li data-slide-to="1" data-target="#mainslider"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img alt="Dongguan Precision Machinery Co" src="img/templatesImage/slide1.jpg">
                                    <div class="banner-caption pull-right">
                                        <h1><?php echo $lang['We’re Professional Competitive &amp; Competent'] ?>
                                        </h1>
                                        <p><?php echo $lang['We are a professional China machining parts manufacturer specializing in design, manufacture, assembly, sale and service.'] ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="Dongguan Precision Machinery Co" class="im" src="img/templatesImage/slide-2.png" >
                                    <div class="banner-caption pull-right">
                                        <h1><?php echo $lang['Dongguan Precision Manufacture'] ?>
                                        </h1>
                                        <p><?php echo $lang['Our clients are extended from China mainland and Japan to Europe, America, Russia and other developed countries.'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- .banner-section-->
                </div>

                <!-- section row -->


                <!-- section row -->

                <style>
                    #textedit:hover {
                        background: #F9C535;
                        color: black;
                    }

                    #textedit {
                        text-align: justify;
                        text-justify: inter-word;
                    }
                </style>

                <div class="row">
                    <section class="section-welcome" style="border: 1px; border-style: none; border-radius: 50px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="welcome" id="textedit">

                                    <div class="welcome-details">
                                        <h3><?php echo $lang['Welcome to Dongguan Precision Machinery Co., Limited.'] ?></h3>
                                        <p><?php echo $lang['We, Dongguan Precision Manufacture, Ltd.,'] ?><?php echo $lang['expertising in CNC Precision Machining, look forward to outsourcing your machining project to China and saving your machining cost.'] ?>
                                            <?php echo $lang['We machine repeat production runs of consistently high-quality parts delivered whenever you need them: daily, weekly, monthly, and quarterly.'] ?>
                                            <?php echo $lang['From a few pieces to volume runs, you get the same consistent quality from the first part to the last.'] ?>
                                            <?php echo $lang['We are a professional China machining parts manufacturer specializing in design, manufacture, assembly, sale and service. Our clients are extended from China mainland and Japan to Europe, America, Russia and other developed countries.'] ?>
                                            <?php echo $lang['As an ISO9001:2008 certified and customer-oriented precision CNC machining factory, we deliver good parts at a fair price. On time. Period.'] ?>
                                            <?php echo $lang['We are also a certified supplier to Fortune 500 and Nasdaq listed corporations, specializing in design, manufacture, assembly, sale and service in a whole.'] ?>
                                            <?php echo $lang['The machining services include CNC machining, CNC turning, CNC milling, precision casting, fastener, pipe fitting, gear and etc. We do all types of surface treatments.'] ?></p>
                                        <a href="pages/mainpages/about.php"><?php echo $lang['read more'] ?></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6">

                            </div>
                        </div>
                    </section>
                    <!-- .section-welcome -->
                </div>

                <div class="row">
                    <section class="footer-section">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="about">
                                        <h4><?php echo $lang['About Us'] ?></h4>
                                        <img alt="Dongguan Precision Machinery Co" src="img/templatesImage/welcome.jpg">
                                        <p><?php echo $lang['We, Dongguan Precision Manufacture, Ltd., expertising in CNC Precision Machining, look forward to outsourcing your machining project to China and saving your machining cost.'] ?></p>

                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="recent-news list-group">
                                        <h4><?php echo $lang['Latest News'] ?></h4>
                                        <ul><?php
                                            $sql = 'SELECT * FROM `postnews` ORDER BY  id DESC LIMIT 5';
                                            $result = mysqli_query($connect, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<li>
                                                        <a href="pages/mainpages/news.php?id=' . $row['id'] . '" title="">' . $row["title"] . '</a>
                                                      </li>';
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="services">
                                        <h4><?php echo $lang['Services'] ?></h4>
                                        <ul>
                                            <li>
                                                <a href="pages/imagespages/Aluminum.php"><?php echo $lang['Aluminum Parts'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/Automobile.php"><?php echo $lang['Automobile Parts'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/hydraulic.php"><?php echo $lang['Hydraulic Pump Parts'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/machinery.php"><?php echo $lang['Machinery Equipment'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/powertool.php"><?php echo $lang['Power Tool Parts'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/stainless.php"><?php echo $lang['Stainless Parts'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/testequipment.php"><?php echo $lang['Test Equipment'] ?></a>
                                            </li>
                                            <li>
                                                <a href="pages/imagespages/valvebody.php"><?php echo $lang['Valve Body'] ?></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="get-in-Touch">
                                        <h4><?php echo $lang['Get in Touch'] ?></h4>
                                        <address>

                                            <H4><?php echo $lang['Hongkong Office:'] ?></H4>
                                            <?php echo $lang['Precision Machinery Technology (HK) Co., Limited.'] ?>
                                            <div><H4><?php echo $lang['US Sales:'] ?></H4> 5008 Sweetser Ave,
                                                Evansville, IN 47715, USA
                                            </div>
                                            </p>
                                        </address>
                                        <address>
                                            <i class="fa fa-phone"></i>
                                            <DIV><span style="font-weight: bold;">+1 (812) 604 9778 (<?php echo $lang['US Sales:'] ?>)<br/>
												+86 0769-22992385 (<?php echo $lang['China Factory'] ?>)</span></DIV>
                                        </address>
                                        <address>
                                            <i class="fa fa-envelope-o"></i>
                                            <DIV><A
                                                        href="mailto:info@dggprecision.com">info@dggprecision.com</a>
                                            </div>
                                            <br>

                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End .footer-top-->
                        <footer class="footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="copyright">
                                        <p>
                                            &copy; China Contract Machining 2019. All Rights Reserved.

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </footer>
                    </section>
                </div>
                <!-- .footer-section -->

            </div>
            <!-- .container-->
        </div>
        <!--content-wrapper-->
    </div>
    <!-- offcanvas-pusher -->

    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button aria-hidden="true" class="close" data-toggle="offcanvas" id="off-canvas-close-btn" type="button">
            &times;
        </button>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
                    <li><a href="pages/mainpages/about.php"><?php echo $lang['About Us'] ?></a></li>
                    <li><a href="pages/mainpages/Equipment.php"><?php echo $lang['Equipments'] ?></a></li>
                    <li><a href="pages/mainpages/service.php"><?php echo $lang['Services'] ?></a></li>
                    <li><a href="pages/mainpages/quality.php"><?php echo $lang['Quality Control'] ?></a></li>
                    <li><a href="pages/mainpages/contact.php"><?php echo $lang['Contact Us'] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- offcanvas-menu end -->
</div>
<!-- #wrapper -->

<!-- =========================================
JAVASCRIPT
========================================== -->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/hippo-off-canvas.js"></script>
<script src="js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

</body>
</html>