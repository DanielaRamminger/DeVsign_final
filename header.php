<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#content" class="screen-reader-text">
        <?php _e('Skip to Content', 'lookup'); ?>
    </a>

    <header id="header">
        <div class="container">
            <div id="brand">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    // Falls kein Logo vorhanden ist, zeige den Site-Titel an
                    ?>
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                    <?php
                }
                ?>
            </div>
            
            <nav id="navbar">
                <input type="checkbox" id="nav-toggle">
                <label for="nav-toggle" id="menu-button">
                    <span id="menu-button-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text"><?php _e('Open/Close Navigation', 'lookup'); ?></span>
                </label>
                
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id'        => 'nav-main',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ]);
                ?>
            </nav>

            <aside class="sidebar">
        <a href="tel:+6764313781" class="icon-btn"><i class="material-icons">phone</i></a>
        <a href="mailto:de-v-sign@outlook.com" class="icon-btn"><i class="material-icons">email</i></a>
    </aside>
        </div>
    </header>

    <div id="content" class="site-content">
        
