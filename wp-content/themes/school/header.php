<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccesspressLite
 */
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalabe=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
<![endif]-->

<script src="js/jquery-1.8.2.min"></script>
<script src="js/jquery.bxslider.min.js"></script>
<link href="css/jquery.bxslider.css" rel="stylesheet" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
global $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				
				
				<?php if ( get_header_image() ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
				</a>
				<?php } ?>
				
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix">
				<?php 
				do_action( 'accesspresslite_header_text' ); 
                ?>
                <div class="clearfix"></div>
                <?php
				/** 
				* @hooked accesspresslite_social_cb - 10
				*/
				if($accesspresslite_settings['show_social_header'] == 0){
				do_action( 'accesspresslite_social_links' ); 
				}

				if($accesspresslite_settings['show_search'] == 1){ ?>
				<div class="ak-search">
					<?php get_search_form(); ?>
				</div>
				<?php } ?>
			</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->

		
		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
			<div class="ak-container">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspresslite' ); ?></h1>

				<?php wp_nav_menu( array( 
				'theme_location' => 'primary' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section id="slider-banner">

        	<script type="text/javascript">
            jQuery(function(){
				jQuery('.bx-slider').bxSlider({
					pager:false,
					controls:false,
					mode:'fade',
					auto :true,
					pause: '4000',
					speed:'5'
									});
			});
            </script>
            <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 70%;"><div class="bx-slider" style="width: auto; position: relative;">
			<!--  height: 70% was 390px -->
				<div class="slides" style="float: none; list-style: none outside none; position: absolute; width: 1346px; z-index: 50; display: block;">
					<img alt="slider1" src="http://localhost:81/school/wp-content/themes/accesspress-lite/images/demo/slide_1.jpg">
                    				</div>
						
				<div class="slides" style="float: none; list-style: none outside none; position: absolute; width: 1346px; z-index: 0; display: none;">
					<img alt="slider2" src="http://localhost:81/school/wp-content/themes/accesspress-lite/images/demo/slide_2.jpg">
                    				</div>
				<div class="slides" style="float: none; list-style: none outside none; position: absolute; width: 1346px; z-index: 0; display: none;">
					<img alt="slider2" src="http://localhost:81/school/wp-content/themes/accesspress-lite/images/demo/slide_3.jpg">
                    				</div>
				<div class="slides" style="float: none; list-style: none outside none; position: absolute; width: 1346px; z-index: 0; display: none;">
					<img alt="slider2" src="http://localhost:81/school/wp-content/themes/accesspress-lite/images/demo/slide_4.jpg">
                    				</div>
			</div></div></div>
	</section><!-- #slider-banner -->
	<?php
	if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){	
		$accesspresslite_content_id = "content";	
	}elseif(is_home() || is_front_page() ){
	$accesspresslite_content_id = "home-content";
	}else{
	$accesspresslite_content_id ="content";
	} ?>
	<div id="<?php echo $accesspresslite_content_id; ?>" class="site-content">
