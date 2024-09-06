<?php
/* Template Name: Skills */

get_header(); ?>


<main id="content" class="container">
<?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } ?>

    <?php


    $args = [
        'post_type' => 'project',
        'posts_per_page' => 6,
        'orderby' => 'rand'
    ];


    $project_query = new WP_Query($args);


    if ($project_query->have_posts()) : ?>
        <section class="projects">
            <h2 class="is-class-headline"><?php _e('skills', 'devsign'); ?></h2>
            <div class="splide" data-splide='{
                   "perPage":1,
                   "pagination":false,
                   "mediaQuery":"min",
                   "breakpoints":{
                       "768":{
                           "perPage":2,
                           "gap":15
                       },
                       "1200":{
                           "perPage":4,
                           "gap":20
                       }
                   }
               }'>
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
                            <li class="splide__slide">
                                <figure class="project">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('project');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder.png" alt="placeholder">';
                                        } ?>
                                    </a>
                                    <figcaption class="project-caption">
                                        <?php the_title(sprintf('<h2 class="project-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
                                    </figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </section>
      
       
    <?php
        wp_enqueue_style('splide-style');
        wp_enqueue_script('slider-script');
    endif;
    wp_reset_postdata();
    ?>

</main>
<?php get_footer();
