<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><? if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    
    <body ng-app="kzApp" ng-controller="mainCtrl">
	<div id="nav" >
	    <a href="/"><img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png"></a>
	    <ul>
		<?php kz_nav(); ?>
	    </ul>
	    <div id="mobile-menu" ng-click="showMenu = !showMenu; expandHero();">
		<h1>&#9776;</h1>
	    </div>
	</div>
	<div id="mobile-menu-nav" ng-show="showMenu">
	    <ul>
		<?php kz_nav(); ?>
	    </ul>
	</div>

 

