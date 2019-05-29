<?php
include_once '../../db.inc.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!-- BOOTSTRAP STYLES--> <link href="../../css/stylesdrag.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../../css/bootstrap1.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="../../js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../styles/styles1.css">
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
font-size: 16px;"> <a href="../../../login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../../img/templatesImage/find_user.png" class="user-image img-responsive"/>
                </li>
                <li>
                    <a  href="../controlpanel.php"><i ></i> Dashboard</a>
                </li>
                <li>
                    <a  href="../adduser.php"><i ></i> Users add / delete</a>
                </li>
                <li>
                    <a class="active-menu" href="../uploadimage.php"><i ></i> Images</a>
                </li>
                <li  >
                    <a   href="../messages.php"><i ></i> Messages <?php echo "<span style='font-size: 15px; font-weight: bold;'> &nbsp &nbsp &nbsp &nbsp".$num_rows1."</span>"; ?></a>
                </li>
                <li  >
                    <a   href="../news.php"><i ></i> News</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->

    <style type="text/css">
        #dropZone {
            border: 3px dashed #0A0A0A;
            padding: 50px;
            max-width: 500px;
            margin-top: 20px;
        }

        #files {
            border: 1px dotted #0A0A0A;
            padding: 20px;
            width: 200px;
            display: none;
        }

        #error {
            color: red;
        }
    </style>