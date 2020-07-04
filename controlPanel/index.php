<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "POST") {

?> <script>
        if (sessionStorage.getItem("user_rule") == "user") {

            alert('for admins only');

            window.open('../index.php?uid=' + sessionStorage.getItem("user_id"), '_self');

        }
    </script>

<?php  }
include '../languages/languageInPage.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acapy Trade </title>
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/sideNav.css" />
</head>
<?php
include '../phpFormat/dataBaseIni.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") { ?> <script>
        if (sessionStorage.getItem("user_id") == null) {
            window.open('pages/login.php', '_self');
        }
    </script> <?php  }
            $userCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`user_id`) FROM `users`"))[0];
            $allProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products`"))[0];
            $securityProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '1'"))[0];
            $officeProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '2'"))[0];
            $solarProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '3'"))[0];
            $communicationProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '4'"))[0];
            $educationalProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '5'"))[0];
            $itProductCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `products` WHERE `category_id` = '6'"))[0];
            $contactUsCount = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(`id`) FROM `contact_us`"))[0];
            $filesCount = mysqli_fetch_array(mysqli_query($con, "SELECT count(`id`) FROM `files` "))[0];
            $orderCount = mysqli_fetch_array(mysqli_query($con, " SELECT COUNT(`id`) FROM `orders`"))[0];
            $todayOrdeCount = mysqli_fetch_array(mysqli_query($con, " SELECT COUNT(`id`) FROM `orders` WHERE `date` = CURRENT_DATE();"))[0];     ?>

<body>
    <?php
    include '../statics/openLinks.php';
    include '../statics/nav-controlPanel.php';
    ?>
    <section id="main" class="content">
        <div class="row">
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total User</span>
                        <span class="info-box-number"><?php echo $userCount ?></span>
                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 45%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            users in all section
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-store"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Products</span>
                        <span class="info-box-number"><?php echo $allProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            all products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-file-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Files</span>
                        <span class="info-box-number"><?php echo $filesCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 85%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            files uploaded in data
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-cloud-download-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Files Downloads</span>
                        <span class="info-box-number">55,005</span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 85%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            85% Increase in 28 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Orders</span>
                        <span class="info-box-number"><?php echo $orderCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 85%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            all orders
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-cart-plus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Todays Order</span>
                        <span class="info-box-number"><?php echo $todayOrdeCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 85%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            today orders
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><i class="fas fa-comments"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Direct Chat</span>
                        <span class="info-box-number"><?php echo $contactUsCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 50%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            contact us section
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"> <img class="imgIcon" src="img/cctv.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Security System Products</span>
                        <span class="info-box-number"><?php echo $securityProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            Security System products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><img class="imgIcon" src="img/office-printer.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Office equipment Products</span>
                        <span class="info-box-number"><?php echo $officeProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            Office equipment products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><img class="imgIcon" src="img/solar-panel.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Solar energy applications Products</span>
                        <span class="info-box-number"><?php echo $solarProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            Solar energy applications products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><img class="imgIcon" src="img/website.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">IT Solutions Products</span>
                        <span class="info-box-number"><?php echo $itProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            IT Solutions products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><img class="imgIcon" src="img/communication-tower.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Communication systems Products</span>
                        <span class="info-box-number"><?php echo $communicationProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            Communication systems products
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="info-box">
                    <span class="info-box-icon push-bottom bg-orange"><img class="imgIcon" src="img/machine-learning.svg"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Educational systems Products</span>
                        <span class="info-box-number"><?php echo $educationalProductCount ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 40%"></div>
                        </div>
                        <span class="progress-description text-muted">
                            Educational systems products
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>


    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>