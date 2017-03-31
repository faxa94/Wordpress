<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>

        <!-- Viewport mobile tag for sensible mobile support -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <nav class="navbar navbar-light"  style="background-color: #e3f2fd;" >
            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker())
            );
            ?>
        </nav>
    </body>
</html>