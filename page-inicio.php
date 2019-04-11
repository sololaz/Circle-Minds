
<?php
/*
Template Name: Inicio
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Circle Minds</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style1.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" type="text/css" /> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.86080.js"></script>
        
    
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    </head>
    <body id="page">
        <ul class="cb-slideshow">

            <?php query_posts( array ( 'category_name' => 'banner', 'posts_per_page' => 5 ) ); ?> 
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <li><span><?php the_title(); ?></span><div><h3><?php the_title(); ?></h3></div><?php the_content(); ?></li>
                                   
                                        
                        <?php endwhile; endif; ?>

                

        </ul>
         <div id="header">
                <h1><a id="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                <div id="main-menu">
                    <ul>
                        <li><a href="http://www.circleminds.com/introduction/">INTRODUCTION</a></li>
                        <li><a href="http://www.circleminds.com/prueba/the-team/">THE TEAM</a></li>
                        <li><a href="http://www.circleminds.com/world-projects/">WORLD & PROJECTS</a></li>
                        <li><a href="http://www.circleminds.com/what-we-do/">WHAT WE DO</a></li> 
                        <li><a href="http://www.circleminds.com/contacto/">CONTACT & FOLLOW</a></li>
                    </ul>
                </div>
                </div>
        <div id="wrapper">
           

                <div id="logo-circle">
                </div>

            </div>
           
        

        <div id="fake">

        </div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>
        <script type="text/javascript">

    $(document).ready(function() {

        $('#main-menu').slicknav();
                 $('#fake').delay(5000).fadeOut(800);
                 

                $('.cb-slideshow li').each(function(){
                    var Imagen = $(this).find('img');
                    var fondo = Imagen.attr('src')
                    $($(this).find('span')).css('background-image','url(' + fondo + ')')
                })

        });</script>
    </body>
</html>