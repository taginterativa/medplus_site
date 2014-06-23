<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABnwbXXUlvyG8VNXkEIFwL9uA10bPxkmE&sensor=false"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng(-26.198207,-52.686653)
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        var image = '<?php bloginfo('template_url'); ?>/images/marker.png';
        var l1 = new google.maps.Marker({position: new google.maps.LatLng(-26.198207,-52.686653),map: map,icon: image});

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="page_container">
    <div class="page_content">
        <?php

        $loop = new WP_Query(array('pagename' => 'contato'));
        if($loop->have_posts()) :
            while($loop->have_posts()) :
                $loop->the_post();
                the_content();
            endwhile;
        endif;

        ?>
        <div class="map_div" id="map-canvas">
        </div>

        <?php echo do_shortcode('[contact-form-7 id="58" title="Formulário de contato 1"]'); ?>
    </div>
    <div class="footer">
        &copy; MedPlus Copyright - <?php _e('<!--:pt-->Todos os direitos reservados<!--:en-->All right reserved<!--:es-->Reservados todos los derechos');?> - <a href="http://taginterativa.com.br" target="_blank" style="color:#fff;">TAG</a>
    </div>
</div>