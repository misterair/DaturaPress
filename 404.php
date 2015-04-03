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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

	<style>
@font-face {
  font-family: 'FontAwesome';
  src: url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.eot?v=4.3.0');
  src: url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0') format('embedded-opentype'), url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.woff2?v=4.3.0') format('woff2'), url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.woff?v=4.3.0') format('woff'), url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.ttf?v=4.3.0') format('truetype'), url('<?php bloginfo('template_url'); ?>/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

html,body {
height: 100%;
}
a::-moz-focus-inner {border: 0;}
:focus, :selected {outline: 0 none}

body{
background: #D2CCC1;
border:none;
margin:0;
text-align: left;
color: #0f0f0f;
font-style: normal;
font-variant:normal;
line-height: 1.78em;
font-weight: normal;
font-size:0.79em;
text-indent:1em;
}


img {
max-width: 100%;
height: auto;
}
#clear{
height:52px;
}
.clear{
height:10px;
}

/*Wrap*/
#wrap{
position:relative;
float:left;
width: 100%;
height:100%;
margin:0;
padding:0;
overflow:hidden;
animation-direction: normal;
animation-duration: 14s;
animation-iteration-count: 1;
animation-timing-function: linear;
animation-fill-mode:forwards;
animation-name: sky;
/*F***ing Webkit!*/
-webkit-animation-direction: normal;
-webkit-animation-duration: 14s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode:forwards;
-webkit-animation-name: sky;
}

@keyframes sky{
0% 	{background:#939089}
85% {background:#939089}
100%{background:#D2CCC1}
}
@-webkit-keyframes sky{
0% 	{background:#939089}
85% {background:#939089}
100%{background:#D2CCC1}
}

/*Article*/
article {
height:100%;
position:relative;
transition:0.25s;
overflow:hidden;
}
.article_contener{
overflow-x:auto;
height:100%;
padding: 0;
width: 380px;
position:absolute;
bottom:0;
left:50%;
transform: translate(-50% , 0);
/*D'Oh!*/
-webkit-transform: translate(-50% , 0);
}

/*Cloud*/
header{
position: absolute;
top:0;
left:-300px;
width:300px;
height:100%;
animation-direction: normal;
animation-duration: 14s;
animation-iteration-count: 1;
animation-timing-function: linear;
animation-fill-mode:forwards;
animation-name: cloud;
/*Webkit, the new Internet Explorer!*/
-webkit-animation-direction: normal;
-webkit-animation-duration: 14s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode:forwards;
-webkit-animation-name: cloud;
}
.cloud{
position:absolute;
left:70px;
top:8px;
height:98px;
width:110px;
border-radius:100px;
background:#333;
box-shadow:0 0 4px #333;
text-align: center;
}
.cloud p{
color: #939089;
text-shadow: 0px 1px rgba(255,255,255, 0.15);
font-size: 40px;
line-height: 80px;
z-index:2;
position: relative;
}
.cloud:before{
content:"";
position:absolute;
left: -68px;
top: 27px;
height: 111px;
width: 152px;
border-radius:110px;
background:#333;
box-shadow:0 0 4px #333;
}
.cloud:after{
content:"";
position:absolute;
left: 48px;
top: 35px;
height: 118px;
width: 144px;
border-radius:120px;
background:#333;
box-shadow:0 0 4px #333;
}

@keyframes cloud{
0% 	{left:-300px;}
5% 	{left:calc(50% - 125px);}
85% {left:calc(50% - 125px);}
100%{left:130%;}
}
/*Sic*/
@-webkit-keyframes cloud{
0% 	{left:-300px;}
5% 	{left:calc(50% - 125px);}
85% {left:calc(50% - 125px);}
100%{left:130%;}
}

/*Rain*/
ul.rain{
position:relative;
float:left;
height:100%;
width:165px;
display: block;
}
ul.rain li{
list-style:none;
display:inline-block;
position:relative;
width:5px;
height:100%;
margin:120px 5px 0;
}
.drop{
height:15px;
width:2px;
top:0;
opacity: 0;
background:#192837;
position:absolute;
animation-direction: normal;
animation-duration: 0.32s;
animation-iteration-count: 20;
animation-timing-function: linear;
animation-name: drop1;
/*Fuuu!*/
-webkit-animation-direction: normal;
-webkit-animation-duration: 0.32s;
-webkit-animation-iteration-count: 20;
-webkit-animation-timing-function: linear;
-webkit-animation-name: drop1;
}

ul.rain li:nth-child(1) .drop{animation-delay : 2s  ; -webkit-animation-delay : 2s}
ul.rain li:nth-child(2) .drop{animation-delay : 2.8s; -webkit-animation-delay : 2.8s}
ul.rain li:nth-child(3) .drop{animation-delay : 4.8s; -webkit-animation-delay : 4.8s}
ul.rain li:nth-child(4) .drop{animation-delay : 2.5s; -webkit-animation-delay : 2.5s}
ul.rain li:nth-child(5) .drop{animation-delay : 4.6s; -webkit-animation-delay : 4.6s}
ul.rain li:nth-child(6) .drop{animation-delay : 3.7s; -webkit-animation-delay : 3.7s}
ul.rain li:nth-child(7) .drop{animation-delay : 2.2s; -webkit-animation-delay : 2.2s}
ul.rain li:nth-child(8) .drop{animation-delay : 3.6s; -webkit-animation-delay : 3.6s}

@keyframes drop1{,
0% {top:0;opacity:1}
100% {top:calc(100% - 270px);opacity:1}
}
/*Arg!*/
@-webkit-keyframes drop1{
0% {top:0;opacity:1}
100% {top:-webkit-calc(100% - 270px);opacity:1}
}

/*Tronc*/
#tronc{
height: 100%;
left: 50%;
top:116px;
position: absolute;
width: 20px;
}
.tronc{
height: 0;
left: -25%;
bottom:0;
position: absolute;
width: 10px;
box-shadow:0 -1px rgba(255, 255, 255, 0.45);
background:linear-gradient(90deg, #1F3D21 0%, #0E6014 82%, #1F3D21 100%) #1F3D21;
animation-direction: normal;
animation-duration: 4s;
animation-iteration-count: 1;
animation-timing-function: linear;
animation-fill-mode:forwards;
animation-name: tronc;
animation-delay : 14s;
/*Kill me!*/
-webkit-animation-direction: normal;
-webkit-animation-duration: 4s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode:forwards;
-webkit-animation-name: tronc;
-webkit-animation-delay : 14s;
}

@keyframes tronc{
0% {height:0px;}
100% {height:100%;}
}
@-webkit-keyframes tronc{
0% {height:0px;}
100% {height:100%;}
}

/*Leaf*/
section{
width:50%;
position:relative;
clear:left;
}
section:nth-child(odd){
float:left;
margin-top:38px;
}
section:nth-child(even){
float:right;
}

section > ul{
background:linear-gradient(34deg, #1F3D21 0%, #0E6014 100%) #1F3D21;
box-shadow:0 -1px rgba(255,255,255,0.45);
overflow:hidden;
margin:1px;
position:relative;
padding:0;
height:70px;
width:0;
animation-direction: normal;
animation-duration: 2s;
animation-iteration-count: 1;
animation-timing-function: linear;
animation-fill-mode:forwards;
/*Kill IE! Sorry, Webkit...*/
-webkit-animation-direction: normal;
-webkit-animation-duration: 2s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode:forwards;
}

section:nth-child(1) > ul{
animation-delay : 18s;
animation-name: leaf;
-webkit-animation-delay : 18s;
-webkit-animation-name: leaf;
}
section:nth-child(2) > ul{
animation-delay : 19s;
animation-name: leaf;
-webkit-animation-delay : 19s;
-webkit-animation-name: leaf;
}
section:nth-child(3) > ul{
animation-delay : 21s;
animation-name: leafSmall;
-webkit-animation-delay : 21s;
-webkit-animation-name: leafSmall;
}

section:nth-child(odd) ul{
border-radius:0 72px 0;
transform:rotate(10deg);
-webkit-transform:rotate(10deg);
float:right;
}
section:nth-child(even) ul{
border-radius:72px 0 72px 0;
transform:rotate(-10deg);
-webkit-transform:rotate(-10deg);
float:left;
}

@keyframes leaf{
0% {width:0;}
100% {width:144px;}
}
@-webkit-keyframes leaf{
0% {width:0;}
100% {width:144px;}
}
@keyframes leafSmall{
0% {width:0;}
100% {width:114px;}
}
@-webkit-keyframes leafSmall{
0% {width:0;}
100% {width:114px;}
}

/*Pot*/
#pot{
width:160px;
position:absolute;
height:150px;
bottom:0;
left:50%;
}
.potTop{
z-index:2;
position:relative;
width:100%;
height:25px;
background-color: #819B00;
background-image:linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.25) 82%, transparent 100%);
background-image:-webkit-linear-gradient(0deg, transparent 0%, rgba(255,255,255,0.25) 82%, transparent 100%);
box-shadow: 0px 1px rgba(0,0,0,0.3);
margin-left:-50%;
}
a.home{
position:absolute;
left:46px;
top:75px;
color: rgba(0,0,0,0.35);
text-shadow:rgba(255,255,255,0);
font-size: 50px;
text-decoration: none;
}
a.home:before{
font-family: 'FontAwesome';
content:"\f015";
}
.potBottom{
z-index:1;
position:relative;
background-color: #819B00;
height: 0;
margin-left: calc(-50% + 10px);
width: 90px;
border:25px solid;
border-top-width:125px;
border-bottom:none;
border-color:transparent #D2CCC1;
animation-direction: normal;
animation-duration: 14s;
animation-iteration-count: 1;
animation-timing-function: linear;
animation-fill-mode:forwards;
animation-name: pot;
-webkit-animation-direction: normal;
-webkit-animation-duration: 14s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode:forwards;
-webkit-animation-name: pot;
}

@keyframes pot{
0% 	{border-color:transparent #939089}
85% {border-color:transparent #939089}
100%{border-color:transparent #D2CCC1}
}
@-webkit-keyframes pot{
0% 	{border-color:transparent #939089}
85% {border-color:transparent #939089}
100%{border-color:transparent #D2CCC1}
}
/*This stylesheet was so clean. Before webkit compatibility...*/
	</style>

</head>
<body <?php body_class(); ?>>
<!--[if IE]>
  <div style='z-index:999;border:solid #D41C1D; background: #FEEFDA; text-align: center; clear: both; position: relative;'>
    <div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
    	<a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>X</a>
    </div>
    	<h2 style="color:#D41C1D;text-align:center">En utilisant Internet Explorer vous tuez des chatons. Changez de navigateur !</h2>
    </div>
  </div>
<![endif]-->


<div id="wrap">
	
	<article id="article">
		
		<div id="tronc">
			<div class="tronc"></div>
		</div>

		<header>
			<div class="cloud">
				<p>404</p>
			</div>
			<ul class="rain">
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
				<li><div class="drop"></div></li>
			</ul>
		</header>
		
		<div class="article_contener">		
			<section>
				<ul></ul>
			</section>
		
			<section>
				<ul></ul>
			</section>
		
			<section>
				<ul></ul>
			</section>

			<nav>
				<div id="pot">
					<div class="potTop">
						<a class="home"  href="<?php echo get_settings('home'); ?>"></a>
					</div>
					<div class="potBottom"></div>
				</div>
			</nav>

		</div>
		
	</article>
	
</div>
<script type="text/javascript">
  <!--
setTimeout("location.href = '<?php echo home_url( "/" ); ?>';",25000);
-->
  </script>
</body>
<?php  $pot_color = get_option('pot_color');?>
<style>
.potBottom{background-color: <?php echo $pot_color; ?>; }
.potTop{background-color:<?php echo $pot_color; ?>; }
</style>
</html>
