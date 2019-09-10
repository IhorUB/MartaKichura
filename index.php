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
		<main id="main" class="site-main blog-wrapper">

		<?php
		if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php 
				get_template_part( 'content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'content', 'none' );

		endif; ?>
			<?php
/* ------------------------------------------------------------------*/
/* PAGINATION */
/* ------------------------------------------------------------------*/

//paste this where the pagination must appear

// global $wp_query;
// $total = $wp_query->max_num_pages;
// // only bother with the rest if we have more than 1 page!
// if ( $total > 1 )  {
//      // get the current page
//      if ( !$current_page = get_query_var('paged') )
//           $current_page = 1;
//      // structure of "format" depends on whether we're using pretty permalinks
//      if( get_option('permalink_structure') ) {
// 	     $format = '&paged=%#%';
//      } else {
// 	     $format = 'page/%#%/';
//      }
//      echo paginate_links(array(
//           'base'     => get_pagenum_link(1) . '%_%',
//           'format'   => $format,
//           'current'  => $current_page,
//           'total'    => $total,
//           'mid_size' => 4,
//           'type'     => 'list'
//      ));
// }

wp_pagenavi(); 
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
