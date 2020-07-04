<html dir="ltr">

<?php
include '../languages/languageInPage.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acapy Trade </title>
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/nav.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    <link rel="stylesheet" type="text/css" href="../styles/order.css">
    <script src="../scripts/order.js"></script>
</head>

<body>
    <?php
    session_start();
    include '../phpFormat/dataBaseIni.php';
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET["brand"])) {

            $str = @$_SERVER['REQUEST_URI'];
            @$re = explode('&', $str);
            @$orderArray = array();

            if (count(@$re) == 1) {
            } else {
                for ($i = 0; $i < count(@$re); $i++) {
                    if ($i == 0) {
                        $pr = explode('?', $re[0]);
                        $pro = explode('=',  @$pr[1]);
                        @array_push($orderArray, str_replace('%', '/', str_replace('+', ' ', $pro[1])));
                    } else {
                        @$pro = explode('=', @$re[$i]);
                        array_push($orderArray, str_replace('%', '/', str_replace('+', ' ', $pro[1])));
                    }
                }
                $loopInd = 0;
                $str = "select ifnull(max(id),0) + 1 from orders";
                $strStat = mysqli_query($con, $str);
                $id = mysqli_fetch_array($strStat)[0];
                $strMain = "INSERT INTO `orders` VALUES ($id,'" . $_SESSION['user_id'] . "', NOW());";
                $p = mysqli_query($con, $strMain);
                if ($p) {
                    while ($loopInd < count($orderArray)) {

                        $pro_id = "SELECT `id` FROM `products` WHERE  `brand_name`='" . $orderArray[$loopInd] . "'";

                        $pro_id_query = mysqli_query($con, $pro_id);

                        $poid =  mysqli_fetch_array($pro_id_query)[0];

                        $strDetails = "INSERT INTO `orders_details` VALUES ($id,'" . $poid . "','" . $orderArray[$loopInd + 2] . "')";

                        $pq = mysqli_query($con, $strDetails);

                        $loopInd += 3;
                    }
                    if ($pq) {
                        echo "<script>alert('Order Sent Successfuly Watch Your Mail and Phone For Price List');</script>";
                        echo "<script>window.open('order.php','_self');</script>";
                    } else {
                        echo "<script>console.log(' " .  mysqli_error($con) .  "' );</script>";
                    }
                } else {
                    echo "<script>console.log(' " .  mysqli_error($con) .  "' );</script>";
                }
            }
        }
    }
    ?>
    <?php
    include '../statics/openLinks.php';
    include '../statics/nav_order.php';
    ?>
    <div class="container-fluid product-container">
        <aside class="col-lg-2 col-md-3 col-sm-3 col-xs-4 aside-category" id="category">
            <details id="security-systems-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','security-systems'));"><?php echo lang('security_systems') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','security-systems','fire-alarms'));" id="fire-li"><?php echo lang('fire_alarms') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','security-systems','cctv'));" id="CCTV-li"><?php echo lang('cctv') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','security-systems','theft-alarms'));" id="theft-li"><?php echo lang('theft_alarms') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','security-systems','security-gates'));" id="security-li"><?php echo lang('security_gates_and_metal_detectors') ?></li>
                </ul>
            </details>
            <details id="office-equipment-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','office-equipment'));"><?php echo lang('office_equipment') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','office-equipment','cash-counting'));" id="cash-li"><?php echo lang('cash_counting_machines') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','office-equipment','phingerprint'));" id="phingerprint-li"><?php echo lang('phingerprint_for_attendance_and_leave') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','office-equipment','photocopier'));" id="photocopier-li"><?php echo lang('photocopier') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','office-equipment','iron-storage'));" id="iron-li"><?php echo lang('iron_storage_document_shredder') ?></li>
                </ul>
            </details>
            <details id="solar-energy-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','solar-energy'));"><?php echo lang('solar_energy_applications') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','solar-energy','solar-heaters'));" id="solar-heaters-li"><?php echo lang('solar_heaters') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','solar-energy','solar-energy'));" id="solar-power-li"><?php echo lang('solar_power_generation') ?></li>

                </ul>
            </details>
            <details id="communication-systems-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','communication-systems'));"><?php echo lang('communication_systems') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','communication-systems','internal-central'));" id="internal-central-li"><?php echo lang('internal_central') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','communication-systems','information-networks'));" id="information-networks-li"><?php echo lang('information_networks') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','communication-systems','sound-systems'));" id="sound-li"><?php echo lang('sound_systems') ?></li onclick="">
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','communication-systems','fax'));" id="fax-li"><?php echo lang('fax_intercome') ?></li>
                </ul>
            </details>
            <details id="educational-systems-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','educational-systems'));"><?php echo lang('educational_systems') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','educational-systems','language-labs'));" id="language-labs-li"><?php echo lang('language_labs') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','educational-systems','data-show'));" id="data-show-li"><?php echo lang('data_show_devices') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','educational-systems','interactive-whiteboard'));" id="interactive-whiteboard-li"><?php echo lang('interactive_whiteboard') ?></li onclick="">

                </ul>
            </details>
            <details id="it-solutions-details">
                <summary onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy'),new Array('1','it-solutions'));"><?php echo lang('it_solutions') ?></summary>
                <ul>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','it-solutions','web-applications'));" id="web-li"><?php echo lang('web_applications') ?></li onclick="">
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','it-solutions','desktop-applications'));" id="desktop-li"><?php echo lang('desktop_applications') ?></li>
                    <li onclick="openLink('order.php','<?php echo $language ?>',new Array('page','caterogy','type'),new Array('1','it-solutions','mobile-apllications'));" id="mobile-li"><?php echo lang('mobile_apllications') ?></li onclick="">

                </ul>
            </details>
        </aside>
        <div class="pruducts col-lg-10 col-md-9 col-sm-9 col-xs-8" id="page">


            <?php
            include '../phpFormat/dataBaseIni.php';
            mysqli_set_charset($con, "utf-8");
            $con->set_charset('utf-8');
            $result_per_page = 12;
            if (isset($_POST["caterogy"])) {
                echo "<script> setFilter('" . $_POST["caterogy"] . "')</script>";
                echo "<script> document.getElementById('" . $_POST["caterogy"] . "-details').open = true;</script>";
                $str = "SELECT id FROM `products_view` WHERE `product_name` = '" . $_POST["caterogy"] . "'";
            } else {
                $str = "SELECT id FROM `products_view`";
            }

            //   echo '<script>alert("' . $str . '")</script>';
            $q = mysqli_query($con, $str);
            if (mysqli_num_rows($q) == '0') { ?>
                <p class="no_item"><?php echo lang('noitems') ?></p>
            <?php
                $number_of_pages = 0;
            } else {
                $number_of_result = mysqli_num_rows($q);
                $number_of_pages = ceil($number_of_result / $result_per_page);

                if (isset($_POST['page'])) {
                    $page = $_POST['page'];
                } else {
                    $page = 1;
                }
                $this_page_frist_result = ($page - 1) * $result_per_page;

                if (isset($_POST["caterogy"])) {
                    if (isset($_POST["type"])) {
                        $sql = "SELECT * FROM `products_view` WHERE `product_name` = '" . $_POST["caterogy"] . "' AND `product_type`='" . $_POST["type"] . "' ORDER by product_name LIMIT " . $this_page_frist_result . ',' . $result_per_page;
                        echo '<script>setFilterSections("' . $_POST["type"] . '"); </script>';
                    } else {
                        $sql = "SELECT * FROM `products_view` WHERE `product_name` = '" . $_POST["caterogy"] . "' ORDER by product_name LIMIT " . $this_page_frist_result . ',' . $result_per_page;
                    }
                } else {
                    $sql = "SELECT * FROM `products_view` ORDER by product_name LIMIT " . $this_page_frist_result . ',' . $result_per_page;
                }
                //  echo '<script>alert("' . $sql . '")</script>';
                $lastCat = "start";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    if ($lastCat == "start") {
                        $lastCat = $row["product_name"];
                        echo '<div>';
                        echo '<div class="products col-lg-3 col-md-4 col-sm-6 col-xs-12" id="' . $row["product_name"] . '">';
                        echo '<div class="thumbnail">';
                        echo " <img src='" . $row['photo'] . "' alt='product-photo'>";
                        echo '   <div class="caption">';
                        echo ' <h3 class="brand brand-name">' . $row["brand_name"] . '</h3>';
                        echo ' <h3 class="model brand-model">' . $row["model"] . '</h3>';
                        echo ' <p class="products-details">' . $row["short_details"] . '</p>';
                        echo '  <p><button href="#" class="btn btn-primary product-btn addToCart" role="button">' . lang("add_to_cart") . '</button> <button type="button" class="btn btn-default product-btn"  data-toggle="modal" data-target="#myModal_' . str_replace(' ', '',$row["brand_name"]) . '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '">' . lang("see_more") . '</button></p>';
                        echo ' <div class="modal fade" id="myModal_' .str_replace(' ', '', $row["brand_name"] ). '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> ';
                        echo '  <div class="modal-dialog" role="document">';
                        echo '    <div class="modal-content">';
                        echo '     <div class="modal-header">';
                        echo '       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                        echo '       <h4 class="modal-title" id="myModalLabel">' . $row["brand_name"] . '</h4>';
                        echo '     </div>';
                        echo '     <div class="modal-body">';
                        echo '  <h4 id="showMoreHeader">' . $row["brand_name"] . '</h4>';
                        echo '   <img id="showMoreImage" src="' . $row['photo'] . '">';
                        echo '   <h5 id="showMoreModel">' . $row["model"] . '</h5>';
                        echo '   <p id="showMoreDetails" class="product-details-showMOre"> ' . $row["long_details"] . '</p>';
                        echo '      </div>';
                        echo '      <div class="modal-footer">';
                        echo '        <button type="button" class="btn btn-default" data-dismiss="modal">' . lang("close") . '</button>';
                        echo '       </div>';
                        echo '     </div>';
                        echo '    </div>';
                        echo '   </div> ';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } elseif ($lastCat == $row["product_name"]) {
                        echo '<div>';
                        echo '<div class="products col-lg-3 col-md-4 col-sm-6 col-xs-12" id="' . $row["product_name"] . '">';
                        echo '<div class="thumbnail">';
                        echo " <img src='" . $row['photo'] . "' alt='product-photo'>";
                        echo '   <div class="caption">';
                        echo ' <h3 class="brand brand-name">' . $row["brand_name"] . '</h3>';
                        echo ' <h3 class="model brand-model">' . $row["model"] . '</h3>';
                        echo ' <p class="products-details">' . $row["short_details"] . '</p>';
                        echo '  <p><button href="#" class="btn btn-primary product-btn addToCart" role="button">' . lang("add_to_cart") . '</button> <button type="button" class="btn btn-default product-btn"  data-toggle="modal" data-target="#myModal_' .str_replace(' ', '', $row["brand_name"]) . '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '">' . lang("see_more") . '</button></p>';
                        echo ' <div class="modal fade" id="myModal_' . str_replace(' ', '',$row["brand_name"] ). '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> ';
                        echo '  <div class="modal-dialog" role="document">';
                        echo '    <div class="modal-content">';
                        echo '     <div class="modal-header">';
                        echo '       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                        echo '       <h4 class="modal-title" id="myModalLabel">' . $row["brand_name"] . '</h4>';
                        echo '     </div>';
                        echo '     <div class="modal-body">';
                        echo '  <h4 id="showMoreHeader">' . $row["brand_name"] . '</h4>';
                        echo '   <img id="showMoreImage" src="' . $row['photo'] . '">';
                        echo '   <h5 id="showMoreModel">' . $row["model"] . '</h5>';
                        echo '   <p id="showMoreDetails" class="product-details-showMOre"> ' . $row["long_details"] . '</p>';
                        echo '      </div>';
                        echo '      <div class="modal-footer">';
                        echo '        <button type="button" class="btn btn-default" data-dismiss="modal">' . lang("close") . '</button>';
                        echo '       </div>';
                        echo '     </div>';
                        echo '    </div>';
                        echo '   </div> ';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        $lastCat = $row["product_name"];
                        echo '<div>';
                        echo '<div class="products col-lg-3 col-md-4 col-sm-6 col-xs-12" id="' . $row["product_name"] . '">';
                        echo '<div class="thumbnail">';
                        echo " <img src='" . $row['photo'] . "' alt='product-photo'>";
                        echo '   <div class="caption">';
                        echo ' <h3 class="brand brand-name">' . $row["brand_name"] . '</h3>';
                        echo ' <h3 class="model brand-model">' . $row["model"] . '</h3>';
                        echo ' <p class="products-details">' . $row["short_details"] . '</p>';
                        echo '  <p><button href="#" class="btn btn-primary product-btn addToCart" role="button">' . lang("add_to_cart") . '</button> <button type="button" class="btn btn-default product-btn"  data-toggle="modal" data-target="#myModal_' .str_replace(' ', '', $row["brand_name"] ). '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '">' . lang("see_more") . '</button></p>';
                        echo ' <div class="modal fade" id="myModal_' .str_replace(' ', '', $row["brand_name"] ). '_' .  str_replace('/', '_', str_replace('-', '_', str_replace('.', '_', str_replace(':', '_', str_replace(' ', '',  $row["model"]))))) . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> ';
                        echo '  <div class="modal-dialog" role="document">';
                        echo '    <div class="modal-content">';
                        echo '      <div class="modal-header">';
                        echo '          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                        echo '          <h4 class="modal-title" id="myModalLabel">' . $row["brand_name"] . '</h4>';
                        echo '      </div>';
                        echo '      <div class="modal-body">';
                        echo '          <h4 id="showMoreHeader">' . $row["brand_name"] . '</h4>';
                        echo '          <img id="showMoreImage" src="' . $row['photo'] . '">';
                        echo '          <h5 id="showMoreModel">' . $row["model"] . '</h5>';
                        echo '          <p id="showMoreDetails" class="product-details-showMOre"> ' . $row["long_details"] . '</p>';
                        echo '       </div>';
                        echo '       <div class="modal-footer">';
                        echo '          <button type="button" class="btn btn-default" data-dismiss="modal">' . lang("close") . '</button>';
                        echo '       </div>';
                        echo '     </div>';
                        echo '    </div>';
                        echo '   </div> ';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            }
            ?>

        </div>
        <nav class="text-center" aria-label="Page navigation">
            <ul class="pagination">
                <?php $page = 1; ?>
                <li>
                    <?php

                    $clickStatement = "";
                    if (isset($_POST['caterogy'])) {
                        if (isset($_POST['type'])) {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy','type'),new Array('$page','" . $_POST['caterogy'] . "','" . $_POST['type'] . "'));";
                        } else {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy'),new Array('$page','" . $_POST['caterogy'] . "'));";
                        }
                    } else {
                        $clickStatement = "return openLink('order.php','$language',new Array('page'),new Array('$page'));";
                    }
                    echo '<a class="" onclick="' . $clickStatement . '" aria-label="Previous"> <span aria-hidden="true">&laquo;</span></a> ';
                    ?>
                </li>
                <?php

               
                for ($page = 1; $page <= $number_of_pages; $page++) {
                    $clickStatement = "";
                    if (isset($_POST['caterogy'])) {
                        if (isset($_POST['type'])) {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy','type'),new Array('$page','" . $_POST['caterogy'] . "','" . $_POST['type'] . "'));";
                        } else {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy'),new Array('$page','" . $_POST['caterogy'] . "'));";
                        }
                    } else {
                        $clickStatement = "return openLink('order.php','$language',new Array('page'),new Array('$page'));";
                    }
                    echo '<li id="page_' . $page . '" class="" ><a onclick="'.$clickStatement.'">' . $page . '</a></li>';
                }
                ?>
                <li>
                    <?php
                    $clickStatement = "";
                    if (isset($_POST['caterogy'])) {
                        if (isset($_POST['type'])) {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy','type'),new Array('". ($page - 1) ."','" . $_POST['caterogy'] . "','" . $_POST['type'] . "'));";
                        } else {
                            $clickStatement = "return openLink('order.php','$language',new Array('page','caterogy'),new Array('". ($page - 1) ."','" . $_POST['caterogy'] . "'));";
                        }
                    } else {
                        $clickStatement = "return openLink('order.php','$language',new Array('page'),new Array('". ($page - 1) ."'));";
                    }
                    echo '<a class="" onclick="'.$clickStatement.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>';
                    ?>
                </li>
            </ul>
        </nav>
    </div>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo lang('my_cart') ?></h4>
                </div>
                <div class="modal-body container">
                    <div class="cart-row container">
                        <span class="cart-brand col-lg-4 col-md-4 col-sm-4 col-xs-4"><?php echo lang('brand') ?></span>
                        <span class="cart-model col-lg-4 col-md-4 col-sm-4 col-xs-4"><?php echo lang('model') ?></span>
                        <span class="cart-quantity col-lg-4 col-md-4 col-sm-4 col-xs-4"><?php echo lang('quantity') ?></span>
                    </div>
                    <form method="GET">
                        <div class="content-of-cart container">

                        </div>
                        <div class="modal-footer">

                            <input type="submit" value="<?php echo lang('PURCHASE') ?>" class="btn-purchase">
                            <button type="button" class=" btn-close btn btn-default" data-dismiss="modal"><?php echo lang('close') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/addToCart.js"></script>

    <?php
    include '../statics/footer.php';
    $language = "en";
    if (isset($_POST["lang"])) {
        if ($_POST["lang"] == "en") {
            echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
            echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
            $language = "en";
        } else {
            echo ' <script> document.getElementById("lang_value").value = "en";  </script>';
            echo ' <script> document.getElementById("lang_name").innerHTML = "EN";  </script>';
            $language = "ar";
        }
    } else {
        if (isset($_GET["lang"])) {
            if ($_GET["lang"] == "en") {
                echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
                echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
                $language = "en";
            } else {
                echo ' <script> document.getElementById("lang_value").value = "en";  </script>';
                echo ' <script> document.getElementById("lang_name").innerHTML = "EN";  </script>';
                $language = "ar";
            }
        } else {
            echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
            echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
            $language = "en";
        }
    }

    ?>
    <script>
        document.getElementById("lang_form").action = "order.php"
    </script>
    <script>
        if (sessionStorage.getItem("user_id") == null) {
            document.getElementById("login_out").innerHTML = "<?php echo lang('login'); ?>";
            document.getElementById("login_out").href = "login.php";
        } else {
            document.getElementById("login_out").innerHTML = "<?php echo lang('logout'); ?>";
            document.getElementById("login_out").href = "logout.php";
        }
        var element = document.getElementById("page_" + <?php echo $_POST["page"] ?>);
        element.classList.add("active");
    </script>
</body>

</html>