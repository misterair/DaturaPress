<?php get_header(); ?>
<?php get_sidebar(); ?>

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
		<div class="sectionCentrage  <?php echo get_theme_mod( 'pages_settings', 'pages_settings' ); ?>">
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div id="clear"></div>
	        <?php the_content(); ?>
	        <div id="clear"></div>
	    </div>
	</section>
</div>
    
<?php endwhile; ?>
<?php endif; ?>
</article>
<?php get_footer(); ?>

	
