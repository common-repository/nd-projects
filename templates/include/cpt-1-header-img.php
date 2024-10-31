<!--START header image-->
<div id="nd_cc_single_cpt_1_header_image" class="nd_cc_section nd_cc_background_size_cover <?php echo esc_attr($nd_cc_meta_box_image_position); ?> " style="background-image:url(<?php echo esc_url($nd_cc_meta_box_image); ?>);">
    <div class="nd_cc_section nd_cc_bg_greydark_alpha_gradient_7">

        <?php if ( nd_cc_get_container() != 1) { ?>
            <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix"> 
        <?php } ?>

        <div id="nd_cc_single_cpt_1_header_image_space_top" class="nd_cc_section nd_cc_height_120"></div>

        <?php if ( $nd_cc_meta_box_image_title != '' ) { ?> 
            <h1 class="nd_cc_text_align_center nd_options_color_white nd_cc_font_size_50"><?php echo esc_html($nd_cc_meta_box_image_title); ?></h1>
        <?php } ?>
    
        <div id="nd_cc_single_cpt_1_header_image_space_bottom" class="nd_cc_section nd_cc_height_120"></div>

        <?php if ( nd_cc_get_container() != 1) { ?>
            </div> 
        <?php } ?>

    </div>

</div>
<!--END header image-->