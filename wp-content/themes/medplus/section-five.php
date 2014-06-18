<div class="page_container">
    <?php

        $loop = new WP_Query(array('pagename' => 'servicos-portal-de-agendamentos'));
        if($loop->have_posts()) :
            while($loop->have_posts()) :
              $loop->the_post();
                the_content();
            endwhile;
        endif;
    ?>
    <div class="white_request">
        <?php get_template_part('form', 'presentation'); ?>
    </div>
</div>