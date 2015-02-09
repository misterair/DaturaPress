<?php
function themeslug_theme_customizer( $wp_customize ) {
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action('customize_register', 'themeslug_theme_customizer');

/*Colors Custom*/
function Datura_customize_register( $wp_customize ) {
$colors = array();
$colors[] = array(
  'slug'=>'content_link_color', 
  'default' => '#94B203',
  'label' => __('Content Link Color', 'Datura')
);
$colors[] = array(
  'slug'=>'sky_day', 
  'default' => '#33A9FF',
  'label' => __('Day Sky', 'Datura')
);
$colors[] = array(
  'slug'=>'sky_night', 
  'default' => '#311D3C',
  'label' => __('Night Sky', 'Datura')
);
$colors[] = array(
  'slug'=>'pot_color', 
  'default' => '#819B00',
  'label' => __('Pot Color', 'Datura')
);
foreach( $colors as $color ) {
  $wp_customize->add_setting(
    $color['slug'], array(
      'default' => $color['default'],
      'type' => 'option', 
      'capability' => 
      'edit_theme_options'
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      $color['slug'], 
      array('label' => $color['label'], 
      'section' => 'colors',
      'settings' => $color['slug'])
    )
  );
}
}
add_action( 'customize_register', 'Datura_customize_register' );

/*Clouds Settings*/
function Cloud_customize_register( $wp_customize ) {
$wp_customize->add_setting('clouds_settings', array());
$wp_customize->add_control('clouds_settings', array(
  'label'      => __('Clouds display', 'Cloud'),
  'section'    => 'layout',
  'settings'   => 'clouds_settings',
  'type'       => 'radio',
  'choices'    => array(
    'block'   => 'yes',
    'none'  => 'no',
  ),
));
$wp_customize->add_setting('text_settings', array());
$wp_customize->add_control('text_settings', array(
  'label'      => __('Text display', 'Text'),
  'section'    => 'layout',
  'settings'   => 'text_settings',
  'type'       => 'radio',
  'choices'    => array(
    ''   => 'Normal',
    'journal'  => 'Journal',
  ),
));
$wp_customize->add_section('layout' , array(
	'title' => __('Layout','Text', 'Cloud'),
));
}
add_action( 'customize_register', 'Cloud_customize_register' );

/*Smileys*/
add_filter('smilies_src','gkp_new_folder_smiley',10,3);
function gkp_new_folder_smiley($img_src, $img, $siteurl)  {
    return get_template_directory_uri().'/smileys/'.$img;
}

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 5) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="arrowPrevious">%s</li>' . "\n", get_previous_posts_link('') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="arrowNext">%s</li>' . "\n", get_next_posts_link('') );

	echo '</ul>' . "\n";

}

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p align="center">' . get_the_post_thumbnail($post->ID, '404-post-thumbnail') .
'</p>' . get_the_content();
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // Normal post thumbnails
add_image_size( '404-post-thumbnail', 600,335, true ); // 404 thumbnail size
add_image_size( 'archives-post-thumbnail', 312, 192, true ); // Archives thumbnail size


function getpostgk_img($postId) {
$iPostID = $postId;

$arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
if($arrImages) {

$arrKeys = array_keys($arrImages);

foreach($arrImages as $oImage) {
$arrNewImages[] = $oImage;
}

for($i = 0; $i < sizeof($arrNewImages) - 1; $i++) {
for($j = 0; $j < sizeof($arrNewImages) - 1; $j++) {
if((int)$arrNewImages[$j]->menu_order > (int)$arrNewImages[$j + 1]->menu_order) {
$oTemp = $arrNewImages[$j];
$arrNewImages[$j] = $arrNewImages[$j + 1];
$arrNewImages[$j + 1] = $oTemp;
}
}
}

$arrKeys = array();
foreach($arrNewImages as $oNewImage) {
$arrKeys[] = $oNewImage->ID;
}

$iNum = $arrKeys[0];
$sThumbUrl = wp_get_attachment_thumb_url($iNum);

$sImgString ='<img src="' . $sThumbUrl . '" width="60" height="60" alt="" title="" />';

echo $sImgString;
}
}

add_filter( 'avatar_defaults', 'newgravatar' );
    function newgravatar ($avatar_defaults) {
    $myavatar = get_bloginfo('template_directory') . '/layout/gravatar.jpg';
    $avatar_defaults[$myavatar] = "WPBeginner";
    return $avatar_defaults;
}

if ( function_exists('register_sidebar') )
    $widgetWrap = array(
        'before_widget' => '<div id="separator"><div class="separator"></div></div><div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
    );
    register_sidebars(2, $widgetWrap);


if ( function_exists ('register_sidebar')) {
    register_sidebar ('article');
    register_sidebar(array(
        'before_widget' => '<div id="separator"><div class="separator"></div></div><div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
    ));
}

add_filter('body_class','day_body_class');
function day_body_class($classes = '') {
  /* pages Day and Night are for testing */
  if( is_page('Day') ) {
    $classes[] = 'day';
    return $classes;
  }
  elseif( is_page('Night')) {
    $classes[] = 'night';
    return $classes;
  }else{
    /* Get the Hour and 18hrs (6:00pm) to 07hrs (7:00am) is Night */
    $h = date('H');
    if( $h > 17  || $h < 07 ) {
      $classes[] = 'night';
      return $classes;
    }
    $classes[] = 'day';
    return $classes;
  }
}
 
?>
