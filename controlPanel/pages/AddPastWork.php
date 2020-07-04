<!DOCTYPE html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Past Work</title>
    <link rel="StyleSheet" type="text/css" href="../styles/global.css">

</head>

<?php 
include '../../phpFormat/dataBaseIni.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = mysqli_fetch_array(mysqli_query($con, "SELECT max(`id`)+1  FROM `past_works` "))[0];
    $place_name = strip_tags($_POST['place_name']);
    $place_location = strip_tags($_POST['place_location']);
    $system_type = null !==  strip_tags($_POST['system_type']) ? strip_tags($_POST['system_type']) : "null";
    $category_id = strip_tags($_POST['category_id']);
    $sql="INSERT INTO `past_works`(`id`, `place_name`, `place_location`, `system_type`, `category_id`) 
    VALUES ('$id','$place_name','$place_location','$system_type','$category_id')";
    $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
    if (isset($current_id)) {
        echo "<script> alert('Added') </script>";
    }
}
?>
<body>
<?php
        include '../../statics/nav_controlPanelPages.php';
    ?>
    <section>
        <form method="POST" target="_self" action="AddPastWork.php">
            <h2>Add Past Work</h2>
            <table>
                <tr>
                    <td><input  value=""  id="place_name" type="text" placeholder="Place Name" name="place_name"></td>
                </tr>
                <tr>
                    <td><input  value=""  id="place_location" type="text" placeholder="Place Location" name="place_location"></td>
                </tr>
                <tr>
                    <td><input  value=""  id="system_type" type="text" placeholder="System Type" name="system_type"></td>
                </tr>
                <tr>
                    <td>
                        <select name="category_id">
                            <option value="1">hotels</option>
                            <option value="2">City ​​Council</option>
                            <option value="3">Government Orqanization</option>
                            <option value="4">hospitals</option>
                            <option value="5">Private Orqanization</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit"></td>
                </tr>
            </table>
        </form>
    </section>
</body>