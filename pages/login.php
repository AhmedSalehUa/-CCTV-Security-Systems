<!DOCTYPE html>
<html>
<?php include '../languages/languageInPage.php'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo lang('login'); ?></title>
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="StyleSheet" type="text/css" href="../styles/login.css">
    <link rel="stylesheet" type="text/css" href="../styles/nav.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
</head>
<?php
include '../statics/nav-individual.php';
session_start();
include '../phpFormat/dataBaseIni.php';
?>

<body>
    <section>
        <form class="inputs" method="POST" action="../phpFormat/authentication.php">
            <h2><?php echo lang('login_btn'); ?></h2>
            <table>
                <tr>
                    <td><input value="<?php echo (isset($name)) ? $name : ''; ?>" id="username" type="text" placeholder="<?php echo lang('user_name'); ?>" name="username"></td>
                </tr>
                <tr>
                    <td><input value="<?php echo (isset($pass)) ? $pass : ''; ?>" id="password" type="password" placeholder="<?php echo lang('password'); ?>" name="password"></td>
                </tr>
                <tr>
                    <td> <input type="submit" value="<?php echo lang('login_btn'); ?>"></td>
                </tr>
                <tr class="reg">
                    <td class="reg">
                        <a id="regLink" href="Register.php"><?php echo lang('login_no_account'); ?></a>
                    </td>
                </tr>
                <tr>
                    <td> <input type="hidden" name="lang" value="<?php echo $language ?>"></td>
                </tr>
            </table>
        </form>
    </section>
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <?php
    include '../statics/footer.php';
    ?>
    <script>
        document.getElementById("login_out").style.visibility = "hidden";
    </script>
    <?php
    include '../languages/languageChanger.php';
    ?>
    <script>
        document.getElementById("lang_form").action = "login.php"
    </script>
</body>

</html>