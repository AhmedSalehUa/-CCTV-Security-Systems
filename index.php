<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    
}else{
    echo '<script>window.open("https://acapy-trade.com", "_self");</script>'; 
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />
    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">
    <title>Acapy Trade </title>
    <link rel="stylesheet" type="text/css" href="styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/mainPage.css">
    <link rel="stylesheet" type="text/css" href="styles/nav.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>
</head>
<?php

?>

<body>
    <?php
    include 'statics/openLinks.php';
    include 'languages/language.php';
    include 'statics/nav-header.php';
    ?>

    <div id="carousel-example-generic" class="carousel slide carousel-slide-custome" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/mainBack.jpg" alt="img1">
            </div>
            <div class="item">
                <img src="img/mainBack2.jpg" alt="img2">
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="mainArticle">
        <div class="container main2-content">
            <div class="main2-content-div1 col-lg-4 col-md-3">
                <h2><?php echo lang('what_we_offer') ?></h2>
                <h1><?php echo lang('our_service') ?></h1>
                <div class="text"><?php echo lang('we_offer_one') ?></div>
                <div class="decription"><?php echo lang('we_offer_two') ?> </div>
            </div>
            <div class=" main2-content-div2 col-lg-8 col-md-9 ">
                <div class="caterogy " onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','security-systems'));">
                    <img src="img/cctv.svg">
                    <p><?php echo lang('security_systems') ?></p>
                    <ul>
                        <li><?php echo lang('fire_alarms') ?></li>
                        <li><?php echo lang('theft_alarms') ?></li>
                        <li><?php echo lang('cctv') ?></li>
                        <li><?php echo lang('security_gates_and_metal_detectors') ?></li>
                    </ul>
                </div>
                <div class="caterogy" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','office-equipment'));">
                    <img src="img/office-printer.svg">
                    <p><?php echo lang('office_equipment') ?></p>
                    <ul>
                        <li><?php echo lang('cash_counting_machines') ?></li>
                        <li><?php echo lang('phingerprint_for_attendance_and_leave') ?></li>
                        <li><?php echo lang('photocopier') ?></li>
                        <li><?php echo lang('iron_storage_document_shredder') ?></li>
                    </ul>
                </div>
                <div class="caterogy" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','solar-energy'));">
                    <img src="img/solar-panel.svg">
                    <p><?php echo lang('solar_energy_applications') ?></p>
                    <ul>
                        <li><?php echo lang('solar_heaters') ?></li>
                        <li><?php echo lang('solar_power_generation') ?></li>
                    </ul>
                </div>
                <div class="caterogy" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','it-solutions'));">
                    <img src="img/website.svg">
                    <p><?php echo lang('it_solutions') ?></p>
                    <ul>
                        <li><?php echo lang('web_applications') ?></li>
                        <li><?php echo lang('desktop_applications') ?></li>
                        <li><?php echo lang('mobile_apllications') ?></li>
                    </ul>
                </div>
                <div class="caterogy" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','communication-systems'));">
                    <img src="img/communication-tower.svg">
                    <p><?php echo lang('communication_systems') ?></p>
                    <ul>
                        <li><?php echo lang('internal_central') ?></li>
                        <li><?php echo lang('information_networks') ?></li>
                        <li><?php echo lang('sound_systems') ?></li>
                        <li><?php echo lang('fax_intercome') ?></li>
                    </ul>
                </div>
                <div class="caterogy" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','educational-systems'));">
                    <img src="img/machine-learning.svg">
                    <p><?php echo lang('educational_systems') ?></p>
                    <ul>
                        <li><?php echo lang('language_labs') ?></li>
                        <li><?php echo lang('data_show_devices') ?></li>
                        <li><?php echo lang('interactive_whiteboard') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <aside id="social">
        <a href="https://www.facebook.com/Acapy.Trade" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href=" https://www.linkedin.com/in/acapy-trade-208909103" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="mailto:info@acapy-trade.com?Subject=Enquiry" target="_top"><i class="far fa-envelope fa-large"></i></a>
        <a href="https://api.whatsapp.com/send?phone=+201280969095&text=&source=&data=" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
    </aside>
    <?php
    include 'statics/footer.php';
    ?>
    <script>
            if (sessionStorage.getItem("user_id") == null) {
                document.getElementById("login_out").innerHTML = "<?php echo lang('login'); ?>";
                document.getElementById("login_out").href = "pages/login.php?lang=<?php echo $language ?>";
            } else {
                document.getElementById("login_out").innerHTML = "<?php echo lang('logout'); ?>";
                document.getElementById("login_out").href = "pages/logout.php?lang=<?php echo $language ?>";
            }
        </script>
    <?php
    include 'languages/languageChanger.php';
    ?>
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>