<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Past Work Main Photos</title>
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
   if ((@$_FILES['file1']['name'] != "")) {
        if (isset($_POST['place_id'])) {
            $target_dir = "../../img/";
            $dat_dir = "../img/";
            $file = $_FILES['file1']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['file1']['tmp_name'];
            $path_filename_ext = $target_dir . $filename . "." . $ext;
            $path_filename_ext_data = $dat_dir . $filename . "." . $ext;
            @move_uploaded_file($temp_name, $path_filename_ext);
            $sql = "INSERT INTO `past_works_photo`(`past-id`, `photo`) 
                 VALUES ('".$_POST['place_id']."','$path_filename_ext_data')";
            $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
            if (isset($current_id)) {
                echo "<script> alert('uploaded') </script>";
            }
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
        <form id="upload_form" class="content" name="form" method="post" action="AddPastWorkPlacesPhoto.php" enctype="multipart/form-data">
            <h2>Add Pastwork Places Photo</h2>
            <table>
                <tr>
                    <td>
                        <?php
                        $str = "SELECT `id`, `place_name`, `place_location` FROM `pastworks`";
                        $result = mysqli_query($con, $str);
                        echo '<select name="place_id">';
                        while ($row = mysqli_fetch_array($result)) {
                            echo ' <option value="' . $row['id'] . '">' . $row['id'] . ' / ' . $row['place_name'] . ' / ' . $row['place_location'] . '</option>';
                        }
                        echo '  </select>'; ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" name="file1" id="file1" /></td>
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