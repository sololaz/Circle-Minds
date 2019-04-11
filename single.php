<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
		
<?php
foreach((get_the_category()) as $childcat) {
	$parentcat = $childcat->category_parent;
	 echo '<a id="prev" href="' . get_category_link($childcat) .'">RETURN TO MENU</a>';
}
?>	
			<div class="entry">
				<h2><?php echo types_render_field( "logo", array( ) )?></h2>
				<h5><?php echo types_render_field( "sub", array( ) )?></h5>
				<?php the_content(); ?>

				<?php echo types_render_field( "video", array('width' => '730p', 'heigh' => '200') )?>

				<?php echo types_render_field("link", array("title" => "Go to website")) ?>

				<?php echo types_render_field("linnimg", array("class" => "imagLink")) ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
		</div>


	<?php endwhile; endif; ?>


	<script>

 
$(document).ready(function() {

	var imagUrl = $('.imagLink').attr('src') 
	$('.imagLink').hide();
	$('a[title="Go to website"]').css('background-image','url(' + imagUrl + ')')

});

		
</script>
	
<?php get_footer(); ?>
