<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title> <?php echo get_bloginfo( 'name' ); ?> </title>
</head>
<body>

<header>
    <div class="header-content">
        <a href="<?php echo get_home_url(); ?>"><img class="logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/atelierSchier_logo.svg" alt=""></a>
        <?php 
        wp_nav_menu(
            array(
                'theme-location' => 'top-menu',
                'menu_class' => 'header-menu'
            )
        );
        ?>
    </div>

    <button id="toggle-header-button" class="toggle-header-button" onclick="toggleHeader()">
        <div class="hamburger-open">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </button>
</header>