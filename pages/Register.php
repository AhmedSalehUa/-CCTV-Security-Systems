<!DOCTYPE html>
<?php include '../languages/languageInPage.php'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registeration FORM </title>
    <link rel="stylesheet" type="text/css" href="../styles/register.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/nav.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
</head>
<?php
include '../phpFormat/dataBaseIni.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["name"] != null) {
    $userName = strip_tags($_POST["name"]);
    $pass = strip_tags($_POST["password"]);
    $passConf = strip_tags($_POST["confirm-password"]);
    $phoneNumber = strip_tags($_POST["phone-num"]);
    $fristName = strip_tags($_POST["frist_name"]);
    $lastName = strip_tags($_POST["last_name"]);
    $email = strip_tags($_POST["mail"]);
    $orgName = null !== strip_tags($_POST["org_name"]) ? strip_tags($_POST["org_name"]) : 'null';
    $orgType = strip_tags($_POST["type"]);
    $job = strip_tags($_POST["job_des"]);
    if (strlen($pass) >= 8) {
        if ($pass === $passConf) {
            $strUser = "SELECT `user_id` FROM `users` WHERE `name`='$userName'";
            $strStat = mysqli_query($con, $strUser);
            if (mysqli_fetch_array($strStat)[0] === null) {
                if (is_numeric($phoneNumber)) {
                    $str = "select ifnull(max(user_id),0) + 1 from users";
                    $strStat = mysqli_query($con, $str);
                    $id = mysqli_fetch_array($strStat)[0];
                    $strUser = "INSERT into users values ($id,'$userName','$pass','user');";
                    $strDetails = "INSERT INTO `us_details` VALUES ($id,'$fristName','$lastName','$email',' $phoneNumber','$orgName','$job','$orgType');";
                    $p = mysqli_query($con, $strUser);
                    $q = mysqli_query($con, $strDetails);
                    if ($p) {
                        if ($q) {
                            echo '<script> window.open("login.php", "_self");</script>';
                        }
                    } else {
                        echo mysqli_error($con);
                    }
                } else {
                    echo "<script type='text/javascript'>alert('enter valid phone number');</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('user name already found');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('password dont match');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('password must be more than 8 character');</script>";
    }
}
?>

<body>

    <section class="Register">
        <form class="content" method="POST">
            <table>
                <h2> Register </h2>
                <tr>
                    <td> <input type="text" value="<?php echo (isset($fristName)) ? $fristName : ''; ?>" placeholder="<?php echo lang('first_name') ?>" name="frist_name"></td>
                    <td> <input type="text" value="<?php echo (isset($lastName)) ? $lastName : ''; ?>" placeholder="<?php echo lang('last_name') ?>" name="last_name"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="text" value="<?php echo (isset($userName)) ? $userName : ''; ?>" placeholder="<?php echo lang('user_name') ?>" name="name"></td>
                </tr>
                <tr class="trImg">
                    <td colspan="3">
                        <input id="password" value="<?php echo (isset($pass)) ? $pass : ''; ?>" onfocus="showHintIcon('password');" onfocusout="showHint('checkDiv', '#FAFAFA' ,'out');" onkeyup="checkPassword();" type="password" placeholder="<?php echo lang('password') ?>" name="password">
                        <div id="checkDiv">
                            <h6 id="checkString" hidden>Should Contain A a [@,.,-,_]</h6>
                            <img id="check" hidden src="../img/wrong.svg" onmouseover="showHint('checkDiv', '#ff5a6e' ,'in');" onmouseout="showHint('checkDiv', '#FAFAFA' ,'out');">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input id="conPassword" value="<?php echo (isset($passConf)) ? $passConf : ''; ?>" onfocus="showHintIcon('confirm');" onfocusout="showHintCon('checkDivCon', '#FAFAFA' ,'out');" onkeyup="confirmPassword();" type="password" placeholder="<?php echo lang('confirm_password') ?>" name="confirm-password">
                        <div id="checkDivCon">
                            <h6 id="checkStringCon" hidden>Password didnt match</h6>
                            <img id="checkCon" hidden src="../img/wrong.svg" onmouseover="showHintCon('checkDivCon', '#ff5a6e' ,'in');" onmouseout="showHintCon('checkDivCon', '#FAFAFA' ,'out');">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="email" value="<?php echo (isset($email)) ? $email : ''; ?>" placeholder="<?php echo lang('email') ?>" name="mail"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" value="<?php echo (isset($phoneNumber)) ? $phoneNumber : ''; ?>" placeholder="<?php echo lang('phone_number') ?>" name="phone-num"></td>
                </tr>
                <tr>
                    <td><input type="text" value="<?php echo (isset($orgName)) ? $orgName : ''; ?>" placeholder="<?php echo lang('company_name') ?>" name="org_name"></td>
                    <td>
                        <select name="job_des">
                            <option value="guest"><?php echo lang('guest') ?></option>
                            <option value="Manager"><?php echo lang('manager') ?></option>
                            <option value="Owner"><?php echo lang('owner') ?></option>
                            <option value="Sales Officer"><?php echo lang('sales') ?></option>
                            <option value="Maintaince Officer"><?php echo lang('maintaince') ?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input id="radio1" type="radio" name="type" value="Private Organization">
                        <h5 onclick="selctRadio('radio1');"><?php echo lang('private_organization') ?></h5>
                    </td>
                    <td><input id="radio2" type="radio" name="type" value="Government Organization">
                        <h5 onclick="selctRadio('radio2');"><?php echo lang('government_organization') ?></h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button name="sub"><?php echo lang('submit') ?></td>
                </tr>
                <tr>
                    <td><a id="login" href="login.php"><?php echo lang('already') ?></a></td>
                </tr>
                <tr>
                    <form class="lang_form" action="index.php" method="post">
                        <input class="link_input" id="lang_value" type="hidden" name="lang" value="ar" />
                        <button id="lang_name" class="link_button">AR</button>
                    </form>
                </tr>
            </table>
        </form>
    </section>
    <?php
    include '../languages/languageChanger.php';
    ?>
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
</body>