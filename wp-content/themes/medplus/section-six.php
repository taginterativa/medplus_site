<div class="page_container">
        <?php

        $loop = new WP_Query(array('pagename' => 'servicos-websites'));
        if($loop->have_posts()) :
            while($loop->have_posts()) :
                $loop->the_post();
                the_content();
            endwhile;
        endif;

        ?>

    <div class="website_slider">
        <div class="arrows">
            <div class="a_center">
                <div class="arrow arrow_left"></div>
                <div class="arrow arrow_right"></div>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $args = array('post_type' => 'websites', 'posts_per_page' => -1);
                $loop = new WP_Query($args);
                if($loop->have_posts()) :
                    while($loop->have_posts()) :
                        $loop->the_post();
                        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full' );
                        ?>
                        <div class="swiper-slide" style="width:635px;background:url(<?php echo $thumbnail[0];?>) no-repeat center center;background-size:cover;position:relative;">
                            
                                <div class="expand"></div>
                            <a class="example-image-link" href="<?php echo $thumbnail[0];?>" data-lightbox="example-1">
                                <div style="z-index:1;position:absolute;left:0px;top:0px;height:100%;width:100%;"></div>
                            </a>
                        </div>
                        <?php the_content();?>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>