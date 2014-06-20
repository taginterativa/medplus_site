<div class="page_bg7" style="background:url(<?php bloginfo('template_url'); ?>/images/bg_7.jpg) no-repeat right top;background-attachment:fixed;"></div>
<div class="page_container">
    <div class="page_content">
        <?php
            $page = get_page_by_title('clientes');
            echo $page->post_content;
        ?>
        <div class="quotes_here">
            <?php
            $args = array('post_type' => 'clientes', 'posts_per_page' => 2, 'orderby' => 'rand');
            $loop = new WP_Query($args);
            if($loop->have_posts()) :
                $i = 0;
                while($loop->have_posts()) :
                    $loop->the_post();
                    echo '<div class="quotes">
                            <div class="image">
                                <img src="' . get_post_meta($post->ID, '_cli_imagem', true) . '" alt="' . get_post_meta($post->ID, '_cli_nome', true) . '"/>
                            </div>
                            <div class="text">
                                <p><i>' . nl2br(get_post_meta($post->ID, '_cli_depoimento', true)) . '</i></p>
                                <p><b>' . get_post_meta($post->ID, '_cli_nome', true) . '<br>
                                <font style="font-size:12px;">' . $post->post_title . ' | ' . get_post_meta($post->ID, '_cli_cargo', true) . '</font></b></p>
                            </div>
                        </div>';

                endwhile;
            endif; ?>
        </div>
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
    <style type="text/css">
            #wrapper {
                border-top: 1px solid #ccc;
                width: 3000px;
                height: 50%;
                margin-top: -1px;
                left: 0;
                top: 50%;
            }
            #carousel {
                margin-top: -100px;
                width:2000px;
            }
            #carousel div {
                text-align: center;
                float: left;
                position: relative;
                display:table;
                height:200px;
                margin-top:40px;
            }
            #carousel div span {
                display:table-cell;
                vertical-align:middle;
            }
            #carousel div img {
                border: none;
                display:table-cell;
                vertical-align:middle;
                margin-left:20px;
                margin-right:20px;
                margin-top:50px;
            }
        </style>
    <div class="clients_slider">        
      <div id="wrapper">
            <div id="carousel">
                <?php
                $args = array('post_type' => 'clientes', 'posts_per_page' => -1, 'order_by' => 'rand()');
                $loop = new WP_Query($args);
                if($loop->have_posts()) :
                    $i = 0;
                    while($loop->have_posts()) :
                        $loop->the_post();
                        $logo = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full' ); ?>
                <div>
                    <span><img src="<?php echo $logo[0]; ?>" alt="<?php echo $post->post_title; ?>" data-picture="<?php echo get_post_meta($post->ID, '_cli_imagem', true); ?>" data-text="<?php echo str_replace('"', '', get_post_meta($post->ID, '_cli_depoimento', true)); ?>" data-name="<?php echo htmlentities(get_post_meta($post->ID, '_cli_nome', true)); ?>" data-company="<?php echo $post->post_title; ?>" data-job="<?php echo get_post_meta($post->ID, '_cli_cargo', true); ?>" class="client_depo"></span>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>