<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Marta_studio
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title text-center"><?php esc_html_e( 'Сторінку не знайдено!', 'marta-studio' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p class="text-center"><?php esc_html_e( 'не вірна адреса, спробуйте скрористатись пошуком, або повернутись на головну сторінку сайту', 'marta-studio' ); ?></p>
					<?php get_search_form(); ?>
					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Категорії', 'marta-studio' ); ?></h4>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
