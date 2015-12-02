<?php
/**
 * The template for displaying Archive Events.
 */
get_header(); ?>
<div class="clear events-archive"></div>
</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">
<div class="container">
<div class="content-left-wrap col-md-9">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php _e( 'Event Archives', 'openlab-lite' ); ?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
			<?php while ( have_posts() ) : the_post();
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				endwhile;
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .content-left-wrap -->
<div class="sidebar-wrap col-md-3 content-left-wrap">
	<?php get_sidebar(); ?>
</div><!-- .sidebar-wrap -->
</div><!-- .container -->
<?php get_footer(); ?>