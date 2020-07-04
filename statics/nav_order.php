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
            <a class="navbar-brand navbar-left" type="button " data-toggle="modal" data-target="#myCart">

                <button class="btn-lg btn-primary" type="button " data-toggle="modal" data-target=".bs-example-modal-sm">
                    <i class="fas fa-shopping-cart cartname"></i> <span class=""><?php echo lang('cart') ?></span> <span class="badge">!</span>
                </button>
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
                    <form class="lang_form" id="lang_form" action="../index.php" method="post">
                        <input id="lang_value" type="hidden" name="lang" value="ar" />
                        <button id="lang_name" class="link_button">AR</button>
                    </form>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right nav-items">
                <li><a id="login_out" href="login.php?lang=<?php echo $language ?>"><?php echo lang('login') ?><span class="sr-only">(current)</span></a> </li>
                <li><a id="nav_main" onclick="return openLink('../index.php','<?php echo $language ?>','','');"><?php echo lang('main') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_works" onclick="return openLink('past-work.php','<?php echo $language ?>','','');"><?php echo lang('works') ?> <span class="sr-only">(current)</span></a> </li>
                <li><a id="nav_contact_us" onclick="return openLink('contact-us.php','<?php echo $language ?>','','');"><?php echo lang('contact_us') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_register" onclick="return openLink('Register.php','<?php echo $language ?>','','');"><?php echo lang('register') ?> <span class="sr-only">(current)</span></a></li>
                <li><a id="nav_programs" onclick="return openLink('../data/index.php','<?php echo $language ?>','','');"><?php echo lang('programs') ?><span class="sr-only">(current)</span></a>
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->
</nav>