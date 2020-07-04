<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qWVqZkQBubJrewzRC1nBziXz0_dTzheOFr6wEj0YdfY" />
    <meta name="description" content="Security System - office equipment - solar energy - communication systems - educational systems - it solutions all you need is here! We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site & Genuine parts with warranty & Maintenance contracts">
    <title>Acapy Trade Programs</title>
    <link rel="stylesheet" type="text/css" href="../../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/upload.css">
    <script>
        function _(el) {
            return document.getElementById(el);
        }
        function uploadFile() {
            var file = _("file1").files[0];
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();
            formdata.append("file1", file);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "file_upload_parser.php");
            ajax.send(formdata);
        }
        function progressHandler(event) {
            _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
        }
        function completeHandler(event) {
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 0;
        }
        function errorHandler(event) {
            _("status").innerHTML = "Upload Failed";
        }
        function abortHandler(event) {
            _("status").innerHTML = "Upload Aborted";
        }
    </script>
</head>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "GET") {
?> <script>
        if (sessionStorage.getItem("user_rule") == "user") {
            alert('for admins only');
            window.open('../index.php?uid=' + sessionStorage.getItem("user_id"), '_self');
        }
    </script>
<?php  }
include '../../phpFormat/dataBaseIni.php';
if ((@$_FILES['file1']['name'] != "")) {
    // Where the file is going to be stored       
    $target_dir = "../files/";
    $file = $_FILES['file1']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['file1']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;
    include 'config.php';
    /* Check if file already exists    */
    if (file_exists($path_filename_ext)) {
        echo "<script> alert('file is exsist') </script>";
    } else {
        $strDetails = "INSERT INTO `files`( `sec_id`, `filename`, `version`, `bit`, `details`) VALUES ('" . $_POST['section-id'] . "','" . utf8_encode($filename) . "." . $ext . "','" . $_POST['version'] . "','" . $_POST['bit'] . "','" . $_POST['details'] . "');";
        $p = mysqli_query($con, $strDetails);
        @move_uploaded_file($temp_name, $path_filename_ext);
        echo "<script> alert('uploaded') </script>";
    }
}
?>
<body>
    <section class="Register">
        <form id="upload_form" class="content" name="form" method="post" action="upload.php" enctype="multipart/form-data">
            <table>
                <h2> Upload </h2>
                <tr>
                    <td colspan="3"> <input type="text" placeholder="version" name="version" required></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="text" placeholder="details" name="details" required></td>
                </tr>
                <td>
                    <select name="section-id">
                        <option value="1">Security systems</option>
                        <option value="2">Communication systems</option>
                        <option value="3">Office equipment</option>
                        <option value="4">Solar energy applications</option>
                        <option value="5">Educational systems</option>
                        <option value="6">IT Solutions</option>
                        <option value="7">other</option>
                    </select>
                </td>
                <td>
                    <select name="bit">
                        <option value="(32bit)">32bit</option>
                        <option value="(64bit)">64bit</option>
                    </select>
                </td>
                <!-- name="my_file" -->
                <tr>
                    <td colspan="2"> <input type="file" name="file1" id="file1" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p id="loaded_n_total"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> <progress class="progress-bar" id="progressBar" value="0" max="100"></progress></td>
                </tr>
                <tr>
                    <td colspan="2"> <input class="subBut" type="submit" name="submit" value="Upload File" onclick="uploadFile()" /></td>
                </tr>
                <tr>
                    <td><a id="login" href="filepermission.php">give permission to users</a></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="alert alert-info" id="status" role="alert"><span id="status-show">no uploading now</span> </div>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <script src="../../scripts/jquery-3.4.1.min.js"></script>
    <script src="../../scripts/bootstrap.min.js"></script>
</body>
</html>