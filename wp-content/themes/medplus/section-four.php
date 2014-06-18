<div class="page_bg2" style="background:url(<?php bloginfo('template_url'); ?>/images/bg_4.jpg) no-repeat center top;"></div>
<div class="page_container">
    <div class="page_content">
        <h3><?php _e('<!--:pt-->Conheça nossa<!--:en-->Know our<!--:es-->Conoce a nuestro'); ?></h3>
        <h2><?php _e('<!--:pt-->Solução para<!--:en-->Solution for<!--:es-->Solución para'); ?></h2>
        <div class="solution_container">
            <?php

            $loop = new WP_Query(array('pagename' => 'solucoes-operadoras-plano-saude'));
            if($loop->have_posts()) :
                while($loop->have_posts()) :
                    $loop->the_post();
                    the_content();
                endwhile;
            endif;

            ?>
            <div class="request_box">
                <?php get_template_part('form', 'presentation'); ?>
            </div>
        </div>
    </div>
</div>