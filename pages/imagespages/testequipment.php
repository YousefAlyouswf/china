<?php
$test='';
include "../../include/template/imageHeader.php" ?>
    <div class="breadcrumb-area">
        <div class="col-md-6 col-xs-12 col-sm-6">
            <ul class="breadcrumb">
                <li><a href="../../index.php"><?php echo $lang['home']?></a></li>
                <li><a href="../mainpages/service.php"><?php echo $lang['Services']?></a></li>
                <li class="active"><?php echo $lang['Test Equipment']?></li>
            </ul>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6">

        </div>
    </div>
    <!-- .breadcrumb-area -->
    </header>
    </section>
    <!--End .header -->
    </div>
    <div class="row">
        <div class="container">
            <div class="content">
                <div id="rg-gallery" class="rg-gallery">
                    <h1 style="text-align: center"><?php echo $lang['Test Equipment']?> </h1>

                    <div class="rg-thumbs">
                        <div class="es-carousel-wrapper">
                            <div class="es-nav">
                                <span class="es-nav-prev">Previous</span>
                                <span class="es-nav-next">Next</span>
                            </div>
                            <div class="es-carousel">
                                <ul>
                                    <?php

                                    $sql = "SELECT * FROM test";
                                    $result = mysqli_query($connect, $sql);

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<li>
                                                        <a  href="../../img/test/' . $row["path"] . '"><img height="65" src="../../img/test/' . $row['path'] . '" data-large= "../../img/test/' . $row['path'] . '" ></a>
        
                                                      </li>';
                                    }


                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
<?php include "../../include/template/imageFooter.php" ?>