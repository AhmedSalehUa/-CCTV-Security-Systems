<!Doctype html>
<html lang="en" dir="ltr">
<?php
include '../languages/languageInPage.php' ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />
    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">
    <title>Acapy Trade </title>
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/past-work.css">
    <link rel="stylesheet" type="text/css" href="../styles/nav.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".pastworkimg").css("display", "none");
            $(".pastworkid").mouseover(function() {
                $(".pastworkimg").css("display", "none");
                $(this).find("img").css("display", "inline-block");
            })
            $(".pastworkid").mouseout(function() {
                $(".pastworkimg").css("display", "none");
            })
        });
    </script>
</head>

<body>
 
    <?php
    
    
    include '../phpFormat/dataBaseIni.php';

    echo '<div id="carousel-example-generic" class="carousel slide carousel-slide-custome" data-ride="carousel">';
    $staSlidePhot = 'SELECT `id`, `photo` FROM `past_works_inside_photo`';
    $staSlidePhotQuerry = mysqli_query($con, $staSlidePhot);
    echo ' <ol class="carousel-indicators">';
    $indicator = 0;
    while ($staSlidePhotRow = mysqli_fetch_array($staSlidePhotQuerry)) {
        if ($indicator == 0) {
            echo '<li data-target="#carousel-example-generic" data-slide-to="' . $staSlidePhotRow["id"] . '" class="active"></li>';
            $indicator = 1;
        } else {
            echo '<li data-target="#carousel-example-generic" data-slide-to="' . $staSlidePhotRow["id"] . '"></li>';
        }
    }
    echo ' </ol>';

    echo  '  <div class="carousel-inner" role="listbox">';
    $indicator2 = 0;
    $staSlidePhotos = 'SELECT `id`, `photo` FROM `past_works_inside_photo`';
    $staSlidePhotQue = mysqli_query($con, $staSlidePhotos);
    while ($staSlidePhotRowPhoto = mysqli_fetch_array($staSlidePhotQue)) {
        if ($indicator2 == 0) {
            echo '<div class="item active">';
            echo '<img src="' . $staSlidePhotRowPhoto['photo'] . '" alt="img1">';
            echo '</div>';
            $indicator2 = 1;
        } else {
            echo  ' <div class="item">';
            echo   '<img src="' . $staSlidePhotRowPhoto['photo'] . '" alt="img2">';
            echo  ' </div>';
        }
    }
    echo '</div>';
    echo '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">';
    echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
    echo '<span class="sr-only">Previous</span>';
    echo '</a>';
    echo '<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">';
    echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
    echo '<span class="sr-only">Next</span>';
    echo '</a>';
    echo '</div>';
    ?>
    <div id="pastWOrksID" class="pastWorks">
        <p><?php echo lang('our_past_works'); ?></p>
        <div class="shortLinePasteWork"></div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        <p><?php echo lang('no'); ?></p>
                    </th>
                    <th scope="col">
                        <p><?php echo lang('place_name'); ?></p>
                    </th>
                    <th scope="col">
                        <p><?php echo lang('place_location'); ?></p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $fakeId = 1;
                $str = "SELECT * FROM `pastworks` ORDER BY name";

                $q = mysqli_query($con, $str);
                $lastCat = " ";
                while ($row = mysqli_fetch_array($q)) {
                    if ($lastCat === $row["name"]) {
                    } else {
                        $lastCat = $row["name"];
                        $lastCatName = lang($row["name"]);
                        echo "<tr>";
                        echo "<th colspan='3'  scope='row'>";
                        echo  $lastCatName;
                        echo "</th>";
                        echo "</tr>";
                    }
                    $catsql = "SELECT `photo` FROM `past_works_photo` where `past-id`='" . $row["id"] . "'";
                    $raesult = mysqli_query($con, $catsql);
                    $carRow = mysqli_fetch_row($raesult);
                    echo "<tr class='pastworkid'>";
                    echo " <th  scope='row' class='pasid'>";
                    echo  $fakeId;
                    $fakeId += 1;
                    echo "</th>";
                    echo "<th>";
                    echo $row['place_name'];
                    echo  "<img class='pastworkimg' src='".$carRow[0] ."' alt='' />";
                    echo  "</th>";
                    echo "<th>";
                    echo  $row['place_location'];
                    echo  "</th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php
    include '../statics/footer.php';
    ?>
 
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/main.js"></script>
    <?php
    include '../languages/languageChanger.php' ?>
    

</body>

</html>