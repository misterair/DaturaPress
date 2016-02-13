<?php get_header(); ?>
<div id="wrap">
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
		<div class="ArticleThumb">
			<?php the_post_thumbnail( '404-post-thumbnail' ); ?>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		</div>
	</section>
	<section class="content">
		<div class="infos date">
			<p class="articleInfos">Le <?php the_time('j F Y') ?> par <?php the_author_posts_link(); ?>. (<a href="#commentform"><?php comments_number( 'Aucun Commentaire', 'Un commentaire', '% commentaires' ); ?></a>)</p>
			<div id="separator"><div class="separator"></div></div>
		</div>
		<div class="sectionCentrage <?php echo get_theme_mod( 'text_settings'); ?>">
	     <?php the_content(); ?>
	    </div>
					<?php if ( function_exists ( dynamic_sidebar(3) ) ) : ?>
								<?php dynamic_sidebar (3); ?>
					<?php endif; ?>
	    <div class="infos tags">
							<div id="separator"><div class="separator"></div></div>
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
