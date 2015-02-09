<button id="asideCornerShadow"></button> 
<button id="asideCorner" onclick="addClass('wrap','large'),addClass('asideCornerOff','show'),addClass('asideCorner','hide')"></button>
<button id="asideCornerOff" onclick="removeClass('wrap','large'),removeClass('asideCornerOff','show'),removeClass('asideCorner','hide')"></button>

	<aside>
	<div id="panel_contener">
		<header>
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					<div id="logo" class="picture">
        				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
        					<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
        				</a>
        			</div>
					<?php else : ?>
					<div id="logo" class="name">
      				  <h1 class='site-title'>
      				  	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
      				  </h1>
      				</div>
					<?php endif; ?>
			</button>
		</header>
		
			<div id="panel_1">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<input type="submit" class="search-submit" value="" />
					<label>
						<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					</label>
				</form>
				<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
					<?php dynamic_sidebar (1); ?>
				<?php endif; ?>
				<div id="separator"><div class="separator"></div></div>
			</div>
			<div id="panel_2">
				<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
					<?php dynamic_sidebar (2); ?>
				<?php endif; ?>
				<div id="separator"><div class="separator"></div></div>
			</div>
			<div id="panel_3">
				<?php if ( function_exists ( dynamic_sidebar(3) ) ) : ?>
					<?php dynamic_sidebar (3); ?>
				<?php endif; ?>
				<div id="separator"><div class="separator"></div></div>
			</div>
			<div id="tabGradient"></div>
			<div id="tab">
				<button class="tab_1" onclick="addClass('panel_contener','p1'),removeClass('panel_contener','p2'),removeClass('panel_contener','p3')"></button>
				<button class="tab_2" onclick="addClass('panel_contener','p2'),removeClass('panel_contener','p1'),removeClass('panel_contener','p3')"></button>
				<button class="tab_3" onclick="addClass('panel_contener','p3'),removeClass('panel_contener','p2'),removeClass('panel_contener','p1'),removeClass('panel_contener','p0')"></button>
				<button class="tab_4" onclick="removeClass('wrap','large'),removeClass('asideCornerShadow','hide'),removeClass('asideCorner','hide')"></button>
			</div>			
		</div>		
	</aside>
<div id="blackFilter"></div>
