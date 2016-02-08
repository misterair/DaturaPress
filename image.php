<?php get_header(); ?>
<div id="wrap" class="images">
<?php get_sidebar( 'article'); ?>

<article>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div id="lightbox" class="images">
	<section class="largeThumbnail">
		<div class="gradientPic top"></div>
		<div class="ThumbBack">
			<?php echo wp_get_attachment_image( get_the_ID(), full );?>
		</div>
		<?php echo wp_get_attachment_image( get_the_ID(), full);?>
		<div class="gradientPic bottom"></div>
	</section>
</div>

<?php endwhile; ?>
<footer class="read">
	<div class="prev"><?php previous_image_link( false, '' ); ?></div>

	<a class="readAction return" href="<?php echo esc_url( get_permalink( $post->post_parent ) ) ?>"
    title="<?php echo esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ) ?>" ></a>

     <div class="next"><?php next_image_link( false, '' ); ?></div>

</footer>
<?php endif; ?>
</article>
<?php get_footer(); ?>
