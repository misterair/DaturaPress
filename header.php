<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">



	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 	<meta name="HandheldFriendly" content="true">
 	<meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0/">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>
<?php
  $dark_settings = get_theme_mod('dark_settings');
  $darkNight_settings = get_theme_mod('darkNight_settings');
?>

<body <?php body_class(); ?> id="<?php echo $dark_settings; ?><?php echo $darkNight_settings; ?>" >
<!--[if IE]>
  <div style='z-index:999;border:solid #D41C1D; background: #FEEFDA; text-align: center; clear: both; position: relative;'>
    <div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
    	<a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>X</a>
    </div>
    	<h2 style="color:#D41C1D;text-align:center">En utilisant Internet Explorer vous tuez des chatons. Changez de navigateur !</h2>
    </div>
  </div>
<![endif]-->
