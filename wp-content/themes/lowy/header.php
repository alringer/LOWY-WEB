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

		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Roboto:300,400,500,700" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<?php wp_head(); ?>
		
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		
	</head>
	<body <?php body_class(); ?>>

		<!-- main-contaniner -->
		<div class="main-contaniner">

			<!-- header -->
			<header class="header header--main header--gradient clear" role="banner">
				<div class="header__inner">
					<div class="header__logo-wrap">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logos/lmri-logo.svg" alt="Logo" class="logo-img">
							</a>
							<span class="header__hamburger">
								<span></span>
							</span>
						</div>
						<!-- /logo -->
						<div class="visible--xs visible--sm">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
					

					<!-- nav -->
					<nav class="navbar navbar-light" role="navigation">
						<?php html5blank_nav(); ?>
						<div class="hidden--xs hidden--sm display--desktop">
							<?php get_template_part('searchform'); ?>
						</div>
					</nav>
					<!-- /nav -->
				</div>

			</header>
			<!-- /header -->
