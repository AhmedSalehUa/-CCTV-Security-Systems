<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php
    session_start();
    include 'dataBaseIni.php';
    include '../statics/openLinks.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = strip_tags($_POST['username']);
        $pass = strip_tags($_POST['password']);
        $str = "SELECT user_id from users where name='$name' and password='$pass'";
        $q = mysqli_query($con, $str);
        $id = mysqli_fetch_array($q);
        if ($id['user_id'] === null) {
            echo "<script type='text/javascript'>alert('user or password is invalid'); window.open('../pages/login.php', '_self');</script>";
        } else {
            $star = "SELECT rule from users where user_id='" . $id['user_id'] . "'";
            $qa = mysqli_query($con, $star);
            $rule = mysqli_fetch_array($qa);
            $_SESSION['user_id'] = $id['user_id'];
            $_SESSION['user_name'] = $name;
            $_SESSION['rule'] = $rule['rule'];
            echo '<script type="text/javascript">         
            sessionStorage.setItem("user_id", "' . @$_SESSION['user_id'] . '");' .
                'sessionStorage.setItem("user_name",  "' . @$_SESSION['user_name'] . '");' .
                'sessionStorage.setItem("user_rule",  "' . @$_SESSION['rule'] . '");' .
                '</script>';
            echo "<script> openLink('../index.php','" . $_POST['lang'] . "','','');</script>";
        }
    }

    ?>
</body>

</html>