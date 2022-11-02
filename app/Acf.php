<?php
class OK_Caps_Acf{

    public function __construct(){
        include_once( OK_CAPS_ACF_PATH . 'acf.php' );
        $this->add_hooks();
        $this->acf_code();
    }

    public function add_hooks(){
        
        add_filter('acf/settings/url', array($this,'my_acf_settings_url'));
        add_filter('acf/settings/show_admin', array($this,'show_admin'));

    }

    public function my_acf_settings_url( $url ) {
        return OK_CAPS_ACF_URL;
    }

    
    public function show_admin( $show_admin ) {
        return OK_CAPS_ACF_SHOW;
    }



    public function acf_code(){

        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_635ca8e733927',
                'title' => 'Playlists',
                'fields' => array(
                    array(
                        'key' => 'field_635ca8e7f3a1a',
                        'label' => 'FONTS',
                        'name' => '',
                        'aria-label' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'field_635ca924f3a1c',
                        'label' => 'Title Font and Size',
                        'name' => 'title_font_and_size',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => 'Comma seperated',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Poppins, 14',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_635ca93af3a1d',
                        'label' => 'Title Color',
                        'name' => 'title_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#FFFFFF',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca94cf3a1f',
                        'label' => 'Description Font and Size',
                        'name' => 'desc_font_and_size',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => 'Comma seperated',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Poppins, 10',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_635ca95df3a20',
                        'label' => 'Description Color',
                        'name' => 'desc_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#B4B4B5',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca971f3a21',
                        'label' => 'Time Font and Size',
                        'name' => 'time_font_and_size',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => 'Comma seperated',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Poppins, 10',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_635cb2ca96dcc',
                        'label' => 'Time Color',
                        'name' => 'time_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#B4B4B5',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca989f3a23',
                        'label' => 'Popup Font and Size',
                        'name' => 'popup_font_and_size',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => 'Comma seperated',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Poppins, 8',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_635cb2dc96dcd',
                        'label' => 'Popup Color',
                        'name' => 'popup_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#B4B4B5',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9a074ca8',
                        'label' => 'COLORS',
                        'name' => '',
                        'aria-label' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'field_635ca9a774ca9',
                        'label' => 'Background color',
                        'name' => 'background_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#0F0F0F',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9b374caa',
                        'label' => 'Border color',
                        'name' => 'border_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#2E2E2E',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9c074cab',
                        'label' => 'Circle color',
                        'name' => 'circle_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#4A4A4A',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9c774cac',
                        'label' => 'Circle color hover',
                        'name' => 'circle_color_hover',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#FFFFFF',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9d474cad',
                        'label' => 'Play triangle color',
                        'name' => 'play_triangle_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#FFFFFF',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9de74cae',
                        'label' => 'Download icon color',
                        'name' => 'download_icon_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#939393',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635ca9f574caf',
                        'label' => 'ACTIVE PLAYING TRACK',
                        'name' => '',
                        'aria-label' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'field_635caa2656c20',
                        'label' => 'Background highlight color',
                        'name' => 'background_highlight_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#1C1C1C',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635caa4156c21',
                        'label' => 'Circle color',
                        'name' => 'circle_color2',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#5D4C2E',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635caa5656c22',
                        'label' => 'Circle filling color',
                        'name' => 'circle_filling_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#DCAD54',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635caa5a56c23',
                        'label' => 'Pause lines color',
                        'name' => 'pause_lines_color',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#DCAD54',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635caa6756c24',
                        'label' => 'Download icon color',
                        'name' => 'download_icon_color2',
                        'aria-label' => '',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#DCAD54',
                        'enable_opacity' => 1,
                        'return_format' => 'string',
                    ),
                    array(
                        'key' => 'field_635caabc92373',
                        'label' => 'TRACKS',
                        'name' => '',
                        'aria-label' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'field_635caa8456c26',
                        'label' => 'Play next track of this playlist automatically',
                        'name' => 'play_next_track',
                        'aria-label' => '',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_635caac892374',
                        'label' => 'Tracks',
                        'name' => 'tracks',
                        'aria-label' => '',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'pagination' => 0,
                        'min' => 0,
                        'max' => 0,
                        'collapsed' => '',
                        'button_label' => 'Add Track',
                        'rows_per_page' => 20,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_635caad592375',
                                'label' => 'URL',
                                'name' => 'url',
                                'aria-label' => '',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'parent_repeater' => 'field_635caac892374',
                            ),
                            array(
                                'key' => 'field_635caae092376',
                                'label' => 'TITLE',
                                'name' => 'title',
                                'aria-label' => '',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'maxlength' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'parent_repeater' => 'field_635caac892374',
                            ),
                            array(
                                'key' => 'field_635caae592377',
                                'label' => 'DESCRIPTION',
                                'name' => 'description',
                                'aria-label' => '',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'maxlength' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'parent_repeater' => 'field_635caac892374',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'vdp_playlist',
                        ),
                    ),
                ),
                'menu_order' => 2,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));
            
            endif;		
        
        

    }


}

new OK_Caps_Acf();