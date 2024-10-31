<?php 

get_header( ); 

$nd_cc_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_position', true );
$nd_cc_meta_box_image = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image', true );
$nd_cc_meta_box_image_title = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_title', true );
$nd_cc_meta_box_color = get_post_meta( get_the_ID(), 'nd_cc_meta_box_color', true ); if ( $nd_cc_meta_box_color == '' ) { $nd_cc_meta_box_color = '#ebc858'; }
$nd_cc_meta_box_page_layout = get_post_meta( get_the_ID(), 'nd_cc_meta_box_page_layout', true );

$nd_cc_allowed_html = [
    'div'      => [
        'id'  => [],
        'class' => [],
        'style' => [],
    ],
    'h1'      => [
        'class' => [],
    ],
    'h2'      => [
        'class' => [],
    ],
    'h3'      => [
        'class' => [],
    ],
    'h4'      => [
        'class' => [],
    ],
    'p'      => [
        'class' => [],
    ],
    'a'      => [
        'class' => [],
        'href' => [],
        'style' => [],
    ],
    'img'      => [
        'alt' => [],
        'class' => [],
        'src' => [],
        'width' => [],
    ],
    'style'      => [],
];

?>



<?php 

if ( $nd_cc_meta_box_image != '' ) {

	include realpath(dirname( __FILE__ ).'/include/cpt-1-header-img.php');

} 

if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

	include realpath(dirname( __FILE__ ).'/include/cpt-1-info-bar.php');

} 

?>



<div class="nd_cc_section nd_cc_background_position_center_top nd_cc_background_repeat_no_repeat" id="nd_cc_single_project_page">

	<?php if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_page', true ) != '' ) { ?>
		<style>#nd_cc_single_project_page { background-image:url( <?php echo esc_url(get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_page', true )); ?> ); } </style>
	<?php } ?>


	<?php if ( nd_cc_get_container() != 1) {  ?>
		<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">
	<?php } ?>

	<?php 

	if(have_posts()) :
		while(have_posts()) : the_post();

			//default
		    $nd_cc_title = get_the_title();
		    $nd_cc_content = do_shortcode(get_the_content());
		    $nd_cc_id = get_the_ID();
			$nd_cc_meta_box_featured_image_size = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_size', true );
			$nd_cc_meta_box_featured_image_replace = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_replace', true );

			//page layout
		    if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_full_width' ) { 
		    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_100_percentage';
		    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';	
		    }elseif ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_right_sidebar' ) {
		    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_66_percentage';	
		    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';	
		    }elseif ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_left_sidebar' ){
		    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_66_percentage';	
		    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';
		    }else{ }

			//free content
	    	if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_free_content' ) {

	    		the_content();

	    	}else{ ?>


	    		<!--START CONTENT-->
				<div class="nd_cc_width_100_percentage nd_cc_float_left">
				 
				    <div class="nd_cc_section">

				    	<?php include realpath(dirname( __FILE__ ).'/include/cpt-1-image-content.php'); ?>

				    	<!--START left sidebar-->
				    	<?php 
				    	if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_left_sidebar' ) { ?>
				    		
				    		<div class="nd_cc_float_left nd_cc_sidebar nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">
					    		<?php dynamic_sidebar("nd_cc_sidebar_cpt_1"); ?>
					    	</div>
				    	
				    	<?php	
				    	} ?>
				    	<!--END left sidebar-->


				    	<div class="nd_cc_float_left <?php echo esc_attr($nd_cc_meta_box_page_layout_content_width); ?> nd_cc_width_100_percentage_responsive ">
				        	<div class=" nd_cc_width_100_percentage <?php echo esc_attr($nd_cc_meta_box_page_layout_content_class); ?> ">

						        <div class="nd_cc_section nd_cc_height_20"></div>

					        	<!--post-->
				                <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                    <?php the_content(); ?>
				                </div>
				                <!--post-->

					        	<div class="nd_cc_section nd_cc_height_40"></div>

					        	<style>
					        	@media only screen and (min-width: 320px) and (max-width: 767px) {
					        	.nd_cc_single_project_tags_container a { float:left; width:100%; margin:5px 0px 5px 0px; display:inline-block; box-sizing:border-box; line-height:25px; }	
					        	}
					        	</style>
								<div class="nd_cc_section nd_cc_single_project_tags_container">
									<?php 
									$nd_cc_tag_html = [
										'p'      => [
											'class' => [],
										],
										'a'      => [
											'rel' => [],
											'href' => [],
										],
									];
									$nd_cc_cpt_1_tags = get_the_tag_list('<p class="nd_options_first_font nd_options_color_greydark">'.__('TAGS','nd-projects').' : ','','</p>');
									echo wp_kses( $nd_cc_cpt_1_tags,$nd_cc_tag_html ); ?>	
								</div>

					        </div>
					    </div>


				    	<!--START right sidebar-->
				    	<?php 
				    	if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_right_sidebar' ) { ?>
				    		
				    		<div class="nd_cc_float_left nd_cc_sidebar nd_cc_margin_top_50_responsive nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">
					    		<?php dynamic_sidebar("nd_cc_sidebar_cpt_1"); ?>
					    	</div>
				    		
				    	<?php	
				    	} ?>
				    	<!--END right sidebar-->
				   
				    </div>

				</div>
				<!--END CONTENT-->

				<div class="nd_cc_section nd_cc_height_50"></div>


			<?php	
	    	}


		endwhile;
	endif;

	?>

	<?php if ( nd_cc_get_container() != 1) {  ?>
		</div>
	<?php } ?>


</div>




<?php include realpath(dirname( __FILE__ ).'/include/cpt-1-similar-projects.php'); ?>
<?php include realpath(dirname( __FILE__ ).'/include/cpt-1-pagination.php'); ?>



<?php get_footer( );


