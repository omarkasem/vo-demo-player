<?php 
$title_font_and_size = explode(',',get_field('title_font_and_size',$post_id));
$desc_font_and_size = explode(',',get_field('desc_font_and_size',$post_id));
$time_font_and_size = explode(',',get_field('time_font_and_size',$post_id));
$popup_font_and_size = explode(',',get_field('popup_font_and_size',$post_id));

// Get the layout type, grid rows number, and size
$layout_type = get_field('type', $post_id);
$grid_rows_number = get_field('grid_rows_number', $post_id);
$size = get_field('size', $post_id);

// Define scaling factors for the small size
$small_scale = get_field('small_scale',$post_id); // Adjust this value to make elements smaller or larger
$small_padding = 10; // Reduced padding for small size
$small_scale_for_player = (get_field('small_scale_for_player',$post_id) > 0) ? get_field('small_scale_for_player',$post_id) : 1;
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

    #un_<?php echo $post_id; ?> .single_audio_content{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #un_<?php echo $post_id; ?> .single_audio_content_left{
        display: flex;
        align-items: center;
    }

    #un_<?php echo $post_id; ?> .single_audio_content_left_text{
        margin-left:20px;
    }

    @media only screen and (max-width: 600px) {
        .audio_duration{
            display:none;
        }
    }

    .active_audio{
        background: <?php echo get_field('background_highlight_color',$post_id); ?>;
    }

    .single_audio .tooltip{
        opacity: 1!important;
    }
    

<?php if ($layout_type === 'Horizontal'): ?>
#un_<?php echo $post_id; ?> .boxsounds__box {
    display: grid;
    grid-template-columns: repeat(<?php echo $grid_rows_number; ?>, 1fr);
    gap: <?php echo $size === 'Small' ? '10px' : '20px'; ?>;
}

#un_<?php echo $post_id; ?> .single_audio {
    border:none!important;
}

#un_<?php echo $post_id; ?> .single_audio svg .progress-track{
    display:none!important;
}

#un_<?php echo $post_id; ?> .single_audio_content_left{
    align-items: center;
}

#un_<?php echo $post_id; ?> .single_audio_content_left_text{
    margin-left:10px;
}

<?php endif; ?>

#un_<?php echo $post_id; ?> .single_audio {
    border: 1px solid <?php echo get_field('border_color',$post_id); ?>;
    border-radius: <?php echo $size === 'Small' ? '6px' : '8px'; ?>;
}
<?php if ($size === 'Small'): ?>
#un_<?php echo $post_id; ?> .single_audio > div {
    padding: <?php echo $small_padding; ?>px !important;
}


#un_<?php echo $post_id; ?> .title {
    font-size: <?php echo 20 * $small_scale; ?>px !important;
}

#un_<?php echo $post_id; ?> .desc,
#un_<?php echo $post_id; ?> .audio_duration {
    font-size: <?php echo 16 * $small_scale; ?>px !important;
}

#un_<?php echo $post_id; ?> .download_icon svg {
    width: <?php echo 24 * $small_scale; ?>px;
    height: <?php echo 24 * $small_scale; ?>px;
}

#un_<?php echo $post_id; ?> .tooltiptext {
    font-size: <?php echo 8 * $small_scale; ?>px !important;
}

#un_<?php echo $post_id; ?> .single_audio > div > div:first-child {
    margin-right: <?php echo 20 * $small_scale; ?>px;
}

#un_<?php echo $post_id; ?> .single_audio > div > div:last-child {
    flex: 0 0 <?php echo 20 * $small_scale; ?>%;
}

#un_<?php echo $post_id; ?> .download_icon {
    margin-left: <?php echo 20 * $small_scale; ?>px !important;
}
<?php endif; ?>

#un_<?php echo $post_id; ?> .mediPlayer svg {
    width: <?php echo 60 * $small_scale_for_player; ?>px !important;
    height: <?php echo 60 * $small_scale_for_player; ?>px !important;
}
</style>

<div id="un_<?php echo $post_id; ?>" class="boxsounds <?php echo $size === 'Small' ? 'small-size' : ''; ?>" play_next="<?php echo get_field('play_next_track',$post_id); ?>"> 
    <div class="boxsounds__box" style="background: <?php echo get_field('background_color',$post_id); ?>;">

        <?php 
            $tracks = get_field('tracks',$post_id);
            if(!empty($tracks)){ $i=0;
                foreach($tracks as $track){ $i++;
                    $single_id = 'single_'.$post_id.'_'.$i;
        ?>
        <!-- Single box -->
        <div id="<?php echo $single_id; ?>" class="single_audio" <?php echo $layout_type === 'Vertical' ? 'style="border-bottom: 1px solid ' . get_field('border_color',$post_id) . ';"' : ''; ?>>
            <div class="single_audio_content" style="padding: <?php echo $size === 'Small' ? $small_padding : '15'; ?>px <?php echo $size === 'Small' ? $small_padding : '20'; ?>px;">
                <div class="single_audio_content_left">
                    <div class="mediPlayer">
                        <audio class="listen" preload="none" data-size="60" src="<?php echo $track['url']; ?>"></audio>
                    </div>

                    <div class="single_audio_content_left_text">
                        <p class="title" style="padding:0;font-family:'<?php echo $title_font_and_size[0]; ?>';font-size:<?php echo $title_font_and_size[1]; ?>px;font-weight: 600;padding:0;margin-bottom: 4px;line-height: 1.4;margin-top: 0;color:<?php echo get_field('title_color',$post_id); ?>">
                            <?php echo $track['title']; ?>
                        </p>

                        <?php if($layout_type === 'Vertical'): ?>
                            <p class="desc" style="padding:0;font-family:'<?php echo $desc_font_and_size[0]; ?>';font-size:<?php echo $desc_font_and_size[1]; ?>px;margin:0;line-height: 1.4;color:<?php echo get_field('desc_color',$post_id); ?>">
                                <?php echo $track['description']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <div style="display: flex;align-items: center;flex: 0 0 20%;">
                    <?php if($layout_type === 'Vertical'): ?>
                        <p class="audio_duration" style="font-family:'<?php echo $time_font_and_size[0]; ?>';font-size:<?php echo $time_font_and_size[1]; ?>px;padding:0;margin:0;line-height: 1.4;color:<?php echo get_field('time_color',$post_id); ?>">
                            
                        </p>
                    <?php endif; ?>
                    <a class="download_icon tooltip" style="display: block;margin-left: 20px;opacity:1;" href="<?php echo $track['url']; ?>" download>

                    <?php if($layout_type === 'Horizontal'){ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="<?php echo get_field('download_icon_color',$post_id); ?>">
                        <path d="M19 18H5a4 4 0 0 1 0-8h.71A6 6 0 0 1 17.5 6a5 5 0 1 1 1.5 10zM13 12V8h-2v4H8l4 4 4-4h-3z"/>
                        </svg>

                    <?php }else{ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="<?php echo get_field('download_icon_color',$post_id); ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                        </svg>
                    <?php } ?>
                        <span style="color:<?php echo get_field('time_color',$post_id); ?>;font-family:'<?php echo $popup_font_and_size[0]; ?>';font-size:<?php echo $popup_font_and_size[1]; ?>px;" class="tooltiptext">Download</span>
                    </a>
                </div>
            </div>
        </div>
        <?php }} ?>
        <!-- End single box -->
    </div>
</div>
