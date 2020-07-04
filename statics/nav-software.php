<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left" href="#">
                    <p>Acapy Trade</p>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-items link-social">
                    <li><a href="https://www.facebook.com/Acapy.Trade" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                    <li><a href=" https://www.linkedin.com/in/acapy-trade-208909103" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                    <li><a href="mailto:acapy_trade@yaho.com?Subject=Enquiry" target="_top"><i class="far fa-envelope"></i></a> </li>
                    <li><a href="https://api.whatsapp.com/send?phone=+201280969095&text=&source=&data=" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right nav-items">
                    <li><a id="login_out" href="../pages/login.php?lang=<?php echo $language ?>"><?php echo lang('login') ?><span class="sr-only">(current)</span></a> </li>
                    <li><a onclick="return openLink('../index.php','<?php echo $language ?>','','');"><?php echo lang('home_page') ?><span class="sr-only">(current)</span></a></li>
                    <li><a onclick="return openLink('../pages/Register.php','<?php echo $language ?>','','');"><?php echo lang('register') ?> <span class="sr-only">(current)</span></a></li>
                    <li><a onclick="return openLink('innerPages/upload.php','<?php echo $language ?>','','');"><?php echo lang('upload') ?> <span class="sr-only">(current)</span></a></li>
                    <li><a onclick="return openLink('../controlPanel/index.php','<?php echo $language ?>','','');"><?php echo lang('control_panel') ?> <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>