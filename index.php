<?php get_header(); ?>
<?php get_sidebar(); ?>
<article>
	<div id="tronc">
		<div class="tronc"></div>
	</div>
<?php if (is_category()): ?>
	<nav>
		<div class="caption">Catégorie: <?php single_cat_title(); ?></div>
	</nav>
<?php elseif (is_tag()): ?>
	<nav>
		<div class="caption">Tag: <?php single_cat_title(); ?></div>
	</nav>
<?php elseif (is_author()): ?>
	<nav>
		<div class="caption author">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 65 ); ?>
			<div class="content">
				<h3><?php the_author(); ?></h3>
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</div>
	</nav>
<?php elseif (is_year()): ?>
	<nav>
		<div class="caption">Année: <?php the_time( 'Y' ); ?></div>
	</nav>
<?php elseif (is_month()): ?>
	<nav>
		<div class="caption">Mois: <?php the_time( 'F, Y' ); ?></div>
	</nav>
<?php elseif (is_search()): ?>
	<nav>
		<div class="caption">
			<?php
   				$count = $wp_query->found_posts;
   				$several = ($count<=1) ? '' : 's'; //pluriel
   				if ($count>0) : $output = ' résultat'.$several.' pour: ';
   				else : $output = 'Aucun résultat pour la recherche';
   				endif;
   				$output .= ' "<span class="termSearch">'. get_search_query() .'</span>"';
  				echo $output;
 			?>
		</div>
	</nav>
<?php endif; ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php $postslist = get_posts('numberposts=20&order=DESC'); ?>
			<section id="post-<?php the_ID(); ?>" class="<?php if($oddeven%2 == 0) { echo ' odd'; } else { echo ' even'; }; $oddeven++; ?>">
				<ul>
					<div class="Picture">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '404-post-thumbnail' );?></a>
						<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<div class="gradient"></div>
					</div>
					<div class="postContent">
							<ul class="resume">
								<?php the_excerpt(); ?>
							</ul>
					</div>
					<div id="corner">
						<p class="cornerInfos">Le <?php the_time('j F Y') ?> par <?php the_author_posts_link(); ?> <br/> <?php comments_number( 'Aucun Commentaire', 'Un commentaire', '% commentaires' ); ?></p>
					</div>
				</ul>
			</section>
		<?php endwhile; ?>

		<nav><div id="pot">
			<div class="potTop"></div>
			<div class="potBottom">
					<div class="potBottom_bis"></div>
			</div>
		</div></nav>

		<nav class="navigation">
			<?php wpbeginner_numeric_posts_nav(); ?>
		</nav>

		<?php else : ?>
		<header><h2>404</h2><header>
		<section><p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p></section>
	<?php endif; ?>
</article>
<?php get_footer(); ?>
