<div id="header" class="container header">

    <div class="col-lg-12 col-md-12 col-sm-12 no-gutter clearfix" style="background: #EE7D00; min-height: 60px; margin-bottom: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-3 margin-no padding-no mobile-display" style="background: #fff"><a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/echo360-web-logo.png" style="width: 100%;"/></a></div>
        <div class="col-lg-9 col-md-9 col-sm-9" style="background: #EE7D00">
            <div class="navbar-header" style="">
                <img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/library/images/echo360-web-logo.png" style="height: 60px; position: absolute; float: left; left: 0px !important;"/>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/resp_navi_bg@2x.png"/>
                </button>
            </div>
            <div id="top-nav" class="navbar-collapse collapse navbar-header col-lg-12 col-md-12 col-sm-12" style="">
                <nav role="navigation">
                    <?php wp_nav_menu(array(
                        'container' => false,                           // remove nav container
                        'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                        'menu_class' => 'nav navbar-nav',               // adding custom nav class
                        'theme_location' => 'main-nav',                 // where it's located in the theme
                        'before' => '',                                 // before the menu
                        'after' => '',                                  // after the menu
                        'link_before' => '',                            // before each link
                        'link_after' => '',                             // after each link
                        'depth' => 0,                                   // limit the depth of the nav
                        'fallback_cb' => ''                             // fallback function (if there is one)
                    )); ?>
                    </nav>
            </div><!--/.nav-collapse -->
        </div>

        <!-- Fixed navbar -->

        <div class="clearfix"></div>
    </div>
</div><!-- END: header -->