<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetowp01' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Asp:(3plNy4j(@QJ_C2&4nAhlwv;,Ub|[O=m<~R#|4DFpJiH`rhdR (oPnCg_(68' );
define( 'SECURE_AUTH_KEY',  'LvbfMFBZ|?E5PhNcsNmK(DaA*z``_x+K}r|O0c.u7.ciQ/<:gfPZkKK~hUCR~CK~' );
define( 'LOGGED_IN_KEY',    'ZNh@j+!&6cK7edI_lK74dKqa@hVb;T=2Dy8UqmJ5E?n`*wZpUjcc,+~@B! 1h!8{' );
define( 'NONCE_KEY',        'otm2R)WkLHCQINYEL-wI-#_<2vx&dwkXvQRvRqJtn5@ _c+qOn?%N!)-u/rV?1g^' );
define( 'AUTH_SALT',        'y?`8^S>bSf-_u.O7Y=O,K?ePr75wcg8C~BBuwMzfjChGiScwX9:<k8/ajt0xqXt_' );
define( 'SECURE_AUTH_SALT', '<H1 o=wf`)MokYup^uS[ENgcVGfTg9*?uFO`HV&-d0=Mz~rXYw?jhg45|dTW7}Zh' );
define( 'LOGGED_IN_SALT',   '2a]OL}xzs67YRO]|qKGfv@OawU3i<,<}[cK`j{qV1}o.>#!*IEvKqWrQK(BTPWxA' );
define( 'NONCE_SALT',       '90;izGnn5VnfZs0X?;Qh%LylD9sd(jHmD#7TN7Jgp9bA|XH/O?.RB#Z,%CkD]t1I' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
