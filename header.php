<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/format.css" type="text/css" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" type="text/css" />	



	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css" type="text/css" />

	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" type="text/css" />

	<script src="http://code.jquery.com/jquery-latest.js"></script>


	<script src="<?php bloginfo('template_directory'); ?>/js/slides.min.jquery.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/function.js"></script>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

<script src="//use.typekit.net/hvy4dpo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>
	
	
<div id="header">
                <h1><a href="<?php echo get_option('home'); ?>/" id="logo"><?php bloginfo('name'); ?></a></h1>
                <div id="main-menu">
                    <ul>
                        <li><a href="http://www.circleminds.com/introduction/" id="intro-menu">INTRODUCTION</a></li>
                        <li><a href="http://www.circleminds.com/the-team/" id="theam-menu">THE TEAM</a></li>
                        <li><a href="http://www.circleminds.com/world-projects/" id="project-menu">WORLD & PROJECTS</a></li>
                        <li><a href="http://www.circleminds.com/what-we-do/" id="wedo-menu">WHAT WE DO</a></li> 
                        <li><a href="http://www.circleminds.com/contacto/" id="contact-menu">CONTACT & FOLLOW</a></li>
                    </ul>
                </div>


            </div>
<div id="imagenFondo"><?php echo types_render_field( "imagen", array( "proportional" => "true" ) )?></div>
	<div id="wrapper" class="clearfix">
		<div class="content">

