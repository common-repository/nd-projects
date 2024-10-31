<!--START details box-->
<?php

$nd_cc_meta_box_image_box = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_image_box', true );
if ( $nd_cc_meta_box_image_box != '' ) {
	$nd_cc_image_box_style = ' background-image:url('.$nd_cc_meta_box_image_box.'); background-position:center; background-size:cover; ';
}else {
	$nd_cc_image_box_style = ' background-color:'.$nd_cc_meta_box_color.'; ';	
}

?>
<div id="nd_cc_single_cpt_1_box" style="<?php echo esc_attr($nd_cc_image_box_style); ?>" class="<?php echo esc_attr($nd_cc_details_class); ?> nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive nd_cc_display_inline_block_responsive nd_cc_box_sizing_border_box nd_cc_display_table_cell nd_cc_vertical_align_middle">

	<h2 class="nd_options_color_white nd_cc_text_align_center nd_cc_margin_top_40_responsive"><?php echo esc_html__('DETAILS','nd-projects'); ?></h2>

	<div class="nd_cc_padding_40 nd_cc_section nd_cc_box_sizing_border_box">

		<!--START customer-->
		<?php 
		if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ) != '' ) { ?>

			<div class="nd_cc_section">
        		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
        			<h4 class="nd_options_color_white"><?php echo esc_html__('CUSTOMER','nd-projects'); ?></h4>
        		</div>
        		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
        			<p class="nd_options_color_white nd_cc_line_height_17"><?php echo esc_html(get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true )); ?></p>
        		</div>
        	</div>
        	<div class="nd_cc_section nd_cc_height_20"></div>
        	
		<?php
		} ?>
		<!--END customer-->

		<!--START location-->
		<?php
		if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ) != '' ) { ?>

        	<div class="nd_cc_section">
        		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
        			<h4 class="nd_options_color_white"><?php echo esc_html__('LOCATION','nd-projects'); ?></h4>
        		</div>
        		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
        			<p class="nd_options_color_white nd_cc_line_height_17"><?php echo esc_html(get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true )); ?></p>
        		</div>
        	</div>
        	<div class="nd_cc_section nd_cc_height_20"></div>

		<?php
		} ?>
		<!--END location-->

		<!--START start data-->
		<?php
		if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ) != '' ) { ?>

        	<div class="nd_cc_section">
        		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
        			<h4 class="nd_options_color_white"><?php echo esc_html__('START DATA','nd-projects'); ?></h4>
        		</div>
        		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
        			<p class="nd_options_color_white nd_cc_line_height_17"><?php echo esc_html(get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true )); ?></p>
        		</div>
        	</div>
        	<div class="nd_cc_section nd_cc_height_20"></div>

    	<?php
		} ?>
		<!--END start data-->

		<!--START duration-->
		<?php
		if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ) != '' ) { ?>

    	<div class="nd_cc_section">
    		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
    			<h4 class="nd_options_color_white"><?php echo esc_html__('DURATION','nd-projects'); ?></h4>
    		</div>
    		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
    			<p class="nd_options_color_white nd_cc_line_height_17"><?php echo esc_html(get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true )); ?></p>
    		</div>
    	</div>
    	<div class="nd_cc_section nd_cc_height_20"></div>

		<?php
		} ?>
		<!--END duration-->
		
		<!--START size-->
		<?php
    	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ) != '' ) { ?>

		
    	<div class="nd_cc_section">
    		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
    			<h4 class="nd_options_color_white"><?php echo esc_html__('PROJECT SIZE','nd-projects'); ?></h4>
    		</div>
    		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
    			<p class="nd_options_color_white nd_cc_line_height_17"><?php echo esc_html(get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true )); ?></p>
    		</div>
    	</div>

		<?php
		} ?>
		<!--END size-->

	</div>

</div>
<!--END details box-->