<div class="page_bg2" style="background:url(<?php bloginfo('template_url'); ?>/images/bg_3.jpg) no-repeat center top;"></div>
<div class="page_container">
    <div class="page_content">
        <?php

        $loop = new WP_Query(array('pagename' => 'solucoes-clinicas-medicas'));
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