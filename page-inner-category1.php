
<?php
/*
Template Name: Category Art d& Design
*/
?>


<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 		

			
				<h2 id="title" style="margin-top:-110px">WORLD & PROJECTS <br> <span>- Art & Design  -</span></h2>

			<?php query_posts( array ( 'category_name' => 'art-design') ); ?> 
			<?php while (have_posts()) : the_post(); ?>
			
			
				
						
<div id="contenido">


						<div class="post">
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
						</div>

				</div>

			<?php endwhile; ?>

			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>


<?php get_footer(); ?>


		


		 

		 		
</div>
				