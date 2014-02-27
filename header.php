<!DOCTYPE html>
<!--[if IE 6]>
<html xmlns="http://www.w3.org/1999/xhtml" id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html xmlns="http://www.w3.org/1999/xhtml" id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="full-clearfix<?php if ( is_user_logged_in() ) : echo " logado"; endif; ?>">
</div><!-- .full-clearfix -->

<div class="full-menu<?php if ( is_user_logged_in() ) : echo " logado"; endif; ?>">
</div><!-- .full-menu -->

	<div class="container">
		
		<?php do_action('et_header_top'); ?>
        
		<header class="clearfix">
			<hgroup class="logo">
            	<a href="<?php echo home_url(); ?>"></a>
			</hgroup><!-- .logo -->

			<?php wp_nav_menu( array( 'menu_class' => 'main-navigation', 'theme_location' => 'primary' ) ); ?>

		</header><!-- .clearfix -->
        			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>
		<!-- <div class="main-area"> -->
			<?php do_action('et_header_menu'); ?>