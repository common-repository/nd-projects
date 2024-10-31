<?php 

/*START similar projects*/
if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

$nd_cc_meta_box_related_projects = get_post_meta( get_the_ID(), 'nd_cc_meta_box_related_projects', true );
if ( $nd_cc_meta_box_related_projects != '' ) {

    $nd_cc_meta_box_related_projects_array = explode(',', $nd_cc_meta_box_related_projects );

    //START content
    if ( $nd_cc_meta_box_related_projects_array != '' ) {

        wp_enqueue_script('masonry');


        $nd_cc_masonry_script = '
        <script type="text/javascript">
        //<![CDATA[

        jQuery(document).ready(function() {

          //START masonry
          jQuery(function ($) {
            
            //Masonry
                var $nd_cc_masonry_content = $(".nd_cc_masonry_content").imagesLoaded( function() {
                  // init Masonry after all images have loaded
                  $nd_cc_masonry_content.masonry({
                    itemSelector: ".nd_cc_masonry_item"
                  });
                });

          });
          //END masonry

        });

        //]]>
        </script>';
        wp_add_inline_script('masonry',$nd_cc_masonry_script);

        
        $nd_cc_result_similar_projects .= '
        <div id="nd_cc_single_project_related_p" class="nd_cc_section nd_cc_border_top_1_solid_grey">
    
            <div class="nd_cc_section nd_cc_height_70"></div>';

            if ( nd_cc_get_container() != 1) {  $nd_cc_result_similar_projects .= '
            <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

                $nd_cc_result_similar_projects .= '
                <h3 class="nd_options_color_grey nd_cc_text_align_center nd_cc_letter_spacing_2">'.__('CHECK ALL','nd-projects').'</h3>
                <div class="nd_cc_section nd_cc_height_30"></div>
                <h1 class="nd_cc_text_align_center nd_cc_font_size_50 nd_cc_line_height_50">'.__('Latest Projects','nd-projects').'</h1>
                <div class="nd_cc_section nd_cc_height_25"></div>

                <!--START MASONRY-->
                <div class="nd_cc_section nd_cc_masonry_content">';
    }
    //END content



    //START CICLE
    for ($nd_cc_meta_box_related_projects_array_i = 0; $nd_cc_meta_box_related_projects_array_i < count($nd_cc_meta_box_related_projects_array)-1; $nd_cc_meta_box_related_projects_array_i++) {
        
        $nd_cc_page_by_path = get_page_by_path($nd_cc_meta_box_related_projects_array[$nd_cc_meta_box_related_projects_array_i],OBJECT,'nd_cc_cpt_1');

        $nd_cc_rel_id = $nd_cc_page_by_path->ID;
        $nd_cc_title = get_the_title( $nd_cc_rel_id );
        $nd_cc_permalink = get_permalink( $nd_cc_rel_id );

        //metabox
        $nd_cc_meta_box_color = get_post_meta( $nd_cc_rel_id, 'nd_cc_meta_box_color', true ); if ($nd_cc_meta_box_color == '') { $nd_cc_meta_box_color = '#ebc858'; }
        $nd_cc_meta_box_text_preview = get_post_meta( $nd_cc_rel_id, 'nd_cc_meta_box_text_preview', true );

        //category
        $nd_cc_terms_category_project = wp_get_post_terms( $nd_cc_rel_id, 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
        $nd_cc_terms_category_project_results = '';
        $nd_cc_project_category = '';
        foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; }
        if ( $nd_cc_terms_category_project_results != '' ) {
            $nd_cc_project_category = '<a class="nd_options_color_white nd_cc_font_size_13 nd_cc_position_absolute nd_cc_right_30 nd_cc_padding_top_5 nd_cc_top_30 nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_greydark nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.$nd_cc_permalink.'">'.$nd_cc_terms_category_project_results.'</a>';
        }


        //image
        if ( has_post_thumbnail() ) { 

            $nd_cc_image_id = get_post_thumbnail_id( $nd_cc_rel_id );
            $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, 'nd_cc_image_size_700_1000' );

            $nd_cc_image = '

                <div class="nd_cc_section nd_cc_position_relative">

                    <img alt="" class="nd_cc_section" src="'.$nd_cc_image_attributes[0].'">

                    <div class="nd_cc_bg_greydark_alpha_gradient_5 nd_cc_position_absolute nd_cc_left_0 nd_cc_height_100_percentage nd_cc_width_100_percentage nd_cc_padding_30 nd_cc_box_sizing_border_box">
                        
                        <div class="nd_cc_position_absolute nd_cc_bottom_30">
                            <a href="'.$nd_cc_permalink.'"><p class="nd_options_color_white nd_cc_float_left nd_cc_letter_spacing_2 nd_cc_text_transform_uppercase nd_cc_padding_right_85">'.$nd_cc_title.'</p></a>
                        </div>

                        <div style="background-color:'.$nd_cc_meta_box_color.'" class="nd_cc_width_25 nd_cc_height_25 nd_cc_position_absolute nd_cc_right_30 nd_cc_bottom_30">
                            <a href="'.$nd_cc_permalink.'"><img class="nd_cc_position_absolute nd_cc_left_5 nd_cc_top_5" alt="" width="15" src="'.esc_url(plugins_url('../icon-add-white.png', __FILE__ )).'"></a>
                        </div>

                        '.$nd_cc_project_category.'

                    </div>

                </div>


            ';
        }else{ 
            $nd_cc_image = '';
        }


        $nd_cc_result_similar_projects .= '
        <div id="nd_cc_relp_cpt_1_single_'.$nd_cc_rel_id.'" class=" nd_cc_rel_projects_component_l1 nd_cc_masonry_item nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">

            <div class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box">

                <div class="nd_cc_section">
                    
                    '.$nd_cc_image.'    
           
                </div>

            </div>

        </div>';

    }
    //END CICLE


    //START close content
    if ( $nd_cc_meta_box_related_projects_array != '' ) {

        $nd_cc_result_similar_projects .= '
                </div>
                <!--END MASONRY-->';


            if ( nd_cc_get_container() != 1) {  $nd_cc_result_similar_projects .= '
            </div>'; }


            $nd_cc_result_similar_projects .= '
            <div class="nd_cc_section nd_cc_height_60"></div>

        </div>';
    }
    //END close content


}   
}   
/*END similar projects*/



echo wp_kses( $nd_cc_result_similar_projects, $nd_cc_allowed_html );