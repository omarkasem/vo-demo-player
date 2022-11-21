<?php
class OK_Caps_Playlist{

    public function __construct(){
        add_shortcode('VO_PLAYER',array($this,'shortcode'));
        add_action( 'wp_enqueue_scripts', array($this,'register_scripts') );+

        add_action( 'add_meta_boxes', array($this,'add_meta_box') );
    }


    public function add_meta_box() {
        add_meta_box( 'ok-caps-playlist', 'Shortcode', array($this,'metabox_callback'), 'vdp_playlist','side' );
    }

    public function metabox_callback( $post ) {
        if($post->post_status !== 'auto-draft'){
            echo '[VO_PLAYER id='.$post->ID.']';
        }else{
            echo 'Save the playlist to generate the shortcode';
        }
    }
    

    public function register_scripts(){
        wp_register_style( OK_CAPS_NAME, OK_CAPS_URL.'public/app.css',[],OK_CAPS_VERSION );
        wp_register_script( OK_CAPS_NAME, OK_CAPS_URL.'public/app.js',array('jquery'),OK_CAPS_VERSION );
    }

    public function shortcode($atts){
        wp_enqueue_script(OK_CAPS_NAME);
        wp_enqueue_style(OK_CAPS_NAME);
        
        ob_start();
        $post_id = $atts['id'];

        if(get_field('google_font_name',$post_id)){
            wp_enqueue_style( 'vo-demo-player-gfonts-'.$post_id, 'https://fonts.googleapis.com/css2?family='.get_field('google_font_name',$post_id).'&display=swap', false );
        }

        include(OK_CAPS_PATH . 'views/playlist.php');
        $html = ob_get_contents();
        ob_end_clean();
        return $html;

    }


}

new OK_Caps_Playlist();