<!--START black bar-->
<div id="nd_cc_info_project_bar" class="nd_cc_section nd_cc_bg_greydark nd_cc_padding_25_0 nd_cc_display_none">

    <?php if ( nd_cc_get_container() != 1) { ?>
    <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">
    <?php } ?>

    <?php 

    $nd_cc_meta_box_authors = get_post_meta( get_the_ID(), 'nd_cc_meta_box_authors', true );
    if ( $nd_cc_meta_box_authors == '' ){ $nd_cc_meta_box_authors = 0; }

    if ( $nd_cc_meta_box_authors != 0 ) {

        $nd_cc_author_title = get_the_title($nd_cc_meta_box_authors);
        $nd_cc_author_link = get_the_permalink($nd_cc_meta_box_authors);
        $nd_cc_author_role = get_post_meta( $nd_cc_meta_box_authors, 'nd_cc_meta_box_role', true );

        if ( $nd_cc_author_role == '' ) { $nd_cc_author_role = __('AUTHOR','nd-projects'); }
            
        $nd_cc_author_image = get_the_post_thumbnail_url($nd_cc_meta_box_authors,'thumbnail');

    ?>
        <!--start author-->
        <style>#nd_cc_info_project_bar { display:block; }</style>
        <div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">
            <div class="nd_cc_section nd_cc_position_relative">

                <?php if ( $nd_cc_author_image == '' ) { ?>
                <a href="<?php echo esc_url($nd_cc_author_link); ?>"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="<?php echo esc_url(plugins_url('../icon-user-white.png', __FILE__ )); ?>"></a>
                <?php }else{ ?>
                <a href="<?php echo esc_url($nd_cc_author_link); ?>"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="<?php echo esc_url(get_the_post_thumbnail_url($nd_cc_meta_box_authors,'thumbnail')); ?>"></a>
                <?php } ?>

                <div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
                    <a href="<?php echo esc_url($nd_cc_author_link); ?>"><h4 class="nd_options_color_white"><?php echo esc_html($nd_cc_author_role); ?></h4></a>
                    <div class="nd_cc_section nd_cc_height_20"></div>
                    <a href="<?php echo esc_url($nd_cc_author_link); ?>"><h4 class="nd_options_color_grey"><?php echo esc_html($nd_cc_author_title); ?></h4></a>
                </div>

            </div>

        </div>
        <!--end author-->

    <?php } ?>
    


    <!--start category-->
    <style>#nd_cc_info_project_bar { display:block; }</style>
    <div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

        <div class="nd_cc_section nd_cc_position_relative">

            <img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="<?php echo esc_url(plugins_url('../icon-category-grey.png', __FILE__ )); ?>">

            <div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
                <h4 class="nd_options_color_white"><?php echo esc_html__('CATEGORY','nd-projects'); ?></h4>
                <div class="nd_cc_section nd_cc_height_20"></div>
                <h4 class="nd_options_color_grey">

                    <?php 

                    $nd_cc_terms_category_project = wp_get_post_terms( get_the_ID(), 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
                    $nd_cc_terms_category_project_results = '';
                    foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { 
                        $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; 
                        echo esc_html($nd_cc_terms_category_project_results);
                    }

                    ?>

                </h4>
            </div>

        </div>

    </div>
    <!--end category-->
    

    
    <?php if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_budget', true ) != '' ) { ?>
    <!--start budget-->
    <style>#nd_cc_info_project_bar { display:block; }</style>
    <div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

        <div class="nd_cc_section nd_cc_position_relative">

            <img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="<?php echo esc_url(plugins_url('../icon-wallet-grey.png', __FILE__ )); ?>">

            <div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
                <h4 class="nd_options_color_white"><?php echo esc_html__('BUDGET','nd-projects'); ?></h4>
                <div class="nd_cc_section nd_cc_height_20"></div>
                <h4 class="nd_options_color_grey"><?php echo esc_html(get_post_meta( get_the_ID(), 'nd_cc_meta_box_budget', true )); ?></h4>
            </div>

        </div>

    </div>
    <!--end budget-->
    <?php } ?>



    <?php if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_text', true ) != '' ) { ?>
    <!--start button-->
    <style>#nd_cc_info_project_bar { display:block; }</style>
    <div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

        <a style="background-color:<?php echo esc_attr($nd_cc_meta_box_color); ?>" class="nd_cc_float_right nd_cc_float_left_responsive nd_cc_padding_15_35 nd_options_color_white nd_cc_font_size_20" href="<?php echo esc_url(get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_link', true )); ?>"><?php echo esc_html(get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_text', true )); ?></a>

    </div>
    <!--end button-->
    <?php } ?>
    


    <?php if ( nd_cc_get_container() != 1) { ?>
    </div> 
    <?php } ?>


</div>
<!--END black bar-->