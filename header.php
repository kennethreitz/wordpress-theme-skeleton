<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
	
	<meta name="description" content="<?php if (have_posts()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; endif; ?>" />
	
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css" type="text/css" media="screen" charset="utf-8" />

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.browser.addEnvClass.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.hilightnav.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/init.js"></script>
	 
	<?php if (ereg('iPhone', $_SERVER['HTTP_USER_AGENT']) || ereg('iPod', $_SERVER['HTTP_USER_AGENT']) || ereg('iPad',$_SERVER['HTTP_USER_AGENT'])): ?>
		
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="apple-touch-fullscreen" content="yes" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" />
		
		<?php if (ereg('iPad', $_SERVER['HTTP_USER_AGENT'])): ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ipad.css" />
		<?php else: ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/iphone.css" />	
		<?php endif; ?>
		
	<?php else: ?>
		<meta name="viewport" content="width=960" />

		<?php // Top Up Image Gallery (.top_up) ?>
		<script type="text/javascript" src="http://gettopup.com/releases/latest/top_up-min.js"></script>
		
	<?php endif ?>

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div id="header">
			<div id="nav">
				<li> <a href="/">Home</a> </li>
				<li> <a href="/gallery">Gallery</a> </li>
				<li> <a href="/contact">Contact</a> </li>
				<li> <a href="/etc">Etc</a> </li>
			</div>
		</div>
		<div id="content">
			<?php // Content ?>
