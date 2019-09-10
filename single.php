<?php
/**
 * The main template file
 *
 * @package Marta_studio
 */

get_header();
?>
<div class="bg-banner">
    <h2>Блог Марти</h2>
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
                comments_template(); 
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'content');
		endif; ?>
            </div>
            <div class="col-md-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<!--fix comment form for blog discussion -->
<script>
    $(".comment-reply-title").text("Додати коментар");
    $("label[for='comment']").text("Коментар:");
    $("label[for='url']").text("Лінк на профіль у соц. мережах");
    $("#reg").css("display", "none");
</script>
<?php get_footer(); ?>