<?php
/**
 * The main template file
 *
 * @package Marta_studio
 */

get_header();
?>
<div class="bg-banner">
    <h2>
        <?php single_cat_title(); ?>
    </h2>
</div>
<div id="primary" class="content-area container">
    <main id="main" class="site-main">
        <div class="row">
            <div class="blog-wrapper col-md-9">
                <?php
		if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'blog' );

			endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif; ?>
            </div>
            <div class="col-md-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer(); 
?>