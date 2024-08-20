<?php 
/*Template Name:BLOG*/
?>
<?php get_header();?>
<main id="content" class="container">
    <h1 class="is-style-headline"><?php 
            
    $page_id_blog = get_option('page_for_posts');
    if($page_id_blog){
       
        echo get_the_title($page_id_blog);
    } else {
        bloginfo('name');
    }
    ?></h1>
      <?php if(have_posts()) : ?>
        <div class="grid-container">
        <?php while( have_posts() ) : the_post(); ?>

            <article class="post grid-item">
                <?php
                 if (has_post_thumbnail()) : ?>
                    <figure class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </figure>
                
                <?php endif; ?>

                    <?php the_title(sprintf('<h2 class="post-title"><a href="%s">',esc_url(get_permalink())),'</a></h2>'); ?>
                <div class="meta">
                    <?php  ?>
                    <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
                    <?php 
                        the_category(', '); ?>
                </div>
            </article>

        <?php endwhile; ?>
        </div>
    <?php else : ?>
        <h2><?php _e('Es wurden keine Beiträge gefunden','lookup'); ?></h2>
    <?php endif; ?>   
    <nav class="pagination">
        <?php 
        echo paginate_links([
            'prev_text' => '<span class="icon-arrow-left" role="img" aria-label="' . __('Vorherige Seite','lookup') . '"></span>',
            'next_text' => '<span class="icon-arrow-right" role="img" aria-label="' . __('Nächste Seite','lookup') . '"></span>'
        ]); ?>
    </nav>
</main>
<?php get_footer();?>