<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 		

<a id="prev" href="http://www.circleminds.com/world-projects/">RETURN TO MENU</a>
				<h2 id="title" style="margin-top:-110px">WORLD & PROJECTS <br> <span>- Hotels  -</span></h2>

			
			<?php while (have_posts()) : the_post(); ?>
			
			
				
						
<div id="contenido">


						<div class="post">
							<h2><a href="<?php the_permalink() ?>"><?php echo types_render_field( "logo", array( ) )?></a></h2>
		<h5><?php echo types_render_field( "sub", array( ) )?></h5>
							<div class="excerpt"><?php the_excerpt(); ?> </div>				
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>

						</div>

				</div>

			<?php endwhile; ?>

			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>


<?php get_footer(); ?>


		


		 

		 		
</div>		