</div>
</body>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/konami.js"></script>
<?php
  $title_size = get_theme_mod('title_size');
  $shaarli_url = get_theme_mod('shaarli_url');
  $blog_color = get_option('blog_color');
  $link_color = get_option('link_color');
  $code_bloc_color = get_option('code_bloc_color');
  $code_font_color = get_option('code_font_color');
?>

<style>
 @keyframes logo {
  0% {color:#eee;}
  100% {color:  <?php echo $blog_color; ?>;;}
 }
 @-webkit-keyframes logo {
  0% {color:#eee;}
  100% {color:  <?php echo $blog_color; ?>;;}
 }
  #logo.name h1 a {font-size:  <?php echo $title_size; ?> !important; }
  a:link,a:visited { color:  <?php echo $link_color; ?>; }
   #asideCorner:hover, #asideCornerOff:hover { border-color: transparent <?php echo $link_color; ?> !important; }
   pre, code{ color: <?php echo $code_font_color; ?> ; background: <?php echo $code_bloc_color; ?> ;}

   #panel_contener ul.menu li a[href^="<?php echo esc_url( home_url( '/' ) ); ?>feed"]:before {content:"\f09e";}
   #panel_contener ul.menu li a[href^="<?php echo esc_url( home_url( '/' ) ); ?>contact/"]:before {content:"\f0e0";}
   #panel_contener ul.menu li a[href^="<?php echo esc_url( home_url( '/' ) ); ?>a-propos/"]:before {content:"\f15c";}
   #panel_contener ul.menu li a[href^="<?php echo $shaarli_url; ?>"]:before {content:"\f08d";}
   aside ul li:hover, aside ul li:hover a:link, aside ul li:hover a:visited, aside ul li:hover a::before{ color: <?php echo $link_color; ?> !important; }
</style>

</html>
