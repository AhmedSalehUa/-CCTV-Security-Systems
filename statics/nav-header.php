
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
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
                <li><a href="mailto:info@acapy-trade.com?Subject=Enquiry" target="_top"><i class="far fa-envelope"></i></a> </li>
                <li><a href="https://api.whatsapp.com/send?phone=+201280969095&text=&source=&data=" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li>
                    <form class="lang_form" action="index.php" method="post">
                        <input id="lang_value" type="hidden" name="lang" value="ar" />
                        <button id="lang_name" class="link_button">AR</button>
                    </form>
                </li> 
            </ul>
            <ul class="nav navbar-nav navbar-right nav-items">
                <li><a id="login_out" href="pages/login.php?lang=<?php echo $language ?>"><?php echo lang('login') ?><span class="sr-only">(current)</span></a> </li>
                <li><a id="nav_order" onclick="return openLink('pages/order.php','<?php echo $language ?>',new Array('page'),new Array('1'));"><?php echo lang('order') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_works" onclick="return openLink('pages/past-work.php','<?php echo $language ?>','','');"><?php echo lang('works') ?> <span class="sr-only">(current)</span></a> </li>
                <li><a id="nav_contact_us" onclick="return openLink('pages/contact-us.php','<?php echo $language ?>','','');"><?php echo lang('contact_us') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_register" onclick="return openLink('pages/Register.php','<?php echo $language ?>','','');"><?php echo lang('register') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_programs" onclick="return openLink('data/index.php','<?php echo $language ?>','','');"><?php echo lang('programs') ?><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse onclick="" ,new Array('lang', 'page'),new Array('ar', '1')-->
    </div>
    <!-- /.container-fluid pages/order.php?page=1-->
</nav>