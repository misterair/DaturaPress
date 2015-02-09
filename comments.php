<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
<section>
	<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
	<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>
</section>
<?php return;
	}
}
	/* This variable is for alternating comment background */
$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<?php foreach ($comments as $comment) : ?>
	<div class="commentArea <?php if ($comment->user_id == 1) $oddcomment = 'authorstyle'; echo $oddcomment; ?>"id="comment-<?php comment_ID() ?>">
		<div class="comment-gravatar">
			<?php if(function_exists('get_avatar')) { echo get_avatar($comment, '55'); } ?>
		</div>
		<div class="commentmetadata">
			<strong><?php comment_author_link() ?></strong>, 
			<?php _e('le'); ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j F, Y') ?> <?php _e('&agrave;');?> <?php comment_time() ?></a> <?php edit_comment_link('Edit Comment','',''); ?>
 			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Votre commentaire est en cours de mod&eacute;ration'); ?></em>
 			<?php endif; ?>
 			<?php comment_text() ?>
 		</div>
	</div>
	<div id="clear"></div>
<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>
<?php endforeach; /* end for each comment */ ?>
<div class="commentsZone">
	<div class="commentInfos">
		<?php if ($comments) : ?>
		<?php else : // this is displayed if there are no comments so far ?>
			<?php if ('open' == $post->comment_status) : ?>
			<?php else : // comments are closed ?>
				<p class="nocomments">Les commentaires sont ferm?s !</p>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<?php if ('open' == $post->comment_status) : ?>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">connect&eacute;</a> pour laisser un commentaire.</p>
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( $user_ID ) : ?>
		<p style="text-align:center">Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection &raquo;</a></p>
	   <?php else : ?>
	   <div id="commentColumn">
		<input type="text" name="author" id="author"  onFocus="javascript:this.value=''" value="Nom<?php echo $comment_author; ?>" size="43" tabindex="1" />
		<label for="author"><small></small></label>
		<input type="text" name="email" id="email" onFocus="javascript:this.value=''"  value="email (ne sera pas publi&eacute;)<?php echo $comment_author_email; ?>" size="43" tabindex="2" />
		<label for="email"><small></small></label>
		<input type="text" name="url" id="url" onFocus="javascript:this.value=''"  value="Site Web<?php echo $comment_author_url; ?>" size="43" tabindex="3" />
		<label for="url"><small></small></label>
		</div>
		<?php endif; ?>
		<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" style="width:310px; height:110px"></textarea>
		
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /><?php do_action('comment_form', $post->ID); ?>
			<input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer" />
		
		</form>
</div>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
