<?php	$event_id 	= get_the_ID();	$event_type	= get_post_meta($event_id, 'event_type', true);?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		<header class="entry-header">			<h2 class="entry-title">				<?php the_title(); ?>			</h2>		</header><!-- .entry-header -->		<div class="entry-content <?php if($event_type) : echo esc_attr($event_type); endif;?>">			<?php			$content = get_the_content();			$permalink = get_post_permalink();			$trimmed = wp_trim_words( $content, $num_words = 135, $more = null );			echo $trimmed;			?>		</div><!-- .entry-content --><div class="buttons <?php if($event_type) : echo esc_attr($event_type); endif;?>">				<a href="<?php echo esc_url($permalink); ?>" class="btn read-more"><?php _e('Διαβαστε περισσοτερα','openlab-txtd') ?></a></div></article><!-- #post-## -->