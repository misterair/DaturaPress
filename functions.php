<?php
/*Colors Custom*/
function Datura_customize_register( $wp_customize ) {
$colors = array();
$colors[] = array(
  'slug'=>'blog_color',
  'default' => '#94B203',
  'label' => __('Titre de Blog', 'blog_color')
);
$colors[] = array(
  'slug'=>'link_color',
  'default' => '#94B203',
  'label' => __('Liens', 'link_color')
);
$colors[] = array(
  'slug'=>'code_bloc_color',
  'default' => '#DCD6CD',
  'label' => __('Bloc code', 'code_bloc_color')
);
$colors[] = array(
  'slug'=>'code_font_color',
  'default' => '#222',
  'label' => __('Bloc code police', 'code_font_color')
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
  $wp_customize->add_setting('title_size', array());
  $wp_customize->add_control('title_size', array(
    'label'      => __('Taille du titre du blog', 'Title'),
    'section'    => 'layout',
    'settings'   => 'title_size',
    'type'       => 'select',
    'choices'    => array(
      '36px'   => '36px',
      '32px'   => '32px',
      '28px'   => '28px',
      '24px'   => '24px',
      '21px'   => '21px',
      '18px'   => '18px',
    ),
  ));
$wp_customize->add_setting('text_settings', array());
$wp_customize->add_control('text_settings', array(
  'label'      => __('Texte articles multi-colonnes/journal'),
  'section'    => 'layout',
  'settings'   => 'text_settings',
  'type'       => 'checkbox',
));
$wp_customize->add_setting('pages_settings', array());
$wp_customize->add_control('pages_settings', array(
  'label'      => __('Texte pages multi-colonnes/journal'),
  'section'    => 'layout',
  'settings'   => 'pages_settings',
  'type'       => 'checkbox',
));
$wp_customize->add_setting('dark_settings', array());
$wp_customize->add_control('dark_settings', array(
  'label'      => __('Couleurs thème', 'Dark'),
  'section'    => 'layout',
  'settings'   => 'dark_settings',
  'type'       => 'radio',
  'choices'    => array(
    ''   => 'Thème Clair (défaut)',
    'dark'  => 'Thème Sombre',
    'darkNight' => 'Thème Sombre la nuit uniquement',
  ),
));
$wp_customize->add_section('layout' , array(
	'title' => __( 'Paramètres', 'Title', 'Text', 'Pages', 'Dark'),
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

if ( function_exists('register_sidebar'))
    $sidebar_home = array(
      'name' => __('Sidebar de la home'),
      'before_widget' => '<div id="separator"><div class="separator"></div></div><div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
    );
    register_sidebars(1, $sidebar_home);

if ( function_exists('register_sidebar'))
    $sidebar_articles = array(
      'name' => __('Sidebar des articles'),
      'before_widget' => '<div id="separator"><div class="separator"></div></div><div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
    );
    register_sidebars(1, $sidebar_articles);

if ( function_exists ('register_sidebar'))
	$widget_article = array(
		'name' => __('Widgets du corps des articles'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
	);
	register_sidebars(1, $widget_article );

add_filter('body_class','day_body_class');
function day_body_class($classes = '') {
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

/*WIDGET SIMILAR ARTICLES*/
class similar_widget extends WP_Widget {
function __construct() {
parent::__construct(
'similar_widget',
__('Similar articles Widget', 'similar_widget_domain'),
array( 'description' => __( 'Show 3 similar articles with thumbnails', 'similar_widget_domain' ), )
);
}
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
?>
	          <ul class="relatedPosts">
				<?php
					$orig_post = $post;
					global $post;
					$tags = wp_get_post_tags($post->ID);

					if ($tags) {
						$tag_ids = array();
						foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args=array(
							'tag__in' => $tag_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=>3, // Number of related posts to display.
							'caller_get_posts'=>1
						);

						$my_query = new wp_query( $args );

						while( $my_query->have_posts() ) {
							$my_query->the_post();
							?>
							<li class="relatedThumb">
								<div class="roundIMG">
									<?php the_post_thumbnail('archives-post-thumbnail',array(200,200));?>
									<a rel="external" href="<? the_permalink()?>"><?php the_title(); ?></a>
								</div>
							</li>
							<? }
						}
						$post = $orig_post;
						wp_reset_query();
					?>
				</ul>
</div>
<?php
}
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'similar_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
}
// Register and load the widget
function similar_load_widget() {
	register_widget( 'similar_widget' );
}
add_action( 'widgets_init', 'similar_load_widget' );


/*WIDGET RECENT ARTICLE*/
class recent_widget extends WP_Widget {
function __construct() {
parent::__construct(
'recent_widget',
__('Recent article Widget', 'recent_widget_domain'),
array( 'description' => __( 'Show the last article with thumbnail', 'recent_widget_domain' ), )
);
}
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
?>
     <ul class="relatedPosts">
    <?php $the_query = new WP_Query( 'showposts=1' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<li class="relatedThumb">
			<div class="roundIMG">
				<?php the_post_thumbnail('archives-post-thumbnail',array(200,200));?>
				<a rel="external" href="<? the_permalink()?>"><?php the_title(); ?></a>
			</div>
		</li>
    <?php endwhile;?>
    </ul>
</div>
<?php
}
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'recent_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
}
// Register and load the widget
function recent_load_widget() {
	register_widget( 'recent_widget' );
}
add_action( 'widgets_init', 'recent_load_widget' );

?>
