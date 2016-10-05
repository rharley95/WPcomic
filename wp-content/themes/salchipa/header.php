<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php wp_title(); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>
<body>

<header>

        <nav class="navbar">
<!--            <img src="wp-content/themes/salchipa/assets/img/rose.svg" alt="">-->
         <h1><a href=" <?php bloginfo('url'); ?> "> <?php bloginfo('name'); ?> </a></h1>
<!---->
            <?php

            $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'menu'
            );

            wp_nav_menu( $defaults );

            ?>

        </nav>

</header>
<?php wp_footer(); ?>

