<div class="page_bg1" style="background:url(<?php bloginfo('template_url');?>/images/bg_2.jpg) no-repeat;background-size:cover;"></div>
<div class="page_content">
    <?php

    $loop = new WP_Query(array('pagename' => 'quem-somos'));
    if($loop->have_posts()) :
        while($loop->have_posts()) :
            $loop->the_post();
            the_content();
        endwhile;
    endif;

    ?>
</div>