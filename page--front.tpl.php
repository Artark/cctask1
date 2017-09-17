<div id="page-wrapper"><div id="page">

        <div id="header" class="header"><div class="header__inner section clearfix">

                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="header__logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>

                <?php print render($page['header']); ?>

                <?php if ($main_menu): ?>
                    <div id="navigation" class="header__nav"><div class="section">
                            <a id="oc-menu-toggle" href="javascript:void(0)" class="header__nav__menu-toggle oc-button">
                                <i class="fa fa-bars"></i>
                            </a>
                            <?php print theme('links__system_main_menu', array(
                                'links' => $main_menu,
                                'attributes' => array(
                                    'id' => 'main-menu',
                                    'class' => array('inline', 'clearfix')
                                ),
                            )); ?>
                        </div></div> <!-- /.section, /#navigation -->
                <?php endif; ?>

            </div></div> <!-- /.section, /#header -->

        <div id="main-wrapper"><div id="main" class="clearfix">

                <div id="content" class="column"><div class="section">
                        <?php print render($page['content']); ?>
                    </div></div> <!-- /.section, /#content -->

            </div></div> <!-- /#main, /#main-wrapper -->

        <div id="footer" class="footer l-align-center"><div class="footer__inner section">
                <?php if ($social_menu): ?>
                    <div id="social-navigation" class="social-nav footer__social-nav"><div class="content">
                        <?php print theme('links__system_menu_social_menu_menu', array('links' => $social_menu)); ?>
                    </div></div> <!-- /#social-navigation -->
                <?php endif; ?>

                <?php print render($page['footer']); ?>
            </div></div> <!-- /.section, /#footer -->

    </div></div> <!-- /#page, /#page-wrapper -->