<?php$post_id 				= get_the_ID();$featured_img 		= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'small' );$formatted_post_date = get_the_date('j.m.Y');$post_link = get_post_permalink($post_id);?>	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	<div class="post-image col-md-2 col-lg-2 col-xs-2 col-sm-2">			<div class="square-box">			  <div class="square-content-wrap">				<div class="square-content">				</div>			  </div>			</div>	</div>	<div class="post-content-wrap col-md-8 col-lg-8 col-xs-8 col-sm-8">			<h2 class="entry-title"><?php the_title(); ?></h2>			<div class="result-date"><?php echo $formatted_post_date; ?></div>			<div class="entry-content">				<?php					$content = get_the_content();					$trimmed = wp_trim_words( $content, $num_words = 15, $more = null );					echo $trimmed;				 ?>			</div>	</div><a href="<?php echo esc_url($post_link) ?>" class="article-link">	<div class="post-link col-md-2 col-lg-2 col-xs-2 col-sm-2">			<?php	echo '<span class="link-img"></span>'; ?>	</div></a>	</article>