<?php

//check if details is empty
if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ) == '' ) {
    $nd_cc_image_class = 'nd_cc_width_100_percentage nd_cc_width_100_percentage_responsive';
    $nd_cc_details_class = 'nd_cc_display_none_important';
}else{
    $nd_cc_image_class = 'nd_cc_width_66_percentage nd_cc_width_100_percentage_responsive'; 
    $nd_cc_details_class = '';
}

if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

    //check the featured img replace
    if ( $nd_cc_meta_box_featured_image_replace == '' ) {

        if ( has_post_thumbnail() ) { ?>

            <?php
            $nd_cc_image_id = get_post_thumbnail_id( $nd_cc_id );
            $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, $nd_cc_meta_box_featured_image_size );
            ?>

            <div class="nd_cc_section nd_cc_height_40"></div>
            
            <!--START image and details-->
            <div id="nd_cc_single_cpt_1_image_and_box" class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_display_table">
                
                <!--START image-->
                <div id="nd_cc_single_cpt_1_image" class="<?php echo esc_attr($nd_cc_image_class); ?> nd_cc_box_sizing_border_box nd_cc_width_100_percentage_responsive nd_cc_display_table_cell nd_cc_display_inline_block_responsive nd_cc_vertical_align_middle">
                    <img alt="" class="nd_cc_section" src="<?php echo esc_url($nd_cc_image_attributes[0]); ?>">
                </div>  
                <!--END image-->

                <?php include realpath(dirname( __FILE__ ).'/cpt-1-details-box.php'); ?>

            </div>
            <!--START image and details-->

        <?php
        }

    }else { ?>

        <div class="nd_cc_section nd_cc_height_40"></div>

        <!--START iframe and details-->
        <div id="nd_cc_single_cpt_1_image_and_box" class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_display_table">

            <!--START iframe-->
            <div id="nd_cc_single_cpt_1_image_and_box_iframe" class="<?php echo esc_attr($nd_cc_image_class); ?> nd_cc_box_sizing_border_box nd_cc_display_table_cell nd_cc_display_inline_block_responsive nd_cc_vertical_align_middle">
                <?php 

                $nd_cc_imgreplace_html = [
                    'style'      => [],
                    'script'      => [],
                    'div'      => [ 
                        'class'  => [],
                        'id'  => [],
                        'style'  => [],
                    ],
                    'img'      => [ 
                        'src'  => [],
                    ],
                    'span'      => [ 
                        'tabindex'  => [], 
                        'class'  => [],
                        'style'  => [],
                    ],               
                ];

                echo wp_kses(do_shortcode($nd_cc_meta_box_featured_image_replace),$nd_cc_imgreplace_html); 

                ?>
            </div>
            <!--END Iframe-->

            <?php include realpath(dirname( __FILE__ ).'/cpt-1-details-box.php'); ?>

        </div>
        <!--END iframe and details-->

    <?php
    }

}