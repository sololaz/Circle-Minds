
<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2 id="title" style="margin-top:-90px"><?php the_title(); ?></h2>

			<div id="contenido">

			<div id="texto">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>


			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		

		<?php endwhile; endif; ?>

		


</body>
</html>


<?php get_footer(); ?>
