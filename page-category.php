<?php
/*
Template Name: World & Projects
*/
?>

<?php get_header(); ?>
<h2 id="title">World & Projects</h2>
		<div id="contenido">

		 		<div class="post">
					<div class="cat">
			 			<?php query_posts( array ( 'category_name' => 'art-design', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					    		<a href="http://circleminds.com/art-design/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4></div>
										
						<?php endwhile; endif; ?>
					</div>
				</div>
		 		<div class="post">
		 			<div class="cat">
		 				<?php query_posts( array ( 'category_name' => 'fashion', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					    		<a href="http://circleminds.com/fashion/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4></div>
										
						<?php endwhile; endif; ?>
		 			</div>
		 			<div class="cat">
		 				<?php query_posts( array ( 'category_name' => 'hotels', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    		<a href="http://circleminds.com/hotels/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4></div>
										
						<?php endwhile; endif; ?>
		 			</div>
		 		</div>

		 		<div class="post">
		 			<div class="cat">
		 				<?php query_posts( array ( 'category_name' => 'lifestyle', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    		<a href="http://circleminds.com/lifestyle/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4></div>
										
						<?php endwhile; endif; ?>
		 			</div>
		 		</div>

		 		<div class="post">
		 			<div class="cat">
		 				<?php query_posts( array ( 'category_name' => 'luxury-brands', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    		<a href="http://circleminds.com/luxury-brands/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4>
					    			</div>	
										
						<?php endwhile; endif; ?>
		 			</div>
		 		</div>

		 		<div class="post">
					<div class="cat">
			 			<?php query_posts( array ( 'category_name' => 'art-design', 'posts_per_page' => 1 ) ); ?> 
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					    		<a href="http://circleminds.com/art-design/" class="linkCat"></a> 
					    		<div class="description">
					    			<h4><?php single_cat_title(); ?></h4></div>
										
						<?php endwhile; endif; ?>
					</div>
				</div>
				


		 		
</div>


<?php get_footer(); ?>


		 	