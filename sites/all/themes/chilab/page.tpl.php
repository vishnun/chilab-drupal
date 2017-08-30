<?php if (theme_get_setting('scrolltop_display')): ?>
    <div id="toTop"><i class="material-icons">keyboard_arrow_up</i></div>
<?php endif; ?>

<?php if ($page['header_top_left'] || $page['header_top_right']) : ?>
    <!-- #header-top -->
    <div id="header-top" class="clearfix">
        <div class="container">

            <!-- #header-top-inside -->
            <div id="header-top-inside" class="clearfix">
                <div class="">

                    <?php if ($page['header_top_left']) : ?>
                        <div class="<?php print $header_top_left_grid_class; ?>">
                            <!-- #header-top-left -->
                            <div id="header-top-left" class="clearfix">
                                <div class="header-top-area">
                                    <?php print render($page['header_top_left']); ?>
                                </div>
                            </div>
                            <!-- EOF:#header-top-left -->
                        </div>
                    <?php endif; ?>

                    <?php if ($page['header_top_right']) : ?>
                        <div class="<?php print $header_top_right_grid_class; ?>">
                            <!-- #header-top-right -->
                            <div id="header-top-right" class="clearfix">
                                <div class="header-top-area">
                                    <?php print render($page['header_top_right']); ?>
                                </div>
                            </div>
                            <!-- EOF:#header-top-right -->
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <!-- EOF: #header-top-inside -->

        </div>
    </div>
    <!-- EOF: #header-top -->
<?php endif; ?>

<!-- #header -->
<header id="header" class="clearfix">

    <!-- #header-inside -->

    <div class="row header-row">
        <nav>
            <div class="nav-wrapper col l10 offset-l1 s12">

                <?php if ($logo): ?>
                        <a class="brand-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img
                                    src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/> </a>
                <?php endif; ?>
		        <span id="headname" >Learning and Congnition Lab</span>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <?php if ($page['navigation']) : ?>
                    <?php print render($page['navigation']); ?>
                <?php else : ?>
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('right hide-on-med-and-down'), 'id' => array('nav-mobile'),), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'),),)); ?>
                <?php endif; ?>


                <?php if ($page['navigation']) : ?>
                    <?php print render($page['navigation']); ?>
                <?php else : ?>
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('side-nav'), 'id' => array('mobile-demo'),), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'),),)); ?>
                <?php endif; ?>

            </div>
        </nav>
    </div>
    <!-- EOF: #header-inside -->

</header>
<!-- EOF: #header -->

<?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">
        <div class="container">

            <!-- #banner-inside -->
            <div id="banner-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">

                        <div class="banner-area">
                            <?php print render($page['banner']); ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- EOF: #banner-inside -->

        </div>
    </div>
    <!-- EOF:#banner -->
<?php endif; ?>

<!-- #page -->
<div id="page" class="clearfix <?php print $page['class'] ?>">

    <!-- #messages-console -->
    <?php if ($messages): ?>
        <div id="messages-console" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php print $messages; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- EOF: #messages-console -->

    <?php if ($page['highlighted']): ?>
        <!-- #highlighted -->
        <div id="highlighted">
            <div class="container">

                <!-- #highlighted-inside -->
                <div id="highlighted-inside" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <?php print render($page['highlighted']); ?>
                        </div>
                    </div>
                </div>
                <!-- EOF:#highlighted-inside -->

            </div>
        </div>
        <!-- EOF: #highlighted -->
    <?php endif; ?>

    <!-- #main-content -->
    <div id="main-content">
        <div class="<?php print $page['class'] ?>">

            <div class="row">


                <section class="row">

                    <!-- #promoted -->
                    <?php if ($page['promoted']): ?>
                        <div id="promoted" class="clearfix">
                            <div id="promoted-inside" class="clearfix">
                                <?php print render($page['promoted']); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- EOF: #promoted -->

                    <!-- #main -->
                    <div id="main" class="clearfix">

                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title hide"
                                                 id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>

                        <!-- #tabs -->
                        <?php if ($tabs): ?>
                            <div class="edit-tabs">
                                <?php print render($tabs); ?>
                            </div>
                        <?php endif; ?>
                        <!-- EOF: #tabs -->

                        <?php print render($page['help']); ?>

                        <!-- #action links -->
                        <?php if ($action_links): ?>
                            <ul class="action-links">
                                <?php print render($action_links); ?>
                            </ul>
                        <?php endif; ?>
                        <!-- EOF: #action links -->

                        <?php if (theme_get_setting('frontpage_content_print') || !drupal_is_front_page()): ?>
                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>
                        <?php endif; ?>

                    </div>
                    <!-- EOF:#main -->

                </section>

                <?php if ($page['sidebar_second']): ?>
                    <aside class="<?php print $sidebar_second_grid_class; ?>">
                        <!--#sidebar-->
                        <section id="sidebar-second" class="sidebar clearfix">
                            <?php print render($page['sidebar_second']); ?>
                        </section>
                        <!--EOF:#sidebar-->
                    </aside>
                <?php endif; ?>

            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->

</div>
<!-- EOF: #page -->

<?php if ($page['bottom_content']): ?>
    <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
        <div class="container">

            <!-- #bottom-content-inside -->
            <div id="bottom-content-inside" class="clearfix">
                <div class="bottom-content-area">
                    <div class="row">
                        <div class="col-md-12">
                            <?php print render($page['bottom_content']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
<?php endif; ?>


<?php if ($page['sub_footer_left'] || $page['footer']): ?>
    <div id="subfooter" class="clearfix">
        <div class="container">

            <!-- #subfooter-inside -->
            <div id="subfooter-inside" class="clearfix">
                <div class="row">


                    <div class="col m4">
                        <!-- #subfooter-right -->

                        <?php if (theme_get_setting('credits_display')): ?>
                            <!-- #credits -->
                            <div class="subfooter-area">
                                <div class="block">
                                    <p><img style="max-width: 340px; margin-left: -20px;" alt="Institute for the Science of Teaching &amp; Learning" src="./sites/all/themes/chilab/images/istl-logo.png"></p>
                                    <div class="address">1000 S. Forest Mall</div>
                                    <div class="address">Tempe, AZ 85281</div>
                                </div>
                            </div>
                            <!-- EOF: #credits -->
                        <?php endif; ?>
                        <!-- EOF: #subfooter-right -->
                    </div>


                    <div class="col m4">
                        <div class="subfooter-area">
                            <div class="block">
                                <ul class="footer-links">
                                <li><a href="https://istl.asu.edu/" target="_blank">Institue of Science of Teaching And Learning</a></li>
                                <li><a href="https://www.asu.edu/" target="_blank">Arizona State University</a></li>
                                <li><a href="https://ies.ed.gov/" target="_blank">Institute of Education Sciences</a></li>
                                <li><a href="https://nsf.gov/" target="_blank">National Science Foundation</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col m4">
                        links2
                    </div>
                </div>
            </div>
            <!-- EOF: #subfooter-inside -->

        </div>
    </div><!-- EOF:#subfooter -->
<?php endif; ?>
