<?php get_header(); ?>
<?php get_sidebar( 'article' ); ?>

<article>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div id="lightbox">
	<section class="blurThumbnail">
		<div class="ThumbBack">
				<?php the_post_thumbnail( '404-post-thumbnail' ); ?>
		</div>
	</section>
	<section class="largeThumbnail">
		<?php the_post_thumbnail( '404-post-thumbnail' ); ?>
	</section>
	<section class="content">
		<div class="infos date">
			<p class="articleInfos">Le <?php the_time('j F Y') ?> par <?php the_author_posts_link(); ?></p>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<div class="sectionCentrage <?php echo get_theme_mod( 'text_settings', 'text_settings' ); ?>">
			<div id="clear"></div>
	        <?php the_content(); ?>
	        <div id="clear"></div>
	    	 <ul class="relatedPosts">
				<h3>Dans la même thèmatique:</h3>
					<?php
						$orig_post = $post;
						global $post;
						$tags = wp_get_post_tags($post->ID);
						if ($tags) {
							$tag_ids = array();
							foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							$args=array(
								'tag__in' => $tag_ids,
								'post__not_in' => array($post->ID),
								'posts_per_page'=>3, // Number of related posts to display.
								'caller_get_posts'=>1
							);
							$my_query = new wp_query( $args );
							while( $my_query->have_posts() ) {
							$my_query->the_post();
					?>
						<li class="relatedThumb">
							<a rel="external" href="<? the_permalink()?>">
								<div class="roundIMG">
									<?php the_post_thumbnail('archives-post-thumbnail',array(200,200));?>
								</div>							
								<br />
								<?php the_title(); ?>
							</a>
						</li>
					<? }
				}
			$post = $orig_post;
			wp_reset_query();
			?>
			</ul>
	    </div>
	    <div class="infos tags">
			<?php the_category(' ') ?>
			<?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); ?>
	    </div>
	</section>
	<section class="comments">
		<p class="commentArg"><?php comments_number( 'Commentez !', 'Un commentaire', '% commentaires' ); ?></p>
			<?php comments_template(); ?>
    </section>
</div>
    
<?php endwhile; ?>
<?php endif; ?>
</article>
<?php get_footer(); ?>

	
