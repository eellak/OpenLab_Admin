<?php$openlab_news_page_id = get_theme_mod('openlab_news_page_id');if($openlab_news_page_id):	$post_archive_link 	= get_page_link($openlab_news_page_id);endif;?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		<header class="entry-header">			<div class="breadcrumb-wrap">				<?php					echo '<div class="bcrmb">';						if( isset($post_archive_link) && $post_archive_link !== '' ):							echo '<a href="'. esc_url($post_archive_link) .'">'. __('Back to Posts','openlab-txtd' ) .'</a>';						else:							echo '<a href="#" class="theme-error">'. __('Please select the Posts page in Theme Options!','openlab-txtd' ) .'</a>';						endif;					echo '</div>';				?>			</div>			<h1 class="entry-title"><?php the_title(); ?></h1>		</header><!-- .entry-header -->		<div class="entry-content">			<?php	the_content(); ?>		</div><!-- .entry-content --></article><!-- #post-## -->