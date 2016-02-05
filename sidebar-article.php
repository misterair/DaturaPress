<button id="asideCornerShadow"></button>
<button id="asideCorner" onclick="addClass('wrap','large'),addClass('asideCornerOff','show'),addClass('asideCorner','hide')"></button>
<button id="asideCornerOff" onclick="removeClass('wrap','large'),removeClass('asideCornerOff','show'),removeClass('asideCorner','hide')"></button>

	<aside>
	<div id="panel_contener">
		<header>
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<div id="logo" class="picture">
        			<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</div>
        	</a>
			<?php else : ?>
			<div id="logo" class="name">
      		  <h1 class='site-title'>
      		  	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?><span></span></a>
    		  </h1>
    		</div>
			<?php endif; ?>
			<div id="separator"><div class="separator"></div></div>
		</header>

			<div id="panel_1">
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<input type="submit" class="search-submit" value="" />
					<label>
						<span class="screen-reader-text"><?php echo _x( 'Recherche pour:', 'label' ) ?></span>
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Rechercher', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Recherche pour:', 'label' ) ?>" />
					</label>
				</form>
				<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
					<?php dynamic_sidebar (2); ?>
				<?php endif; ?>
				<div id="separator"><div class="separator"></div></div>
			</div>

			<div id="tab" class="read">
				<div id="separator"><div class="separator"></div></div>
				<?php previous_post_link('%link', '<div class="previousArticle"></div>'); ?>
				<a class="readAction" href="#"></a>
				<?php next_post_link('%link', '<div class="previousArticle"></div>'); ?>
			</div>

		</div>
	</aside>
<div id="blackFilter"></div>
