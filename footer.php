<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body <?php body_class(); ?>>

<footer id="footer-page" class="container columns">
    <div class="social-links column">
        <?php include('social_links.php'); ?>
    </div>

    <nav id="nav-footer" class="column">
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'menu_class' => 'nav-menu',
            'container' => false,
            'fallback_cb' => false,
            'depth' => 1
        ]);
        ?>
    </nav>

    <div class="copyright column">
        <?php
        echo sprintf(__('&copy; %1$s, %2$s', 'lookup'), date('Y'), get_bloginfo('name'));
        ?>
    </div>
</footer>

<div id="to-top" class="show">
        <span class="material-symbols-outlined">
        <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#e8eaed"><path d="M440-122q-121-15-200.5-105.5T160-440q0-66 26-126.5T260-672l57 57q-38 34-57.5 79T240-440q0 88 56 155.5T440-202v80Zm80 0v-80q87-16 143.5-83T720-440q0-100-70-170t-170-70h-3l44 44-56 56-140-140 140-140 56 56-44 44h3q134 0 227 93t93 227q0 121-79.5 211.5T520-122Z"/></svg>
        </span>
    </div>

<?php wp_footer(); ?>
</body>
</html>
