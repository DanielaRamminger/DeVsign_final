<footer id="footer-page" class="container columns">
<div class="social-links column">
    <?php
    include('social_links.php');
    ?>
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
    <?php _e('𖤂', 'lookup'); ?>
</div>

<?php
wp_footer();
?>
</body>

</html>