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
		<div class="ArticleThumb">
			<?php the_post_thumbnail( '404-post-thumbnail' ); ?>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		</div>
	</section>
	<section class="content">
		<div class="sectionCentrage  j<?php echo get_theme_mod('pages_settings' ); ?>">
	   <?php the_content(); ?>
	   <div id="clear"></div>
	 </div>
	</section>
</div>

<?php endwhile; ?>
<?php endif; ?>
</article>
<?php get_footer(); ?>
