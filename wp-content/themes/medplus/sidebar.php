<div class="menu">
    <div class="logo click_page" title="MedPlus - Home" data-go-to="1" data-page="1"></div>

    <div title="<?php _e("<!--:en-->Who We Are<!--:--><!--:es-->Quiénes somos<!--:--><!--:pt-->Quem Somos<!--:-->"); ?>" class="button click_page" data-go-to="2" data-page="2">
        <div class="heart_beat">
            <div class="line"></div>
            <div class="white"></div>
            <div class="blood"></div>
        </div>
        <div class="text">
            <?php _e("<!--:en-->Who We Are<!--:--><!--:es-->Quiénes somos<!--:--><!--:pt-->Quem Somos<!--:-->"); ?>
        </div>
    </div>

    <div title="<?php _e("<!--:en-->Solutions<!--:--><!--:es-->Soluciones<!--:--><!--:pt-->Soluções<!--:-->"); ?>" class="button click_page" data-go-to="3" data-parent="1" data-page="3">
        <div class="heart_beat">
            <div class="line"></div>
            <div class="white"></div>
            <div class="blood"></div>
        </div>
        <div class="text">
            <?php _e("<!--:en-->Solutions<!--:--><!--:es-->Soluciones<!--:--><!--:pt-->Soluções<!--:-->"); ?>
        </div>
    </div>

    <div title="<?php _e("<!--:en-->Medical Clinics<!--:--><!--:es-->Clínicas Médicas<!--:--><!--:pt-->Clinicas Médicas<!--:-->"); ?>" class="sub_button click_page sub-1" data-go-to="3" data-sub="1" data-page="3">
        <?php _e("<!--:en-->medical clinics<!--:--><!--:es-->clínicas médicas<!--:--><!--:pt-->clinicas médicas<!--:-->"); ?></div>
    <div title="<?php _e("<!--:en-->Treatment Center<!--:--><!--:es-->Central de Tratamiento<!--:--><!--:pt-->Central de Atendimento<!--:-->"); ?>" class="sub_button click_page sub-2" data-go-to="4" data-sub="1" data-page="3">
        <?php _e("<!--:en-->treatment center<!--:--><!--:es-->central de tratamiento<!--:--><!--:pt-->central de atendimento<!--:-->"); ?></div>
    <div title="<?php _e("<!--:en-->Services<!--:--><!--:es-->Servicios<!--:--><!--:pt-->Serviços<!--:-->"); ?>" class="button click_page" data-parent="2" data-go-to="5" data-page="4">
        <div class="heart_beat">
            <div class="line"></div>
            <div class="white"></div>
            <div class="blood"></div>
        </div>
        <div class="text">
            <?php _e("<!--:en-->Services<!--:--><!--:es-->Servicios<!--:--><!--:pt-->Serviços<!--:-->"); ?>
        </div>
    </div>

    <div title="<?php _e("<!--:en-->Scheduling Portal<!--:--><!--:es-->Portal de Programación<!--:--><!--:pt-->Portal de Agendamentos<!--:-->"); ?>" class="sub_button click_page sub-1" data-go-to="5" data-sub="2" data-page="4">
        <?php _e("<!--:en-->Scheduling Portal<!--:--><!--:es-->Portal de Programación<!--:--><!--:pt-->Portal de Agendamentos<!--:-->"); ?>
    </div>

    <div title="WebSites" class="sub_button click_page sub-2" data-go-to="6" data-sub="2" data-page="4">
        websites
    </div>

    <div title="<?php _e("<!--:en-->Customers<!--:--><!--:es-->Clientes<!--:--><!--:pt-->Clientes<!--:-->"); ?>" class="button click_page" data-go-to="7" data-page="5">
        <div class="heart_beat">
            <div class="line"></div>
            <div class="white"></div>
            <div class="blood"></div>
        </div>
        <div class="text">
            <?php _e("<!--:en-->Customers<!--:--><!--:es-->Clientes<!--:--><!--:pt-->Clientes<!--:-->"); ?>
        </div>
    </div>

    <div title="<?php _e("<!--:en-->Contact<!--:--><!--:es-->Contacto<!--:--><!--:pt-->Contato<!--:-->"); ?>" class="button click_page" data-go-to="8" data-page="6">
        <div class="heart_beat">
            <div class="line"></div>
            <div class="white"></div>
            <div class="blood"></div>
        </div>
        <div class="text">
            <?php _e("<!--:en-->Contact<!--:--><!--:es-->Contacto<!--:--><!--:pt-->Contato<!--:-->"); ?>
        </div>
    </div>

    <div title="<?php _e("<!--:en-->Ask for a <br />presentation<!--:--><!--:es-->Solicite una <br />presentación<!--:--><!--:pt-->Solicite uma <br />apresentação<!--:-->"); ?>" class="request click_page" data-go-to="8" data-page="6">
        <?php _e("<!--:en-->Ask for a <br />presentation<!--:--><!--:es-->Solicite una <br />presentación<!--:--><!--:pt-->Solicite uma <br />apresentação<!--:-->"); ?>
    </div>


    <div class="language">
        <?php if(isset($_GET['lang'])):?>
        <div class="language_center"><?php echo strtoupper($_GET['lang']); ?></div>
        <div class="other">
            <?php if($_GET['lang'] != 'pt'):?><a href="<?php echo get_option('siteurl'); ?>/?lang=pt">PT</a><?php endif; ?>
            <?php if($_GET['lang'] != 'en'):?><a href="<?php echo get_option('siteurl'); ?>/?lang=en">EN</a><?php endif; ?>
            <?php if($_GET['lang'] != 'es'):?><a href="<?php echo get_option('siteurl'); ?>/?lang=es">ES</a><?php endif; ?>
        </div>
        <?php else :?>
        <div class="language_center">PT</div>
        <div class="other">
            <a href="<?php echo get_option('siteurl'); ?>/?lang=en">EN</a>
            <a href="<?php echo get_option('siteurl'); ?>/?lang=es">ES</a>
        </div>
        <?php endif; ?>
    </div>
    <div class="social_icons">
        <a href="<?php echo get_option( 'facebook', '' );?>" target="_blank" title="Facebook - MedPlus"><div class="icon f1"></div></a>
        <a href="<?php echo get_option( 'twitter', '' );?>" target="_blank" title="Twitter - MedPlus"><div class="icon t1"></div></a>
        <a href="<?php echo get_option( 'youtube', '' );?>" target="_blank" title="YouTube - MedPlus"><div class="icon y1"></div></a>
        <a href="<?php echo get_option( 'googleplus', '' );?>" target="_blank" title="LinkedIn - MedPlus"><div class="icon g1"></div></a>
    </div>
</div>