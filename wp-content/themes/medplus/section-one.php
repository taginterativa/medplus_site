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
        $loop->the_post();
        if($j == 0)
        {
            $firstTitle = $post->post_title;
            $firstContent = $post->post_content;
        }
        ($j == 0) ? $active = ' active' : $active = '';
        echo '<span class="nav_dot' . $active . '" data-title="' . $post->post_title . '" data-subtitle="' . $post->post_content . '"></span>';
    endfor; ?>
</div>
<?php endif; ?>
<div class="content bg_white">
    <h1 class="h1"><?php echo $firstTitle; ?></h1>
    <h2 class="h2"><?php echo $firstContent; ?></h2>
    <form>
        <input type="text" name="name" placeholder="<?php _e('<!--:pt-->NOME E SOBRENOME<!--:--><!--:en-->NAME AND LASTNAME<!--:--><!--:es-->NOMBRE Y APELLIDO<!--:-->'); ?>">
        <input type="text" name="e-mail" placeholder="E-MAIL">
        <input type="submit" value="<?php _e('<!--:pt-->Enviar<!--:--><!--:en-->Send<!--:--><!--:es-->Enviar<!--:-->'); ?>" onClick="_gaq.push(['_trackEvent', 'Banners-home', 'x',]);">
    </form>
</div>