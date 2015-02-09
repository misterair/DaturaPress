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
				<?php if ( function_exists ( dynamic_sidebar(4) ) ) : ?>
					<?php dynamic_sidebar (4); ?>
				<?php endif; ?>
				<div id="separator"><div class="separator"></div></div>
			</div>
			
			<div id="tabGradient"></div>
			<div id="tab" class="read">
				<?php previous_post_link('%link'); ?>
				<a class="readAction" href="#"></a>
				<?php next_post_link('%link'); ?>
			</div>
			
		</div>		
	</aside>
