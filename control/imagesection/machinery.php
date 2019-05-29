<?php
include_once '../../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {


    $result1 = mysqli_query($connect, "SELECT * FROM newmsg");
    $num_rows1 = mysqli_num_rows($result1);
    ?>

    <?php include "include/imageheader.php"; ?>
    <div id="page-wrapper">
        <div id='cssmenu'>
            <ul>
                <li><a href='../uploadimage.php'>Home</a></li>
                <li><a href='alum.php'>Aluminum</a></li>
                <li><a href='automobile.php'>Automobile</a></li>
                <li><a href='hydraulic.php'>Hydraulic</a></li>
                <li class='active'><a href='machinery.php'>Machinery</a></li>
                <li><a href='power.php'>Power Tool</a></li>
                <li><a href='stainless.php'>Stainless</a></li>
                <li><a href='test.php'>Test Equipment</a></li>
                <li><a href='valve.php'>Valve Body</a></li>
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
            <?php
            if (isset($_FILES['attachments'])) {
                $msg = "";
                $targetFile = time() . basename($_FILES['attachments']['name'][0]);
                if (file_exists($targetFile)) {
                    $msg = array("status" => 0, "msg" => "File already exists!");
                } else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], "../../img/machinery/" . $targetFile)) {
                    $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "../../img/machinery/" . $targetFile);
                    $connect->query("INSERT INTO machinery(path) VALUES ('$targetFile')");
                }
                echo "<meta http-equiv='refresh' content='0;url=''>";

                exit(json_encode($msg));
            }
            ?>

            <div class="container">
                <h1>Machinery Section</h1>
                <div id="dropZone">
                    <h1>Drag & Drop Files...</h1>
                    <input type="file" id="fileupload" name="attachments[]" multiple>
                </div>

            <h1 id="error"></h1><br><br>
            <h1 id="progress"></h1><br><br>
            <div id="files"></div>
        </div>
            <?php

            $sql = "SELECT * FROM machinery";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<a target="_blank" href="../../img/machinery/' . $row['path'] . '">';
                echo '<div class=" col-md-4 col-sm-6"><img src="../../img/machinery/' . $row['path'] . '"width="150" height="150" style="margin: 10px;"></a><a href="delete/delmachinery.php?id=' . $row['id'] . '">Delete</a>';


                echo '</div>';


            }

            ?>


            <!-- /. ROW  -->


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
    <script src="../../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../js/bootstrap1.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="../../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../js/custom.js"></script>
    <script src="../../js/filedrag.js"></script>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
    <script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
    <script src="js/jquery.fileupload.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            var files = $("#files");

            $("#fileupload").fileupload({
                url: 'machinery.php',
                dropZone: '#dropZone',
                dataType: 'json',
                autoUpload: false
            }).on('fileuploadadd', function (e, data) {
                var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
                var fileName = data.originalFiles[0]['name'];
                var fileSize = data.originalFiles[0]['size'];

                if (!fileTypeAllowed.test(fileName))
                    $("#error").html('Only images are allowed!');
                else if (fileSize > 2000000)
                    $("#error").html('Your file is too big! Max allowed size is: 2 MB');
                else {
                    $("#error").html("");
                    data.submit();
                }
            }).on('fileuploaddone', function (e, data) {
                var status = data.jqXHR.responseJSON.status;
                var msg = data.jqXHR.responseJSON.msg;

                if (status == 1) {
                    var path = data.jqXHR.responseJSON.path;
                    $("#files").fadeIn().append('<p><img style="width: 100px; height: 100px;" src="' + path + '" /></p>');
                } else
                    $("#error").html(msg);
            }).on('fileuploadprogressall', function (e, data) {

                location.reload();
            });
        });
    </script>

    </body>
    </html>

    <?php
} else {
    echo '<h2 style="text-align:center; margin-top:50px;">You cannot access this page before you log in</h2>';
    header("refresh:2;url=../../login.php");
}

