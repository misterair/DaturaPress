</div>
</body>

<?php
  $title_size = get_theme_mod('title_size');
  $content_link_color = get_option('content_link_color');
?>

<style>
 @keyframes logo {
  0% {color:#eee;}
  100% {color:  <?php echo $content_link_color; ?>;;}
 }
 @-webkit-keyframes logo {
  0% {color:#eee;}
  100% {color:  <?php echo $content_link_color; ?>;;}
 }
  #logo.name h1 a {font-size:  <?php echo $title_size; ?> !important; }
  a:link,a:visited { color:  <?php echo $content_link_color; ?>; }
   #panel_contener.p2 > #tab > .tab_2:before, #panel_contener.p3 > #tab > .tab_3:before { color:  <?php echo $content_link_color; ?> !important; }
   #asideCorner:hover, #asideCornerOff:hover { border-color: transparent <?php echo $content_link_color; ?> !important; }
</style>

</html>
