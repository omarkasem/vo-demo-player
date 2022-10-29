<?php
class OK_Circular_AudioPlayer_Shortcode{

    public function __construct(){
        add_shortcode('CIRC_AUDIOPLAYER',array($this,'shortcode'));
        add_action( 'wp_enqueue_scripts', array($this,'register_scripts') );
    }

    public function register_scripts(){
        wp_register_style( OK_CAPS_NAME, OK_CAPS_URL.'public/app.css',[],OK_CAPS_VERSION );
        wp_register_script( OK_CAPS_NAME, OK_CAPS_URL.'public/app.js',array('jquery'),OK_CAPS_VERSION );
    }

    public function shortcode($attributes){
        wp_enqueue_script(OK_CAPS_NAME);
        wp_enqueue_style(OK_CAPS_NAME);
        
        ob_start();

        $download_text = $attributes['download_text'] ?? 'Donwload MP3';
        $background_color = $attributes['background_color'] ?? '#000';
        $border_color = $attributes['border_color'] ?? '#212121';
        $icon_color = $attributes['icon_color'] ?? '#ce4668';
        $text_color = $attributes['text_color'] ?? '#fff';
		$icon_color_hover = $attributes['icon_color_hover'] ?? '';
        $font_size = $attributes['font_size'] ?? '16';
        $font_family = $attributes['font_family'] ?? 'Times New Roman';

		
		

        $url = $attributes['url'] ?? '';
        $title = $attributes['title'] ?? '';
        $description = $attributes['description'] ?? '';
        $id = ($attributes['url'] ? md5(uniqid($attributes['url'], true)) : '');


        include(OK_CAPS_PATH . 'views/audio.php');
        $html = ob_get_contents();
        ob_end_clean();
        return $html;

    }


}

new OK_Circular_AudioPlayer_Shortcode();