<div class="row" style="margin-top: 50px">
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
                                                        <a href="../mainpages/news.php?id=' . $row['id'] . '" title="">' . $row["title"] . '</a>
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
<!-- .container-->
</div>
<!--content-wrapper-->
</div>
<!-- offcanvas-pusher -->


<!-- offcanvas-menu end -->
</div>
<!-- #wrapper -->
<div class="offcanvas-menu offcanvas-effect visible-xs">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">
        &times;
    </button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="../index.php">Home</a></li>
                <?php
                if(isset($alum)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="Aluminum.php">Aluminum Parts</a></li>';
                }else{
                    echo '<li><a href="Aluminum.php">Aluminum Parts</a></li>';
                }
                if(isset($auto)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="Automobile.php">Automobile Parts</a></li>';
                }else{
                    echo '<li><a href="Automobile.php">Automobile Parts</a></li>';
                }
                if(isset($hydro)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="hydraulic.php">Hydraulic Pump Parts</a></li>';
                }else{
                    echo '<li><a href="hydraulic.php">Hydraulic Pump Parts</a></li>';
                }
                if(isset($mach)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="machinery.php">Machinery Equipment</a></li>';
                }else{
                    echo '<li><a href="machinery.php">Machinery Equipment</a></li>';
                }
                if(isset($power)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="powertool.php">Power Tool Parts</a></li>';
                }else{
                    echo '<li><a href="powertool.php">Power Tool Parts</a></li>';
                }
                if(isset($stain)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="stainless.php">Stainless Parts</a></li>';
                }else{
                    echo '<li><a href="stainless.php">Stainless Parts</a></li>';
                }
                if(isset($test)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="testequipment.php">Test Equipment</a></li>';
                }else{
                    echo '<li><a href="testequipment.php">Test Equipment</a></li>';
                }
                if(isset($valve)){
                    echo '<li><a style="color: yellow; font-weight: bold" href="valvebody.php">Valve Body</a></li>';
                }else{
                    echo '<li><a href="valvebody.php">Valve Body</a></li>';
                }

                ?>
                <li><a href="../mainpages/contact.php">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- =========================================
JAVASCRIPT
========================================== -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/hippo-off-canvas.js"></script>
<script src="../../js/script.js"></script>
<script src="../../js/imageslider.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/jquery.elastislide.js"></script>
<script type="text/javascript" src="../../js/gallery.js"></script>


</body>
</html>