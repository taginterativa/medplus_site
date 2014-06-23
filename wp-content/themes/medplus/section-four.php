<div class="page_bg2" style="background:url(<?php bloginfo('template_url'); ?>/images/bg_4.jpg) no-repeat center top;background-size:cover;"></div>
<div class="page_container">
    <div class="page_content">
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