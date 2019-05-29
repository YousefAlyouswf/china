<?php
include_once '../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {


    $result1 = mysqli_query($connect, "SELECT * FROM newmsg");
    $num_rows1 = mysqli_num_rows($result1);
    ?>

    <html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin Dashboard</title>


        <!-- BOOTSTRAP STYLES-->
        <link href="../css/bootstrap1.css" rel="stylesheet"/>
        <!-- FONTAWESOME STYLES-->
        <link href="../css/font-awesome.css" rel="stylesheet"/>
        <!-- MORRIS CHART STYLES-->
        <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
        <link href="../css/custom.css" rel="stylesheet"/>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="../css/buttonimage2.css">
        <link rel="stylesheet" href="styles/styles1.css">   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    </head>
    <body>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../login.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="../img/templatesImage/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="controlpanel.php"><i></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i></i> Users add / delete</a>
                    </li>
                    <li>
                        <a class="active-menu" href="uploadimage.php"><i></i> Images</a>
                    </li>
                    <li>
                        <a href="messages.php"><i></i>
                            Messages <?php echo "<span style='font-size: 15px; font-weight: bold;'> &nbsp &nbsp &nbsp &nbsp" . $num_rows1 . "</span>"; ?>
                        </a>
                    </li>
                    <li>
                        <a href="news.php"><i></i> News</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->


        <div id="page-wrapper">
            <div id='cssmenu'>
                <ul>
                    <li class='active'><a href='uploadimage.php'>Home</a></li>
                    <li ><a href='imagesection/alum.php'>Aluminum</a></li>
                    <li><a href='imagesection/automobile.php'>Automobile</a></li>
                    <li><a href='imagesection/hydraulic.php'>Hydraulic</a></li>
                    <li><a href='imagesection/machinery.php'>Machinery</a></li>
                    <li><a href='imagesection/power.php'>Power Tool</a></li>
                    <li><a href='imagesection/stainless.php'>Stainless</a></li>
                    <li><a href='imagesection/test.php'>Test Equipment</a></li>
                    <li><a href='imagesection/valve.php'>Valve Body</a></li>
                </ul>
            </div>
            <div id="page-inner">
                <?php
                echo '<div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                        <h5>Welcome ' . $_SESSION['username'] . ' , Love to see you back. </h5>
                    </div>
                </div>';

                ?>

                <!-- /. ROW  -->
                <hr/>


<h1>Welcome to Image Center</h1>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

                <script src="../js/buttonimage.js"></script>


            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap1.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>


    </body>
    </html>

    <?php
} else {
    echo '<h2 style="text-align:center; margin-top:50px;">You cannot access this page before you log in</h2>';
    header("refresh:2;url=../login.php");
}

