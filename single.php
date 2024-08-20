<?php get_header(); 
?>
<main id="content" class="container">
    <?php
   
    the_title('<h1 class="is-style-headline">', '</h1>');
    ?>
    <div class="meta">
       
      <!-- <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time> -->
        <?php
        the_category(', '); ?>
    </div>
    <?php
   
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }

   the_tags('<div class="meta tags">#', ' #', '</div>'); ?>
</main>


<aside id="similar-post" class="container">
    <?php 
    $pid = get_the_ID();
    $categories = get_the_category();
    $cat_ids = [];

    if(!empty($categories)){
        $cat_ids = [];
        foreach($categories as $cat){
            $cat_ids[] = $cat->term_id;
        }
    }
    
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post__not_in' => [$pid],
        'category__in' => $cat_ids
    ];

    $similar_posts = new WP_Query($args);

    if ($similar_posts->have_posts()) :
        while ($similar_posts->have_posts()) : $similar_posts->the_post(); ?>
           
           

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
</aside>
<?php get_footer(); ?>
