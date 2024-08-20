<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
    <a href="#content" class="screen-reader-text">
        <?php _e('Skip to Content', 'lookup'); ?>
    </a>
    <nav id="navbar">
  
            <input type="checkbox" id="nav-toggle">
            <label for="nav-toggle" id="menu-button">
                <span id="menu-button-icon" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Open/Close Navigation','lookup'); ?></span>
            </label>
            
            <?php
              
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id' => 'nav-main',
                    'menu_class' => 'nav-menu',
                    'container' => false,
                    'fallback_cb' => false,
                    'depth' => 2
                ]);
            ?>
            
        </div>
    </nav>
    <div class="container">
            <div id="brand">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
    