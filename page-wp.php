<?php
/*
Template Name: World & Projects
*/
?>

<?php get_header(); ?>
<h2 id="title">World & Projects</h2>
		<div id="contenido">

		 		<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<div class="post">
			<div class="cat">
				<div class="description">
					<h4><?php echo $page->post_title; ?></h4>
					<div class="imagenBack">
						<?php echo $content; ?>
				</div>
				</div>
			</div>
		</div>
	<?php
	}	?>
				

</div>


<?php get_footer(); ?>


		 	