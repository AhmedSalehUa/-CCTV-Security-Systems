<!DOCTYPE html>

<html lang="en" dir="ltr">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />

    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">

    <title>Acapy Trade Programs</title>

    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">

    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="../styles/filepermission.css">



</head><?php



        include '../../phpFormat/dataBaseIni.php';

        session_start();

        if ($_SERVER['REQUEST_METHOD'] == "GET") {

        ?> 

        <script>

        if (sessionStorage.getItem("user_rule") == "user") {

            alert('for admins only');

            window.open('../index.php?uid='+sessionStorage.getItem("user_id"), '_self');

        }

    </script>

<?php  }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST['sub'] == 'insert') {

                $str = "SELECT `id` FROM `files_permission` WHERE `user_id`='" . $_POST['user-id'] . "' and `file_id`='" . $_POST['file-id'] . "'";

                $q = mysqli_query($con, $str);

                $id = mysqli_fetch_array($q);

                if ($id['id'] === null) {

                    $query = "INSERT INTO `files_permission`( `user_id`, `file_id`) VALUES ('" . $_POST['user-id'] . "','" . $_POST['file-id'] . "')";

                    $q = mysqli_query($con, $query);

                    if ($q) {

                        echo '<script> alert("permission added")</script>';

                    }

                } else {

                    echo "<script> alert('user already have permission')</script>";

                }

            }

            if($_POST['sub'] == 'remove'){

                $str = "DELETE FROM `files_permission` WHERE `user_id`='" . $_POST['user-id'] . "' and `file_id`='" . $_POST['file-id'] . "'";

                $q = mysqli_query($con, $str);

                if ($q) {

                    echo '<script> alert("permission deleted")</script>';

                } 

            }

        }



?>



<body>

    <section class="Register">

        <form id="upload_form" class="content" name="form" method="post" action="filepermission.php">

            <table>

                <h2> Permission </h2>

                <tr>

                    <td colspan="2">



                        <?php



                        $str = "SELECT `user_id`, `name` FROM `users`";

                        $result = mysqli_query($con, $str);

                        echo '<select name="user-id">';

                        while ($row = mysqli_fetch_array($result)) {

                            echo ' <option value="' . $row['user_id'] . '">' . $row['name'] . '</option>';

                        }

                        echo '  </select>'; ?>

                    </td>

                </tr>

                <tr>

                    <td colspan="2"><?php

                                    $str = "SELECT `id`, `filename` FROM `files`";

                                    $result = mysqli_query($con, $str);

                                    echo '<select name="file-id">';

                                    while ($row = mysqli_fetch_array($result)) {

                                        echo ' <option value="' . $row['id'] . '">' . $row['filename'] . '</option>';

                                    }

                                    echo '  </select>';

                                    ?></td>

                </tr>

                <tr>

                    <td colspan="2"> <input class="subBut" type="submit" name="sub" value="insert" /></td>

                </tr>

                <tr>

                    <td colspan="2"> <input class="subBut" type="submit" name="sub" value="remove" /></td>

                </tr>

        </form>

    </section>

    <script src="../../scripts/jquery-3.4.1.min.js"></script>

    <script src="../../scripts/bootstrap.min.js"></script>

</body>



</html>