<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrapValidator.min.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/library/js/ie-emulation-modes-warning.js"></script><![endif]-->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/ie10-viewport-bug-workaround.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/respond.min.js"></script>
        <![endif]-->

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		<style>
			.fasteasysocialsharing{ float: right; }
			.totalshares{ display: none; }
		</style>
		<?php if( in_category(array('Team')) ){ ?>
		<style>
			#normal-nav{ display: none; }
			#team-nav{ display: block; }
		</style>
		<?php } else {
		?>
		<style>
			#normal-nav{ display: block; }
			#team-nav{ display: none; }
		</style>
		<?php
		}?>
		
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

	</head>

	<body <?php body_class(); ?>>
