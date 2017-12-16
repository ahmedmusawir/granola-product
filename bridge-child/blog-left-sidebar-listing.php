<?php 
/*
Template Name: Blog Left Sidebar Listing
*/ 
?>
<?php get_header(); ?>
<?php 
global $wp_query;
global $qode_template_name;
$id = $wp_query->get_queried_object_id();
$qode_template_name = get_page_template_slug($id);
$category = get_post_meta($id, "qode_choose-blog-category", true);
$post_number = get_post_meta($id, "qode_show-posts-per-page", true);
$page_object = get_post( $id );
$content = $page_object->post_content;
$content = apply_filters( 'the_content', $content );
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$sidebar = get_post_meta($id, "qode_show-sidebar", true); 


if(get_post_meta($id, "qode_page_background_color", true) != ""){
	$background_color = get_post_meta($id, "qode_page_background_color", true);
}else{
	$background_color = "";
}

if($qode_options_proya['number_of_chars_large_image'] != "") {
	qode_set_blog_word_count($qode_options_proya['number_of_chars_large_image']);
}

$blog_content_position = "content_above_blog_list";
if(isset($qode_options_proya['blog_content_position'])){
	$blog_content_position = $qode_options_proya['blog_content_position'];
}

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
				
					<div class="blog_three_columns background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
									<?php dynamic_sidebar( 'sidebar' ); ?>
							<?php endif; ?>
						</div>
						<div class="column2">
							
							<div class="column_inner">

								<?php
									if($blog_content_position == "content_above_blog_list"){
										echo $content;
									}
								?>

								<?php 
									get_template_part('templates/blog', 'structure');
								?>				
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