<!DOCTYPE html>
<html lang="ar">
<?php
        include '../languages/arabic.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acapy Trade</title>
    <link rel="stylesheet" type="text/css" href="../styles/contactus.css">
    <link rel="stylesheet" type="text/css" href="../styles/all.min.css">
</head>
<body>
    <?php
    session_start();
    include '../phpFormat/dataBaseIni.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guest-name'])) {
        $name = strip_tags($_POST['guest-name']);
        $phone  = strip_tags($_POST['guest-phone']);
        $mail  = strip_tags($_POST['guest-mail']);
        $messege  = strip_tags($_POST['guest-messege']);
        if (is_numeric($phone)) {
            if (@$_SESSION['sent'] == 'true') {
                echo "<script> alert('Messege already sent') </script>";
            } else {
                $str = "INSERT INTO `contact_us`( `sender_name`, `sender_phone`, `sender_email`, `messege`) VALUES ('$name','$phone','$mail','$messege')";
                $q = mysqli_query($con, $str);
                if ($q) {
                    echo "<script> alert('Messege sent Sucessfuly') </script>";
                    $_SESSION['sent'] = 'true';
                } else {
                    echo mysqli_error($con);
                }
            }
        } else {
            echo "<script>alert('Please Enter Valide Number')</script>";
        }
    }else{
        $_SESSION['sent'] = 'false';
    }
    ?>
    <header>
        <div class="header-content">
            <h1><?php echo lang('contact');?><span><?php echo lang('us');?> </span></h1>
            <div class="short-line"></div>
            <h3> <?php echo lang('contact_phone_1');?> &nbsp; - &nbsp;<?php echo lang('contact_phone_2');?></h3>
        </div>
    </header>
    <article>
        <form class="contact-form" method="POST">
            <table>
                <tr>
                    <td colspan="2"><input type="text" name="guest-name" placeholder="<?php echo lang('contact_name');?>" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="guest-phone" placeholder="<?php echo lang('contact_phone');?>" required></td>
                    <td><input type="email" name="guest-mail" placeholder="<?php echo lang('contact_mail');?>" required></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="3"><textarea id="mass" name="guest-messege" placeholder="<?php echo lang('contact_messege');?>" required></textarea></td>
                </tr>
                <tr>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td><input type="submit" value="<?php echo lang('contact_send');?>"></td>
                </tr>
            </table>
        </form>
    </article>
    <aside>
        <a href="https://www.facebook.com/Acapy.Trade" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href=" https://www.linkedin.com/in/acapy-trade-208909103" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="mailto:acapy_trade@yaho.com?Subject=Enquiry" target="_top"><i class="far fa-envelope fa-large"></i></a>
        <a href="https://api.whatsapp.com/send?phone=+201280969095&text=&source=&data=" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
    </aside>
    <?php
    include '../statics/footer.php';
    ?>
   
   <script>
            if (sessionStorage.getItem("user_id") == null) {
                document.getElementById("login_out").innerHTML = "<?php echo lang('login'); ?>";
                document.getElementById("login_out").href = "login.php?lang=<?php echo $language ?>";
            } else {
                document.getElementById("login_out").innerHTML = "<?php echo lang('logout'); ?>";
                document.getElementById("login_out").href = "logout.php?lang=<?php echo $language ?>";
            }
        </script>
</body>
<html>