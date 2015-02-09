</div>
</body>

<?php
  $clouds_settings = get_theme_mod('clouds_settings');
  $content_link_color = get_option('content_link_color');
  $sky_day = get_option('sky_day');
  $sky_night = get_option('sky_night');
  $pot_color = get_option('pot_color');
?>
<style>
  article header {display:  <?php echo $clouds_settings; ?>; }
  a:link,a:visited, .tab_1:before, #panel_contener.p1 > #tab > .tab_1:before { color:  <?php echo $content_link_color; ?>; }
   #panel_contener.p2 > #tab > .tab_2:before, #panel_contener.p3 > #tab > .tab_3:before { color:  <?php echo $content_link_color; ?> !important; }
   #asideCorner:hover, #asideCornerOff:hover { border-color: transparent <?php echo $content_link_color; ?> !important; }
  
  body.day #sky { background-color:  <?php echo $sky_day; ?>; }
  body.night #sky { background-color:  <?php echo $sky_night; ?>; }
  
  .potBottom{background-color: <?php echo $pot_color; ?>; }
  .potTop{background-color:<?php echo $pot_color; ?>; }
</style>

</html>
