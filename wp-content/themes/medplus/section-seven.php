<div class="page_bg7" style="background:url(<?php bloginfo('template_url'); ?>/images/bg_7.jpg) no-repeat right top;"></div>
<div class="page_container">
    <div class="page_content">
        <?php

        $loop = new WP_Query(array('pagename' => 'clientes'));
        if($loop->have_posts()) :
            while($loop->have_posts()) :
                $loop->the_post();
                the_content();
            endwhile;
        endif;

        ?>


        <?php

        $loop = new WP_Query(array('post_type' => 'clientes-depoimentos'));
        if($loop->have_posts()) :
            while($loop->have_posts()) :
                $loop->the_post();
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full' );?>

        <div class="quotes">
            <div class="image">
                <img src="<?php echo $thumbnail[0]; ?>" width="141" height="148"  alt=""/>
            </div>
            <div class="text">
               <?php
               the_content();
               ?>
                <p><b><?php echo get_post_meta($post->ID, '_cli_nome', true); ?><br>
                <font style="font-size:12px;"><?php echo get_post_meta($post->ID, '_cli_empresa', true); ?> | <?php echo get_post_meta($post->ID, '_cli_cargo', true); ?></font></b></p>
            </div>
        </div>

        <?php
            endwhile;
        endif;

        ?>
    </div>
    <style>
        .swiper-slide{
            display:table;
            vertical-align:middle;
            height:116px;
        }
        .swiper-slide div{
            display:table-cell;
            vertical-align:middle;
            margin-left:20px;
            margin-right:20px;
            width:200px;
            text-align:center;
        }
    </style>
    <?php

    $loop = new WP_Query(array('post_type' => 'clientes-logos'));

    if($loop->have_posts()) : ?>

    <div class="clients_slider">
        <div class="swiper-container2">
            <div class="swiper-wrapper">
            <?php while($loop->have_posts()):
                $loop->the_post();
                the_content();
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full' );?>
                <div class="swiper-slide">
                    <div><a href="#" target="_blank" title="Cliente"><img src="<?php echo $thumbnail[0]; ?>" alt=""/></a></div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>