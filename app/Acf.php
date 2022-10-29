<?php
class OK_Caps_Acf{

    public function __construct(){
        include_once( OK_CAPS_ACF_PATH . 'acf.php' );
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
        

    }


    function my_acf_prepare_field( $field ) {

        // Don't show this field once it contains a value.
        if( $field['value'] ) {
            return false;
        }
        return $field;
    }
    
    // Apply to fields named "example_field".
    
    

        

}

new OK_Caps_Acf();