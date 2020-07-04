<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link rel="StyleSheet" type="text/css" href="../styles/global.css">
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
include '../../phpFormat/dataBaseIni.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = mysqli_fetch_array(mysqli_query($con, "SELECT max(`id`)+1  FROM `products` "))[0];
    $brandName = strip_tags($_POST['brandName']);
    $model = strip_tags($_POST['model']);
    $shortDetails = strip_tags($_POST['shortDetails']);
    $longDetails = strip_tags($_POST['longDetails']);
    $category_id = strip_tags($_POST['category_id']);
    $type_id = strip_tags($_POST['type_id']);
    if ((@$_FILES['file1']['name'] != "")) {
        $target_dir = "../../products/";
        $data_dir = "../products/";
        $file = $_FILES['file1']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['file1']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;
        $data_filename_ext = $data_dir . $filename . "." . $ext;
        @move_uploaded_file($temp_name, $path_filename_ext); 
        $sql="INSERT INTO `products`(`id`, `brand_name`, `model`, `photo`, `short_details`, `long_details`, `category_id`, `type_id`) 
        VALUES ('$id','$brandName','$model','$data_filename_ext','$shortDetails','$longDetails','$category_id','$type_id')";
        $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
        if (isset($current_id)) {
            echo "<script> alert('uploaded') </script>";
        }
    } else {
        echo "<script> alert('err 1') </script>";
    }
}
?>

<body>
<?php
        include '../../statics/nav_controlPanelPages.php';
    ?>
    <section>
        <form id="upload_form" class="content" name="form" method="post" action="AddProduct.php" enctype="multipart/form-data">
            <h2>Add Product</h2>
            <table>
                <tr>
                    <td><input value="" id="brandName" type="text" placeholder="Brand Name" name="brandName"></td>
                </tr>
                <tr>
                    <td><input value="" id="model" type="text" placeholder="Model" name="model"></td>
                </tr>
                <tr>
                    <td><input type="file" name="file1" id="file1" /></td>
                </tr>
                <tr>
                    <td><input value="" id="shortDetails" type="text" placeholder="Short Details" name="shortDetails"></td>
                </tr>
                <tr>
                    <td><textarea rows="4" cols="50" name="longDetails" placeholder="Long Details"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <select name="category_id">
                            <option value="1">Security systems</option>
                            <option value="3">Communication systems</option>
                            <option value="2">Office equipment</option>
                            <option value="4">Solar energy applications</option>
                            <option value="5">Educational systems</option>
                            <option value="6">IT Solutions</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="type_id">
                            <option value="1">Theft Alarms</option>
                            <option value="2">Fire Alarms</option>
                            <option value="3">Cctv</option>
                            <option value="4">Security Gates</option>
                            <option value="5">Office Equipment</option>
                            <option value="6">Finger Print</option>
                            <option value="7">Photo Copier</option>
                            <option value="8">Iron Storage</option>
                            <option value="9">Solar Heaters</option>
                            <option value="10">Solar Power</option>
                            <option value="11">Communication Systems</option>
                            <option value="12">Information Networks</option>
                            <option value="13">Sound Systems</option>
                            <option value="14">Fax</option>
                            <option value="15">Language Labs</option>
                            <option value="16">Data Show</option>
                            <option value="17">Interactive Whiteboard</option>
                            <option value="18">Web Applications</option>
                            <option value="19">Desktop Applications</option>
                            <option value="20">Mobile Apllications</option>
                        </select>
                    </td>
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
                    <td> <input class="subBut" type="submit" name="submit" value="Upload File" onclick="uploadFile()"></td>
                </tr>
            </table>
        </form>
    </section>
</body>

</html>