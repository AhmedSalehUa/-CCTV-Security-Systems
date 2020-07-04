
<?php
include '../../phpFormat/dataBaseIni.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if(isset($_POST['photo_id'])){
        $rt="DELETE FROM `past_works_inside_photo` WHERE `id` = '".$_POST['photo_id']."'";
        if(mysqli_query($con,$rt)){
            echo "<script>alert('img Deleted'); window.close();</script>";
        }else{
            echo "<script>alert('img not deleted'); window.close();</script>";
        }
   }else{
    echo "<script>alert('img not found'); window.close();</script>";
   }
}
?>