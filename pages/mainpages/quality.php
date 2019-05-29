<?php
include "../../include/template/mainHeader.php";
?>
    <div class="breadcrumb-area">
        <div class="col-md-6 col-xs-12 col-sm-6">
            <ul class="breadcrumb">
                <li><a href="../../index.php"><?php echo $lang['home']?></a></li>
                <li class="active"><?php echo $lang['Quality Control']?></li>
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
                <div class="company-description pull-left">
                    <h2><?php echo $lang['Quality Control']?></h2>
                    <h3><?php echo $lang['Quality Assurance/Control']?></h3>
                    <p><?php echo $lang['The Quality Assurance Room is temperature controlled to 68°F ±1°F.']?></p>
                    <p><br/>
                        <?php echo $lang['The room houses three coordinate measuring machines, including a TESA 3D coordinate measuring machine.']?></p>
                    <p><br/>
                        <?php echo $lang['We take quality seriously. Significant investments have been made to maintain quality and consistency throughout our production process.']?><br/>
                        <?php echo $lang['Because of our rigid quality standards, the dimensions and tolerances are guaranteed on every part we ship.']?>
                        <?php echo $lang['We even make individual inspection reports available on finish-machined parts to help minimize incoming inspection.']?>  <br/>
                    </p>
                </div>
                <div class="company-thumb pull-right">
                    <img alt="" src="<?php echo $imagesSrc ?>quality1.png">
                </div>
            </div>
        </div>
    </div>
<?php include "../../include/template/mainFooter.php"; ?>