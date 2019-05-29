<?php include_once '../../db.inc.php'; ?>
<?php
$errmsg = '';
$name = '';
$email = '';
$phone = '';
$subject = '';
$message = '';
$msgsent = '';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, trim(htmlentities($_POST['name'])));
    $email = mysqli_real_escape_string($connect, trim(htmlentities($_POST['email'])));
    $phone = mysqli_real_escape_string($connect, trim(htmlentities($_POST['phone'])));
    $subject = mysqli_real_escape_string($connect, trim(htmlentities($_POST['subject'])));
    $message = mysqli_real_escape_string($connect, trim(htmlentities($_POST['message'])));

    $secert_key="6LegAp0UAAAAAFnnY3lluykm_96ppy5VJw-qwmXw";
    $response_key=$_POST['g-recaptcha-response'];
    $userIP=$_SERVER['REMOTE_ADDR'];

    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secert_key&response=$response_key&remoteip=$userIP";
    $response=file_get_contents($url);
    $response=json_decode($response);

    if (empty($name)) {
        $errmsg = 'Please type your name';
    } else if (empty($email)) {
        $errmsg = 'Please type your email to contact with you';
    } else if (empty($subject)) {
        $errmsg = 'Please type your subject';
    } else if (empty($message)) {
        $errmsg = 'Please type your message';
    } else {
        if($response->success){
            $target = '../img/msgimage/' . basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];

            $sql = 'INSERT INTO `newmsg`(`name`, `email`, `phone`, `subject`, `message`, `file`) VALUES ("' . $name . '","' . $email . '","' . $phone . '","' . $subject . '","' . $message . '","' . $image . '")';
            mysqli_query($connect, $sql);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            }
            mysqli_close($connect);
            echo "<script type='text/javascript'>window.location.href = 'contact.php'; alert('has been sent');</script>";

//Send Email to G-mail
            require "../../include/phpmailer/PHPMailerAutoload.php";

            $mail = new PHPMailer();


            $mail->Subject = $subject;

            $mail->Body = $message;

            $mail->setFrom($email, $name);

            $mail->addAddress('api.chc1989@gmail.com');

            $mail->isHTML(false);

            $mail->send();
            exit;
        }else{
            $errmsg = 'Please check recaptcha checkbox';
        }

    }


}
?>
<?php include "../../include/template/mainHeader.php"; ?>
    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .custom-file-input::before {
            content: '<?php echo $lang['Select a file']?>';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }

        .custom-file-input:hover::before {
            border-color: black;
        }

        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>
    <div class="breadcrumb-area">
        <div class="col-md-6 col-xs-12 col-sm-6">
            <ul class="breadcrumb">
                <li><a href="../../index.php"><?php echo $lang['home'] ?></a></li>
                <li class="active"><?php echo $lang['Contact Us'] ?></li>
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
        <div class="inner-content" style="background: #E1DADA">
            <div class="contact">
                <div class="contact-us">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="main-contact-form">
                                <h4><?php echo $lang['Drop us a Line'] ?> </h4><?php echo '<p style="color: red;">' . $errmsg . '</p>' ?>
                                <form action="contact.php" method="post" enctype="multipart/form-data">
                                    <input type="text" id="full-name" name="name"
                                           placeholder="<?php echo $lang['Name'] ?>"
                                           value="<?php echo $name; ?>">
                                    <input type="email" id="email" name="email"
                                           placeholder="<?php echo $lang['Email Address'] ?>"
                                           value="<?php echo $email; ?>">
                                    <input type="tel" id="phone" name="phone" placeholder="<?php echo $lang['Phone'] ?>"
                                           value="<?php echo $phone; ?>">
                                    <input type="text" id="subject" name="subject"
                                           placeholder="<?php echo $lang['Subject'] ?>"
                                           value="<?php echo $subject; ?>">
                                    <textarea name="message" id="message" cols="30" rows="4"
                                              value="<?php echo $message; ?>"
                                              placeholder="<?php echo $lang['Type your message'] ?>"></textarea><br><br>
                                    <input type="file" name="image" class="custom-file-input"><br>
                                    <div class="g-recaptcha" data-sitekey="6LegAp0UAAAAAMq8ZV8G20osf5CO0p_ryHBA_Y3_"></div><br>
                                    <input type="submit" class="btn btn-primary" value="<?php echo $lang['submit'] ?>"
                                           name="submit">
                                    <?php echo '<p style="color:green;">' . $msgsent . '</p>'; ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="get-in-Touch">
                                <h4><?php echo $lang['Contact Address'] ?></h4>
                                <address>
                                    <H4><?php echo $lang['Hongkong Office:'] ?></H4>
                                    <?php echo $lang['Precision Machinery Technology (HK) Co., Limited.'] ?>
                                    <div><H4><?php echo $lang['US Sales:'] ?></H4> 5008 Sweetser Ave, Evansville, IN
                                        47715, USA
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
                                    <div>
                                        <a href="mailto:info@dggprecision.com">info@dggprecision.com</a>
                                    </div>
                                    <br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.761856968178!2d113.72378381529853!3d22.99578302309861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403a05ae790ee2f%3A0x3c2140e1b827888b!2sPrecision+Manufacturing+Co.%2CLtd.!5e0!3m2!1sen!2sus!4v1551036891648"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php include "../../include/template/mainFooter.php"; ?>