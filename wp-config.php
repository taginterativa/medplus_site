<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'medplus');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':>!-e[Y|3^3!(1|nN5DHU;4kfKZxTgVA3|a.OVtX4[|?.l|(H^gP_#mYmnIhB2+?');
define('SECURE_AUTH_KEY',  'I7/-fAx+[/}/Se!YzqQ*Jp77$1s?-AARO]z%eRzrzTqN82<ve5(0ar=~Rk!4@0]O');
define('LOGGED_IN_KEY',    '&biw-6UI?0c4JV<$E*p+v2ozh!9>w$jd2u`;n,g^_LR:8:}rl.(Be8Q ?/y@}0:i');
define('NONCE_KEY',        'ZV|=T7Yp#klY48t%Cwiz;^r@T>coJW[K+;!fqhQSM}VtmksCepZ7zrbtz!A`6oqy');
define('AUTH_SALT',        '>^lRw,iD k|FI/3S}O+NKc,}6!rxa*KO$_oC8$3g?AHW{r)=P90FfI}.G~fy|`?*');
define('SECURE_AUTH_SALT', 'HfnejSZ&|+3%nOUheC(!4}>W5NU1%].f;$890aHE4$U6FSc5SO~.5Jr0Fv]q3(OS');
define('LOGGED_IN_SALT',   '>y0kYtMhm15@to+<6l7L+D4-ATk&Y@r8S#)+MRuD`iTw^1I;6+GrJeB+CH) pBDW');
define('NONCE_SALT',       'l~ Ji)}C|QLa%mRet,4b2|ZURR#b)KsIFyaGC<j,k1V,d,`$pUT/`)+D}W|Id/uv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
