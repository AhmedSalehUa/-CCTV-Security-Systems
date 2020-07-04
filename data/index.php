<!DOCTYPE html>
<html dir="ltr">
<?php
include '../languages/languageInPage.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />
    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">
    <title>Acapy Trade Programs</title>
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/programPage.css">
    <link rel="stylesheet" type="text/css" href="../styles/nav.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
</head>


<body>
    <?php

    include '../statics/openLinks.php';
    session_start();


    if (isset($_POST['uid']) == null) {
    ?>
        <script>
            if (sessionStorage.getItem("user_id") == null) {
                alert('<?php echo lang("please_login") ?>');
                window.open('../pages/login.php', '_self');
            } else {
                openLink('index.php', '<?php echo $language ?>', new Array('uid'), new Array(sessionStorage.getItem('user_id')));
            }
        </script>
    <?php }
    ?>
    <?php

    include '../statics/nav-software.php';
    ?>
    <div>
        <div class="container-fluid content">
            <?php
            include '../phpFormat/dataBaseIni.php';
            $sql = "SELECT * FROM `files` ORDER BY sec_id";
            $lastCat = "0";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                if ($lastCat == "0") {
                    $lastCat = $row["sec_id"];
                    $catsql = "SELECT * FROM `files_section` where id ='" . $lastCat . "'";
                    $raesult = mysqli_query($con, $catsql);
                    $carRow = mysqli_fetch_row($raesult);
                    echo '<div class="column col-sm-4 col-xs-6">';
                    echo '<div class="category" data-eng="' . $carRow[1] . '">';
                    echo '<div class="category-head add-border">';
                    echo '<div class="icon"><img class="icon-img" src="img/' . $carRow[1] . '.svg" alt="icon" width="42" height="47" alt=""></div>';
                    echo '<h1 class="category-title" title="' . $carRow[1] . '"> ' . $carRow[1] . ' </h1>';
                    echo '</div>';
                    echo '<ul class="programs-list">';
                    echo '<div class="ui-newsticker caternews newsticker">';
                    echo '<ul class="ui-newsticker-list newsticker-list">';
                    echo '<li class="item">';
                    $link = 'return openLink("innerPages/download.php","' . $language . '",new Array("filename","uid"),new Array("' . $row["filename"] . '","' . $_POST['uid'] . '"))';
                    echo "<a onclick='" . $link . "'>";
                    echo ' <span  class="item-name" title="' . $row["details"] . '">' . $row["filename"] . '</span>';
                    echo ' <span class="version"> ' . $row["version"] . '</span>';
                    echo '<span class="bit">' . $row["bit"] . '</span>';
                    echo '</a>';
                    echo '</li>';
                } elseif ($lastCat == $row["sec_id"]) {
                    echo '<li class="item">';
                    $link = 'return openLink("innerPages/download.php","' . $language . '",new Array("filename","uid"),new Array("' . $row["filename"] . '","' . $_POST['uid'] . '"))';
                    echo "<a onclick='" . $link . "'>";
                    echo ' <span class="item-name" title="' . $row["details"] . '">' . $row["filename"] . '</span>';
                    echo ' <span class="version"> ' . $row["version"] . '</span>';
                    echo '<span class="bit">' . $row["bit"] . '</span>';
                    echo '</a>';
                    echo '</li>';
                } else {
                    $lastCat = $row["sec_id"];
                    $catsql = "SELECT * FROM `files_section` where id ='" . $lastCat . "'";
                    $raesult = mysqli_query($con, $catsql);
                    $carRow = mysqli_fetch_row($raesult);
                    echo '</ul>';
                    echo ' </div>';
                    echo ' </ul>';
                    echo ' </div>';
                    echo ' </div>';
                    echo '<div class="column col-sm-4 col-xs-6">';
                    echo '<div class="category" data-eng="' . $carRow[1] . '">';
                    echo '<div class="category-head add-border">';
                    echo '<div class="icon"><img class="icon-img" src="img/' . $carRow[1] . '.svg" alt="icon" width="42" height="47" alt=""></div>';
                    echo '<h1 class="category-title" title="' . $carRow[1] . '"> ' . $carRow[1] . ' </h1>';
                    echo '</div>';
                    echo '<ul class="programs-list">';
                    echo '<div class="ui-newsticker caternews newsticker">';
                    echo '<ul class="ui-newsticker-list newsticker-list">';
                    echo '<li class="item">';
                    $link = 'return openLink("innerPages/download.php","' . $language . '",new Array("filename","uid"),new Array("' . $row["filename"] . '","' . $_POST['uid'] . '"))';
                    echo "<a onclick='" . $link . "'>";
                    echo ' <span class="item-name" title="' . $row["details"] . '">' . $row["filename"] . '</span>';
                    echo ' <span class="version"> ' . $row["version"] . '</span>';
                    echo '<span class="bit">' . $row["bit"] . '</span>';
                    echo '</a>';
                    echo '</li>';
                }
            } ?>
        </div>
        <script src="../scripts/jquery-3.4.1.min.js"></script>
        <script src="../scripts/bootstrap.min.js"></script>
        <script>
            if (sessionStorage.getItem("user_id") == null) {
                document.getElementById("login_out").innerHTML = "<?php echo lang('login'); ?>";
                document.getElementById("login_out").href = "../pages/login.php";
            } else {
                document.getElementById("login_out").innerHTML = "<?php echo lang('logout'); ?>";
                document.getElementById("login_out").href = "../pages/logout.php";
            }
        </script>


</body>

</html>