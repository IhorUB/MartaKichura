<?php
/**
 * Template part for displaying posts
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
         
        else :
       
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
        <div class="blog-details">
            <a href="<?php echo get_permalink(); ?>">
                <h3>
                    <?php the_title(); ?>
                </h3>
            </a>
            <p>
                <span>
                    <?php the_date(); ?></span>
                <span>
                    <?php the_category('/ '); ?></span>
            </p>
        </div>
        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="blog-text">
        <div>
            <?php the_content(); ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->