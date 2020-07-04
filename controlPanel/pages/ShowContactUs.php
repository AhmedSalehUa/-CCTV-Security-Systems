<!DOCTYPE html>
<html>
<?php
include '../../languages/english.php' ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />
    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">
    <title>Acapy Trade </title>
    <link rel="stylesheet" type="text/css" href="../../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../styles/mainPage.css">
    <script src="../../scripts/jquery-3.4.1.min.js"></script>
</head>

<body> <?php
        include '../../statics/nav_controlPanelPages.php';
    ?>
    <div id="pastWOrksID" class="pastWorks">
        <p><?php echo lang('contacts'); ?></p>
        <div class="shortLinePasteWork"></div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        <p><?php echo lang('sender_name'); ?></p>
                    </th>
                    <th scope="col">
                        <p><?php echo lang('sender_phone'); ?></p>
                    </th>
                    <th scope="col">
                        <p><?php echo lang('sender_email'); ?></p>
                    </th>
                    <th colspan="2" scope="col">
                        <p><?php echo lang('messege'); ?></p>
                    </th>                   
                </tr>
            </thead>
            <tbody>
                <?php
                $str = "SELECT * FROM `contact_us` ORDER BY id";
               include '../../phpFormat/dataBaseIni.php';
                $q = mysqli_query($con, $str);
                while ($row = mysqli_fetch_array($q)) {
                       
                    echo "<tr >";
                    echo " <th>";
                    echo  $row["sender_name"];
                    echo "</th>";
                    echo "<th>";
                    echo $row['sender_phone'];
                    echo  "</th>";
                    echo "<th>";
                    echo  $row['sender_email'];
                    echo  "</th>";
                    echo "<th colspan='3'  scope='row'>";
                    echo  $row['messege'];
                    echo  "</th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php
    include '../../statics/footer.php';
    ?>
    <script>
        if (sessionStorage.getItem("user_id") == null) {
            document.getElementById("login_out").innerHTML = 'Log in';
            document.getElementById("login_out").href = "login.php";
        } else {
            document.getElementById("login_out").innerHTML = 'Log out';
            document.getElementById("login_out").href = "";
            document.getElementById("login_out").onclick = function() {
                sessionStorage.clear();
                <?php @session_destroy(); ?>
            }
        }
    </script>
    <script src="../../scripts/jquery-3.4.1.min.js"></script>
    <script src="../../scripts/bootstrap.min.js"></script>
</body>

</html>