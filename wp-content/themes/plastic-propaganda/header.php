<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<script src="https://use.fontawesome.com/bf19fc32ac.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<div class="wrapper">
				<div class="header__logo">
					<h1 class="header__logo__title">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?><span class="header__logo__title__dot">.</span>
					</h1>
					<h3 class="header__logo__subtitle"><?php bloginfo( 'description' ); ?></h3>
				</div>
				<div class="header__menu-trigger">
					Menu
				</div>
			</div>
			<div class="subheader-bar">
				<div class="wrapper">
					<a href="mailto:info@plasticpropaganda.co.uk" class="subheader-bar__email">info@plasticpropaganda.co.uk</a>
					<div class="subheader-bar__icon subheader-bar__icon--facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></div>
					<div class="subheader-bar__icon subheader-bar__icon--twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></div>
					<div class="subheader-bar__icon subheader-bar__icon--instagram"><i class="fa fa-instagram" aria-hidden="true"></i></div>
				</div>
			</div>
		</header>
		<!--<nav class="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>-->
