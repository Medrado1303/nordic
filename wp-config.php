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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dbdavy' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '0YcyHO}^UMdvI9_fiIb/0Hv/poNGzcY&|A9U69eRr%K*!<ob6}ngZvdmFtN@q3xV' );
define( 'SECURE_AUTH_KEY',  '*J:h;qi> fq?hf~{1tv3k9Dq(VA]LX4xPcQ&{]UJ~TBZbEzb^{UG}X9fk%4L7<_f' );
define( 'LOGGED_IN_KEY',    'taJw8C`qi_=W^H>Y;J1[Bysc$0i$*DN]22vwdm1trGLcCW3)<09OttpIytdP]m,T' );
define( 'NONCE_KEY',        '+)-0hkN!L@oq1j`Iv>72>xOIc*CX36d5U^1}Cbu!FI_P(Vae#z[UY^^7?w_~8d/z' );
define( 'AUTH_SALT',        'Y /j!H._2X#Gkr$:vkq2Z!C`,o$^<#)M}/<0!Eoo{E5yMUz]Js-egMfu8r!a<Uz`' );
define( 'SECURE_AUTH_SALT', 'ypTbP.ox,&&o4S1R!&l}B<fUSjmaU3CJ5.0N>?iW$p%YH!ZZ_M$#ho MfHB3JO@4' );
define( 'LOGGED_IN_SALT',   '<mP)5XAD`&@qW-ZQl,{`6HfHW.z3i;zwvw:;O]cK7xT0*`9$d6{K]jW+:SLfB!9*' );
define( 'NONCE_SALT',       '}E0VsE3L?q}]%IyONCYL+2K>G_vSfykn@J_`[|G$j)cXNV%7(>d3CyC:i}[J%]4G' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
