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
	    	<?php if ( function_exists ( dynamic_sidebar(5) ) ) : ?>
				<?php dynamic_sidebar (5); ?>
			<?php endif; ?>
			<div id="clear"></div>
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

	
