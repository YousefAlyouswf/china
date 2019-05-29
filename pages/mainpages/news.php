<?php
$nolang="";
include "../../include/template/mainHeader.php"; ?>
    <div class="breadcrumb-area">
        <div class="col-md-6 col-xs-12 col-sm-6">
            <ul class="breadcrumb">
                <li><a href="../../index.php"><?php echo $lang['home']?></a></li>
                <li class="active"><?php echo $lang['news']?></li>
            </ul>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="header-social">

            </div>
        </div>
    </div>
    <!-- .breadcrumb-area -->
    </header>
    </section>
    <!--End .header -->
    </div>
    <div class="row">
        <div class="inner-content">
            <div class="company">
                <div>
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `postnews` where id='$id'";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result))  {
                        echo '
                                                <div style="text-align: center; font-weight: bold; font-size: 30px"><h1>' . $row["title"] . '</h1></div>
                                               <div ><pre><p style="font-size: 15px; font-family: Arial, sans-serif;  margin-top: 15px">' . $row["content"] . '</p></pre></div>
                                              ';}
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include "../../include/template/mainFooter.php"; ?>