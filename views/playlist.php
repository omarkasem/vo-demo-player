<?php 
$title_font_and_size = explode(',',get_field('title_font_and_size',$post_id));
$desc_font_and_size = explode(',',get_field('desc_font_and_size',$post_id));
$time_font_and_size = explode(',',get_field('time_font_and_size',$post_id));
$popup_font_and_size = explode(',',get_field('popup_font_and_size',$post_id));
?>

<style>
    #un_<?php echo $post_id; ?> .play polygon{
        fill:<?php echo $icon_color; ?>;
    }
    #un_<?php echo $post_id; ?> .pause line,#un_<?php echo $post_id; ?> .stop rect,#un_<?php echo $post_id; ?> .shape .progress-bar{
        stroke:<?php echo $icon_color; ?>;
    }
    
    #un_<?php echo $post_id; ?> .mediPlayer:hover .progress-track,
    #un_<?php echo $post_id; ?> .download_icon:hover svg{
        stroke:<?php echo $icon_color_hover; ?>;
    }

    @media only screen and (max-width: 600px) {
        .audio_duration{
            display:none;
        }
    }
    
    .active_audio{
        background: rgb(255 255 255 / 8%)!important;
    }

</style>

<div id="un_<?php echo $post_id; ?>" class="boxsounds"> 
    <div class="boxsounds__box " style="background: <?php echo get_field('background_color',$post_id); ?>;">

        <?php 
            $tracks = get_field('tracks',$post_id);
            if(!empty($tracks)){
                foreach($tracks as $track){
        ?>
        <!-- Single box -->
        <div style="border-bottom: 1px solid <?php echo get_field('border_color',$post_id); ?>;">
            <div style="display: flex;align-items: center;justify-content: space-between;padding:20px;">
                <div style="display: flex;align-items: flex-start;">
                    <div class="mediPlayer">
                        <audio class="listen" preload="none" data-size="60" src="<?php echo $track['url']; ?>"></audio>
                    </div>

                    <div style="margin-left:20px;">
                        <p class="title" style="font-family:'<?php echo $title_font_and_size[0]; ?>';font-size:<?php echo $title_font_and_size[1]; ?>px;font-weight: 600;padding:0;margin-bottom: 4px;line-height: 1.4;margin-top: 0;color:<?php echo get_field('title_color',$post_id); ?>">
                            <?php echo $track['title']; ?>
                        </p>
                            <p class="desc" style="font-family:'<?php echo $desc_font_and_size[0]; ?>';font-size:<?php echo $desc_font_and_size[1]; ?>px;margin:0;line-height: 1.4;color:<?php echo get_field('desc_color',$post_id); ?>">
                                <?php echo $track['description']; ?>
                            </p>
                    </div>
                </div>

                <div style="display: flex;align-items: center;    flex: 0 0 20%;">
                    <p class="audio_duration" style="font-family:'<?php echo $time_font_and_size[0]; ?>';font-size:<?php echo $time_font_and_size[1]; ?>px;padding:0;margin:0;line-height: 1.4;color:<?php echo get_field('time_color',$post_id); ?>">
                        
                    </p>
                    <a class="download_icon tooltip" style="display: block;margin-left: 20px;" href="<?php echo $url; ?>" download>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="<?php echo $icon_color; ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                        </svg>
                        <span style="color:<?php echo get_field('time_color',$post_id); ?>;font-family:'<?php echo $popup_font_and_size[0]; ?>';font-size:<?php echo $popup_font_and_size[1]; ?>px;" class="tooltiptext"><?php echo $download_text ?></span>
                    </a>
                </div>
            </div>
        </div>
        <?php }} ?>
        <!-- End single box -->
    </div>
</div>