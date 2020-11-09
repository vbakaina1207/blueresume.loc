<header>
        <div class="top__line">
            <div class="top__line_left">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu' => 'Top left',
                    'container' => 'div',
                    'container_class' => 'top__line_left-menu',
                ]);
                ?>
                <!--
                <div class="top__line_left-menu">
                    <ul>
                        <li><a href="#Works">Works</a></li>
                        <li><a href="#About">About</a></li>
                    </ul>
                </div>
                -->
            </div>
            <div class="top__line_center">
                <?php if (carbon_get_theme_option('logo_image')) { ?>
                    <div class="top__line_center-logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo carbon_get_theme_option('logo_image'); ?>" alt="img"></a>
                    </div>
                <?php } ?>
            </div>
            <div class="top__line_right">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-2',
                    'menu' => 'Top right',
                    'container' => 'div',
                    'container_class' => 'top__line_right-menu',
                ]);
                ?>
                <!--
                <div class="top__line_right-menu">
                    <ul>
                        <li><a href="#Links">Links</a></li>
                        <li><a href="#Contacts">Contacts</a></li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </header>
    <div id="button_mobile__menu" class="mobile__menu"></div>
    <?php
    wp_nav_menu([
        'theme_location' => 'menu-3',
        'menu' => 'Mobile menu',
        'container' => 'div',
        'container_class' => 'mobile__block',
        'container_id' => 'block_mobile__menu',
    ]);
    ?>