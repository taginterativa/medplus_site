<div class="div_slides">
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => -1, 'order_by' => 'id', 'order' => 'ASC');
$loop = new WP_Query($args);
if($loop->have_posts()) :
    $i = 0;
    while($loop->have_posts()) :
        $loop->the_post();
        (($i++) == 0) ? $active = ' active' : $active = '';
        $banner = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full' );
        echo '<div class="div_slide' . $active . '" style="background:url('.$banner[0].') no-repeat;background-attachment:fixed;"></div>';
    endwhile;
endif; ?>
</div>
<?php if($loop->have_posts()) :?>
<div class="slides_nav" align="center">
    <?php for($j = 0; $j < $i; $j++):
        ($j == 0) ? $active = ' active' : $active = '';
        echo '<span class="nav_dot' . $active . '" data-title="Título" data-subtitle="Subtítulo"></span>';
    endfor; ?>
</div>
<?php endif; ?>
<div class="content">
    <?php
    $args = array('pagename' => 'Home',);
    $loop = new WP_Query($args);
    if($loop->have_posts()) :
        $i = 0;
        while($loop->have_posts()) :
            $loop->the_post();
            the_content();
        endwhile;
    endif; ?>
    <?php get_template_part('form', 'presentation'); ?>
</div>