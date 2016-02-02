</div>
</body>

<?php
  $title_size = get_theme_mod('title_size');
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
</style>

</html>
