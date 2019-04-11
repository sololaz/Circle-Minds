<?php
/*
Template Name: What We Do
*/
?>

<?php get_header(); ?>
<h2 id="title">What we do</h2>
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
					<?php echo $content; ?>
					<?php echo types_render_field( "imagen", array( "proportional" => "true" ) )?>
				</div>
			</div>
		</div>
	<?php
	}	?>
				


		 		
</div>

<script>

 
$(document).ready(function() {

	$('.cat').each(function(){

	var imagUrl = $(this).find('img').attr('src')
	$(this).css('background-image','url(' + imagUrl + ')')
	})
	$('.description img').hide();
	

});

		
</script>
<?php get_footer(); ?>


		 	