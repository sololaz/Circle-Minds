<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 		
		
			<?php if (is_category()) { ?>
				<h2 id="title" style="margin-top:-130px"><?php $catstr = get_category_parents($cat, FALSE, ' <br> ');
echo substr($catstr, 0 ); ?></h2>
			<?php } ?>


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
				