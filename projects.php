<?php

get_header(); ?>
<main id="content" class="container">
    <?php
    the_title('<h1 class="is-style-headline">', '</h1>');

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'project',
        'posts_per_page' => 12,
        'orderby' => 'rand',
        'paged' => $paged
    ];

    $project_query = new WP_Query($args);

   
    if ($project_query->have_posts()) : ?>
        <div class="projects-grid">
            <?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
                <div class="item">
                    <figure class="project">
                        <a href="<?php the_permalink() ?>">
                            <?php if (has_post_thumbnail()){
                                the_post_thumbnail('project');
                            } else {
                                echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" alt="placeholder">';
                            } ?>
                        </a>
                        <figcaption class="project-caption">
                            <?php the_title( sprintf( '<h2 class="project-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php 
                           
                            ?>
                        </figcaption>
                    </figure>
                </div>
            <?php endwhile; ?>
        </div>
    <?php 
    pagination($paged, $project_query->max_num_pages);
    endif;
    wp_reset_postdata();

 if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }

    ?>
</main>
<?php get_footer();
