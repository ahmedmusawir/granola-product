<?php 
/*
Template Name: Page Both Sidebar Listing
*/ 
?>
<?php get_header(); ?>
<?php 
$sidebar = get_post_meta($id, "qode_show-sidebar", true); 

?>
	<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
			<script>
			var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
			</script>
		<?php } ?>
			<?php get_template_part( 'title' ); ?>
	
	<?php
		$revslider = get_post_meta($id, "qode_revolution-slider", true);
		if (!empty($revslider)){ ?>
			<div class="q_slider"><div class="q_slider_inner">
			<?php echo do_shortcode($revslider); ?>
			</div></div>
		<?php
		}
		?>
	<?php 
		query_posts('post_type=post&paged='. $paged . '&cat=' . $category .'&posts_per_page=' . $post_number );
	?>
<div class="custom_font_holder titlehead" ><?php echo get_the_title(); ?></div>
<div class="custom_font_holder titlesubhead" >Blog - News - Interviews</div>
<div class="custom_font_holder titlesubhead2" ><a href="http://www.1800granola.com/video-index/">Video Index</a></div>
<div class="custom_font_holder titlesubhead3" >Our Friends & Our Partners Making The World A Better Place</div>
<div class="custom_font_holder titlesubhead4" >Send Us Your Granola Recipes!</div>
	<div class="container"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>
		<div class="container_inner default_template_holder">
				
					<div class="blog_three_columns page_three_column background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
									<?php dynamic_sidebar( 'sidebar' ); ?>
							<?php endif; ?>
						</div>
						<div class="column2">
							
							<div class="column_inner">

								<?php the_content(); ?>			
							</div>
								
						</div>
						<div class="column3">
							<?php if ( is_active_sidebar( 'arbitrary' ) ) : ?>
									<?php dynamic_sidebar( 'arbitrary' ); ?>
							<?php endif; ?>
						</div>
					</div>
				
	</div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>