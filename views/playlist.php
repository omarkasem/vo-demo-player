<?php 
$title_font_and_size = explode(',',get_field('title_font_and_size',$post_id));
$desc_font_and_size = explode(',',get_field('desc_font_and_size',$post_id));
$time_font_and_size = explode(',',get_field('time_font_and_size',$post_id));
$popup_font_and_size = explode(',',get_field('popup_font_and_size',$post_id));
?>

<style>
    #un_<?php echo $post_id; ?> .progress-track,
    #un_<?php echo $post_id; ?> .precache-bar,
    #un_<?php echo $post_id; ?> .progress-bar
    {
        stroke:<?php echo get_field('circle_color',$post_id); ?>;
    }
    #un_<?php echo $post_id; ?> .mediPlayer:hover .progress-track,
    #un_<?php echo $post_id; ?> .mediPlayer:hover .precache-bar
    {
        stroke:<?php echo get_field('circle_color_hover',$post_id); ?>;
    }

    #un_<?php echo $post_id; ?> .play polygon{
        fill:<?php echo get_field('play_triangle_color',$post_id); ?>;
    }

    /* Active */
    #un_<?php echo $post_id; ?> .active_audio .pause line{
        stroke:<?php echo get_field('pause_lines_color',$post_id); ?>;
    }
    
    #un_<?php echo $post_id; ?> .active_audio .progress-bar{
        stroke:<?php echo get_field('circle_filling_color',$post_id); ?>;
    }

    #un_<?php echo $post_id; ?> .active_audio .progress-track,
    #un_<?php echo $post_id; ?> .active_audio .precache-bar{
        stroke:<?php echo get_field('circle_color2',$post_id); ?>;
    }

    #un_<?php echo $post_id; ?> .active_audio .download_icon svg{
        stroke:<?php echo get_field('download_icon_color2',$post_id); ?>;
    }
    

    @media only screen and (max-width: 600px) {
        .audio_duration{
            display:none;
        }
    }

    .active_audio{
        background: <?php echo get_field('background_highlight_color',$post_id); ?>;
    }
    

</style>

<div id="un_<?php echo $post_id; ?>" class="boxsounds" play_next="<?php echo get_field('play_next_track',$post_id); ?>"> 
    <div class="boxsounds__box " style="background: <?php echo get_field('background_color',$post_id); ?>;">

        <?php 
            $tracks = get_field('tracks',$post_id);
            if(!empty($tracks)){ $i=0;
                foreach($tracks as $track){ $i++;
        ?>
        <!-- Single box -->
        <div id="single_<?php echo $i; ?>" class="single_audio" style="border-bottom: 1px solid <?php echo get_field('border_color',$post_id); ?>;">
            <div style="display: flex;align-items: center;justify-content: space-between;padding: 15px 20px;">
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

                <div style="display: flex;align-items: center;flex: 0 0 20%;">
                    <p class="audio_duration" style="font-family:'<?php echo $time_font_and_size[0]; ?>';font-size:<?php echo $time_font_and_size[1]; ?>px;padding:0;margin:0;line-height: 1.4;color:<?php echo get_field('time_color',$post_id); ?>">
                        
                    </p>
                    <a class="download_icon tooltip" style="display: block;margin-left: 20px;" href="<?php echo $track['url']; ?>" download>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="<?php echo get_field('download_icon_color',$post_id); ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                        </svg>
                        <span style="color:<?php echo get_field('time_color',$post_id); ?>;font-family:'<?php echo $popup_font_and_size[0]; ?>';font-size:<?php echo $popup_font_and_size[1]; ?>px;" class="tooltiptext">Download</span>
                    </a>
                </div>
            </div>
        </div>
        <?php }} ?>
        <!-- End single box -->
    </div>
</div>