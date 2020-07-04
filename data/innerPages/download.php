
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $fileName = $_POST["filename"];
    $file = '../files/' . $fileName;
    if (file_exists($file)) {
        include "../../phpFormat/dataBaseIni.php";
        $userId = $_POST['uid'];
        $str = "select id from files_permission where user_id='" . $userId . "' and file_id in (SELECT `id` FROM `files` WHERE `filename`='" . $_POST["filename"] . "')";
        $q = mysqli_query($con, $str);
        $id = mysqli_fetch_array($q);
        if ($id['id'] == null) {
            echo '<script>alert("file access is denied for your account contact us to access it"); </script>';
            echo '<script>window.close();</script>';
        } else {
            echo "<a id='dow' href='" . $file . "' download></a>";
            echo '<script>document.getElementById("dow").click();</script>';
            $sqlStr = "INSERT INTO `download_history`(`user_id`, `file_name`, `date`) VALUES ('$userID','$fileName','CURRENT_DATE();')";
            echo '<script>window.close();</script>';
        }
    } else {
        echo "<script>alert('file not found contact us to fix this problem'); window.close();</script>";
    }
}
?>