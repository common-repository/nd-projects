<?php

/*START project navigation*/
if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

//next link
$nd_cc_next_project_result = '';
$nd_cc_next_project = get_next_post();
if ( !empty( $nd_cc_next_project ) ){
    $nd_cc_next_project_link = get_permalink( $nd_cc_next_project->ID ); 
    
    $nd_cc_next_project_result .= '

        <a href="'.$nd_cc_next_project_link.'"><img alt="" class=" " width="20" src="'.esc_url(plugins_url('../icon-next-white.svg', __FILE__ )).'"></a>

    ';
}

$nd_cc_result_pagination .= '
<div style="background-color:'.$nd_cc_meta_box_color.'" id="nd_cc_single_project_navigation" class="nd_cc_section">';

    if ( nd_cc_get_container() != 1) {  $nd_cc_result_pagination .= '
    <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }


        $nd_cc_result_pagination .= '
        <div class="nd_cc_section nd_cc_height_10"></div>';


        /*START PREV PROJECT*/
        $nd_cc_prev_project = get_previous_post();
        if ( !empty( $nd_cc_prev_project ) ){

        $nd_cc_result_pagination .= '
        <div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage">

            <div class="nd_cc_section nd_cc_position_relative">

                <a href="'.get_permalink( $nd_cc_prev_project->ID ).'"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.get_the_post_thumbnail_url($nd_cc_prev_project->ID,'thumbnail').'"></a>

                <div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box nd_cc_display_none_responsive">
                    <h4 class="nd_options_color_white">'.get_the_title($nd_cc_prev_project->ID).'</h4>
                    <div class="nd_cc_section nd_cc_height_8"></div>
                    <a class=" nd_cc_font_size_13 nd_cc_padding_top_5 nd_cc_display_inline_block nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_white nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.get_permalink( $nd_cc_prev_project->ID ).'">'.__('PREV','nd-projects').'</a>
                </div>

            </div>

        </div>';

        }else{

        $nd_cc_result_pagination .= '
        <div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage"></div>';

        }
        /*END PREV PROJECT*/

        
        $nd_cc_result_pagination .= '
        <div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_20_percentage nd_cc_text_align_center">
            <a href="'.get_post_type_archive_link('nd_cc_cpt_1').'"><img class="nd_cc_margin_top_12" width="30" src="'.esc_url(plugins_url('../icon-archive-white.png', __FILE__ )).'"></a>
        </div>';


        /*START NEXT PROJECT*/
        $nd_cc_next_project = get_next_post();
        if ( !empty( $nd_cc_next_project ) ){
        
        $nd_cc_result_pagination .= '
        <div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage">

            <div class="nd_cc_section nd_cc_position_relative nd_cc_text_align_right">

                <a href="'.get_permalink( $nd_cc_next_project->ID ).'"><img width="50" class="nd_cc_position_absolute nd_cc_right_0 nd_cc_top_0" src="'.get_the_post_thumbnail_url($nd_cc_next_project->ID,'thumbnail').'"></a>

                <div class="nd_cc_section nd_cc_padding_right_70 nd_cc_box_sizing_border_box nd_cc_display_none_responsive">
                    <h4 class="nd_options_color_white">'.get_the_title($nd_cc_next_project->ID).'</h4>
                    <div class="nd_cc_section nd_cc_height_8"></div>
                    <a class=" nd_cc_font_size_13 nd_cc_padding_top_5 nd_cc_display_inline_block nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_white nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.get_permalink( $nd_cc_next_project->ID ).'">'.__('NEXT','nd-projects').'</a>
                </div>

            </div>

        </div>';

        }else{

        $nd_cc_result_pagination .= '
        <div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage"></div>';

        }
        /*END NEXT PROJECT*/



        $nd_cc_result_pagination .= '
        <div class="nd_cc_section nd_cc_height_10"></div>';


    if ( nd_cc_get_container() != 1) {  $nd_cc_result_pagination .= '
    </div>'; }

$nd_cc_result_pagination .= '
</div>
';
}
/*END project navigation*/


echo wp_kses( $nd_cc_result_pagination, $nd_cc_allowed_html );