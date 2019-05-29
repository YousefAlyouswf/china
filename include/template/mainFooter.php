<?php
include "routeVaribale.php";
?>
<div class="row">
    <section class="footer-section">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="about">
                        <h4><?php echo $lang['About Us'] ?></h4>
                        <img alt="" src="../../img/templatesImage/welcome.jpg">
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
                                                        <a href="news.php?id=' . $row['id'] . '" title="">' . $row["title"] . '</a>
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
                            <li><a href="<?php echo $imagepage ?>Aluminum.php"><?php echo $lang['Aluminum Parts'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>Automobile.php"><?php echo $lang['Automobile Parts'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>hydraulic.php"><?php echo $lang['Hydraulic Pump Parts'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>machinery.php"><?php echo $lang['Machinery Equipment'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>powertool.php"><?php echo $lang['Power Tool Parts'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>stainless.php"><?php echo $lang['Stainless Parts'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>testequipment.php"><?php echo $lang['Test Equipment'] ?></a></li>
                            <li><a href="<?php echo $imagepage ?>valvebody.php"><?php echo $lang['Valve Body'] ?></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="get-in-Touch">
                        <h4><?php echo $lang['Get in Touch'] ?></h4>
                        <address>

                            <H4><?php echo $lang['Hongkong Office:'] ?></H4>
                            <?php echo $lang['Precision Machinery Technology (HK) Co., Limited.'] ?>
                            <div><H4><?php echo $lang['US Sales:'] ?></H4> 5008 Sweetser Ave, Evansville, IN 47715, USA</div>
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
                <li><a href="../../index.php"><?php echo $lang['home'] ?></a></li>
                <li><a href="about.php"><?php echo $lang['About Us'] ?></a></li>
                <li><a href="Equipment.php"><?php echo $lang['Equipments'] ?></a></li>
                <li> <a href="service.php"><?php echo $lang['Services'] ?></a></li>
                <li><a href="quality.php"> <?php echo $lang['Quality Control'] ?></a></li>
                <li><a href="contact.php"> <?php echo $lang['Contact Us'] ?></a></li>
            </ul>
        </div>
    </div>
</div>
<!--content-wrapper-->
</div>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/hippo-off-canvas.js"></script>
<script src="../../js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


</body>
</html>