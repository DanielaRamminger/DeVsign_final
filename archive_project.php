<?php
get_header(); ?>
<main id="content" class="container">
    <h1 class="is-style-headline"><?php _e('Alle Skills', 'interhair'); ?></h1>
    <?php
    if (have_posts()) : ?>
        <div class="projects-grid">
            <?php while (have_posts()) : the_post(); ?>
                <div class="item">
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
                </div>
            <?php endwhile; ?>
        </div>

        <nav class="pagination">
            <?php 
            
            echo paginate_links([
                'prev_text' => '<span class="icon-arrow-left" role="img" aria-label="' . __('Vorherige Seite', 'interhair') . '"></span>',
                'next_text' => '<span class="icon-arrow-right" role="img" aria-label="' . __('Nächste Seite', 'interhair') . '"></span>'
            ]); ?>
        </nav>
    <?php endif; ?>
</main>
<?php get_footer();
