<?php
/*
 *  Author: Fernando Cezar Chaves | fernandocchaves@gmail.com
 *  URL: http://fernandocchaves.com.br
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

// Configurar o PHPMailer para usar um servidor SMTP
add_action( 'phpmailer_init', 'wp_configure_smtp' );
add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));

function wp_configure_smtp( PHPMailer $phpmailer ) {
    $phpmailer->isSMTP(); // Vamos dar a instrução para mudar para SMTP
    $phpmailer->SMTPAuth = true; // Por questão de segurança usamos um sistema de autenticação
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Port     = 587;
    $phpmailer->Host = 'smtp.gmail.com'; // O host do servidor SMTP
    $phpmailer->Username = 'spontewebsites@gmail.com'; // O email pretendido
    $phpmailer->Password = '20sponte'; // A password associada ao email
    //$phpmailer->SMTPDebug  = 1;
}


/*function wpcf7_modify_this(&$wpcf7_data) {
 if(isset($wpcf7_data->posted_data['area']) && $wpcf7_data->posted_data['area'] == 'COMERCIAL'){
     $wpcf7_data->mail['recipient'] = "COMERCIAL <formulariocom@sponte.com.br>,Fernando Chaves <fernando@taginterativa.com.br>";
 }elseif(isset($wpcf7_data->posted_data['area']) && $wpcf7_data->posted_data['area'] == 'SUPORTE'){
     $wpcf7_data->mail['recipient'] = "SUPORTE <formulariosup@sponte.com.br>,Fernando Chaves <fernando@taginterativa.com.br>";
 }elseif(isset($wpcf7_data->posted_data['area']) && $wpcf7_data->posted_data['area'] == 'PÓS-VENDAS'){
     $wpcf7_data->mail['recipient'] = "PÓS-VENDAS <formulariopos@sponte.com.br>,Fernando Chaves <fernando@taginterativa.com.br>";
 }
}

add_action("wpcf7_before_send_mail", "wpcf7_modify_this");
*/

  function alter_admin_bar( $admin_bar ) {

    $admin_bar->remove_menu( 'wp-logo' );// Remove wp-logo
    $admin_bar->remove_node( 'new-content' );// Remove menu suspend
    $admin_bar->remove_menu( 'edit' );// Remove edit link
    $admin_bar->remove_menu( 'updates' );// Remove update notify
    $admin_bar->remove_menu( 'search' );// Remove search menu
    $admin_bar->remove_menu( 'comments' );// Remove comments menu
    //$admin_bar->remove_node( 'site-name' );// Remove site name
    //$admin_bar->remove_node( 'my-account' );// Remove my account menu

    return $admin_bar;
  }

  function my_remove_menu_pages() {
    //remove_menu_page( 'edit.php' );               //posts
    remove_menu_page( 'edit-comments.php' );      //comments
    remove_menu_page('upload.php');               //midia
    remove_menu_page('link-manager.php');         //links
    //remove_menu_page('edit.php?post_type=page');  //pages
    //remove_menu_page('themes.php');               //apearence
    //remove_menu_page('plugins.php');              //plugins
    //remove_menu_page('tools.php');                //tools
    #remove_menu_page('options-general.php');      //configs

    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' ); //remove taxonomy category
    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' ); //remove taxonomy tags
  }

  //remove menu screen options
  function remove_screen_options(){
    return false;
  }

  //text footer admin
  function remove_footer_admin () {
    echo 'Implementado por <a href="http://taginterativa.com.br/" target="_blank">TAG</a>';
  }

  //alter logo login admin
  function my_logo_login()
  {
      echo '<style  type="text/css"> h1 a {  background-image:url('.get_bloginfo('template_directory').'/webroot/images/admin/logo-login.png)  !important; } </style>';
  }

  //config dashboard
  function so_screen_layout_columns( $columns ) {
      $columns['dashboard'] = 1;
      return $columns;
  }

  function so_screen_layout_dashboard() {
      return 1;
  }

  function del_secoes_painel(){
    global$wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
  }

if (!isset($content_width))
{
    $content_width = 900;
}


if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('image-thumbnail', 274, 160, true);
    add_image_size('image-servico', 838, 597, true);
    add_image_size('image-solucoes', 598, 598, true);


    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('fc', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function fc_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}


// Load HTML5 Blank conditional scripts
function fc_conditional_scripts()
{
    if (is_page('page')) {
    }
}

// Load HTML5 Blank styles
function fc_styles()
{
    
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'fc'),
        'description' => __('Description for this widget-area...', 'fc'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'fc'),
        'description' => __('Description for this widget-area...', 'fc'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'fc') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function fcgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function fccomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_print_scripts', 'fc_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action( 'admin_menu', 'my_remove_menu_pages' );
add_action( 'admin_bar_menu', 'alter_admin_bar', 99 );
add_action('login_head',  'my_logo_login');
add_action('wp_dashboard_setup', 'del_secoes_painel');
//add_action( 'admin_init', 'remove_wysiwyg' );

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'fcgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('screen_options_show_screen', 'remove_screen_options');
add_filter('admin_footer_text', 'remove_footer_admin');
add_filter( 'get_user_option_screen_layout_dashboard', 'so_screen_layout_dashboard' );
add_filter( 'screen_layout_columns', 'so_screen_layout_columns' );
add_filter('admin_init', 'my_general_settings_register_fields');

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

//remove alerta de atualizações
if ( !current_user_can( 'edit_users' ) ) {
    add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

function change_post_to_article( $translated ) {
	$translated = str_ireplace(  'Posts',  'Notícias',  $translated );
	$translated = str_ireplace(  'Todos os',  'Todas as',  $translated );
			return $translated;
}

function remove_wysiwyg() {
    global $pagenow;
    if ( 'post.php' == $pagenow ) {
        $type = get_post_type( $_GET['post'] );
        if( $type == 'page' ) add_filter( 'user_can_richedit' , '__return_false', 50 );
    } elseif ( 'post-new.php' == $pagenow ) {
        if( $_GET['post_type'] == 'page' ) add_filter( 'user_can_richedit' , '__return_false', 50 );
    }   
}

//remove alerta de atualizações
if ( !current_user_can( 'edit_users' ) ) {
    add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_post_type( 'banners', //nome do post type (sempre minusculo)
        array(
            'labels' => array(
                'name' => __( 'Banners' ), //nome que ira aparecer na tela
                'singular_name' => __( 'Banner' ), //esse eu nao sei pra que serve ... :)
                'all_items' => __('Listar Todos'), // listar todos menu
            ),
            'public' => true, //nao altera
            'supports' => array('title','editor','thumbnail') //oque ira aparecer nos posts mais usados sao estes
        )
    );

    register_post_type( 'websites', //nome do post type (sempre minusculo)
        array(
            'labels' => array(
                'name' => __( 'Websites' ), //nome que ira aparecer na tela
                'singular_name' => __( 'Website' ), //esse eu nao sei pra que serve ... :)
                'all_items' => __('Listar Todos'), // listar todos menu
            ),
            'public' => true, //nao altera
            'supports' => array('title','editor','thumbnail') //oque ira aparecer nos posts mais usados sao estes
        )
    );

    register_post_type( 'clientes-logos', //nome do post type (sempre minusculo)
        array(
            'labels' => array(
                'name' => __( 'Clientes (Logos)' ), //nome que ira aparecer na tela
                'singular_name' => __( 'Cliente (Logo)' ), //esse eu nao sei pra que serve ... :)
                'all_items' => __('Listar Todos'), // listar todos menu
            ),
            'public' => true, //nao altera
            'supports' => array('title','editor','thumbnail') //oque ira aparecer nos posts mais usados sao estes
        )
    );

    register_post_type( 'clientes-depoimentos', //nome do post type (sempre minusculo)
        array(
            'labels' => array(
                'name' => __( 'Clientes (Depoimentos)' ), //nome que ira aparecer na tela
                'singular_name' => __( 'Cliente (Depoimento)' ), //esse eu nao sei pra que serve ... :)
                'all_items' => __('Listar Todos'), // listar todos menu
            ),
            'public' => true, //nao altera
            'supports' => array('title','editor','thumbnail') //oque ira aparecer nos posts mais usados sao estes
        )
    );
}

  //Adicionando Campos Personalizados
  add_action( 'add_meta_boxes', 'adicionais_add_meta_box' );

  function adicionais_add_meta_box() {
    add_meta_box(
        'cliente_depoimento_metaboxid', //ID para insercao da caixa com os campos
        'Informações', //titulo que aparecera para a caixa
        'cliente_depoimento_meta_box', //funcao a ser executada (onde estara o formulario com os campos)
        'clientes-depoimentos' //post type de referencia
    );
  }

  //funcao com os campos personalizados
  function cliente_depoimento_meta_box($post){
  ?>
     <p>
      <label for="cli_nome">Nome do Cliente</label>
      <input style="width: 100%;"  type="text" name="cli_nome" value="<?php echo get_post_meta( $post->ID, '_cli_nome', true ); ?>" />
     </p>
      <p>
          <label for="cli_empresa">Empresa</label>
          <input style="width: 100%;"  type="text" name="cli_empresa" value="<?php echo get_post_meta( $post->ID, '_cli_empresa', true ); ?>" />
      </p>
      <p>
          <label for="cli_cargo">Cargo</label>
          <input style="width: 100%;"  type="text" name="cli_cargo" value="<?php echo get_post_meta( $post->ID, '_cli_cargo', true ); ?>" />
      </p>

  <?php
  }

//salva os dados personalizados
add_action( 'save_post', 'clientes_depoimentos_save_post', 10, 2 );
function clientes_depoimentos_save_post( $post_id, $post )
{
    if(isset($_POST['post_type']) && $_POST['post_type'] == 'clientes-depoimentos')
    {
        update_post_meta( $post_id, '_cli_nome', strip_tags( $_POST['cli_nome'] ) );
        update_post_meta( $post_id, '_cli_empresa', strip_tags( $_POST['cli_empresa'] ) );
        update_post_meta( $post_id, '_cli_cargo', strip_tags( $_POST['cli_cargo'] ) );
    }
}

add_action( 'save_post', 'banners_save_post', 10, 2 );

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/


/*------------------------------------*\
    Custom Functions
\*------------------------------------*/

function getYoutubeId($href){
    $url = parse_url($href);
    $query = array();
    parse_str($url['query'], $query);
    return $query['v'];
}

function getYoutubeThumbnail($href){
    $url = parse_url($href);
    $query = array();
    parse_str($url['query'], $query);
    return 'https://i1.ytimg.com/vi/'.$query['v'].'/sddefault.jpg';
}

function attachmentUrl($attachment_id, $size){
    $image = wp_get_attachment_image_src( $attachment_id, $size);
    return $image[0];
}

/***FUNCAO PARA CRIACAO DA PAGINAS AUTOMATICAMENTE*******/
  check_pages();
  function check_pages(){
	//if(!get_page_by_title('Pagina')){ create_page('Pagina');}
  }

  function create_page($page_name){
    // Create post object
    $custom_page = array(
      'post_title'    => $page_name,
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     => 'page'
    );

    // Insert the post into the database
    wp_insert_post( $custom_page );
  }

function my_general_settings_register_fields()
{
    register_setting('general', 'facebook', 'esc_attr');
    add_settings_field('facebook', '<label for="facebook">'.__('Facebook' , 'facebook' ).'</label>' , 'facebook_settings_fields_html', 'general');

    register_setting('general', 'youtube', 'esc_attr');
    add_settings_field('youtube', '<label for="youtube">'.__('Youtube' , 'youtube' ).'</label>' , 'youtube_settings_fields_html', 'general');

    register_setting('general', 'twitter', 'esc_attr');
    add_settings_field('twitter', '<label for="twitter">'.__('Twitter' , 'twitter' ).'</label>' , 'twitter_settings_fields_html', 'general');

    register_setting('general', 'googleplus', 'esc_attr');
    add_settings_field('googleplus', '<label for="googleplus">'.__('Google+' , 'Google+' ).'</label>' , 'googleplus_settings_fields_html', 'general');

    register_setting('general', 'telefone', 'esc_attr');
    add_settings_field('telefone', '<label for="telefone">'.__('Telefone' , 'telefone' ).'</label>' , 'telefone_settings_fields_html', 'general');

}
 
function facebook_settings_fields_html()
{
    $value = get_option( 'facebook', '' );
    echo '<input type="text" id="facebook" name="facebook" value="' . $value . '" />';
}

function youtube_settings_fields_html()
{
    $value = get_option( 'youtube', '' );
    echo '<input type="text" id="youtube" name="youtube" value="' . $value . '" />';
}

function twitter_settings_fields_html()
{
    $value = get_option( 'twitter', '' );
    echo '<input type="text" id="twitter" name="twitter" value="' . $value . '" />';
}

function googleplus_settings_fields_html()
{
    $value = get_option( 'googleplus', '' );
    echo '<input type="text" id="googleplus" name="googleplus" value="' . $value . '" />';
}

function telefone_settings_fields_html()
{
    $value = get_option( 'telefone', '' );
    echo '<input type="text" id="telefone" name="telefone" value="' . $value . '" />';
}



?>
