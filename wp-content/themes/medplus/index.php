<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MedPlus</title>
<meta content="telephone=no" name="format-detection">
<?php 
  wp_head();
  wp_footer();
?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/css.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/idangerous.swiper.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/js/lightbox/css/lightbox.css">
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url');?>/favicon.png" />
<script>
var baseUrl = "<?php bloginfo('url');?>"; 
var pathUrl = "<?php bloginfo('template_url');?>"; 
</script>
</head>

<body>
<?php get_sidebar(); ?>
<div class="map_pop_up">
  <div class="map_center">
    <div class="close"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1789.9766498051918!2d-52.686822!3d-26.1981974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e552e50d31a18f%3A0x36cb6f783bfaf833!2sSponte+-+Software+%26+Servi%C3%A7os!5e0!3m2!1spt-BR!2s!4v1403295398084" frameborder="0" style="border:0"></iframe>
  </div>
</div>
<div id="fullpage">
    <div class="section" data-page="1">
        <?php get_template_part( 'section', 'one' ); ?>
    </div>
    <div class="section" data-page="2">
         <?php get_template_part( 'section', 'two'  ); ?>
    </div>
    <div class="section" data-page="3" data-sub="1">
         <?php get_template_part( 'section', 'three'  ); ?>
    </div>
    <div class="section" data-page="3" data-sub="2">
         <?php get_template_part( 'section', 'four'  ); ?>
    </div>
    <div class="section" data-page="4" data-sub="1">
         <?php get_template_part( 'section', 'five'  ); ?>
    </div>
    <div class="section" data-page="4" data-sub="2">
         <?php get_template_part( 'section', 'six'  ); ?>
    </div>
    <div class="section" data-page="5">
         <?php get_template_part( 'section', 'seven'  ); ?>
    </div>
    <div class="section" data-page="6">
         <?php get_template_part( 'section', 'eight'  ); ?>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/placeholder.js"></script>
<script src="<?php bloginfo('template_url');?>/js/modernizr.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easings.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.fullPage.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/mask.js"></script>
<script src="<?php bloginfo('template_url');?>/js/idangerous.swiper.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.carouFredSel-6.0.4-packed.js"></script>
<script src="<?php bloginfo('template_url');?>/js/scripts.js"></script>

<script>
    /*
setTimeout(function() {
  if (location.hash) {
    window.scrollTo(0, 0);
  }
}, 1);
*/
</script>
<script type="text/javascript">

  /*var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1059917-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();*/

</script>
</body>
</html>