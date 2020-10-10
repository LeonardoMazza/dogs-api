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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dogsapi' );

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
define( 'AUTH_KEY',         'B%#3cJvf)C-UAfNLAIuRTm`|+9g3+}Sdfdfoc8kO%n,L>LAKr`@(Us!O!{t{=7}/' );
define( 'SECURE_AUTH_KEY',  'CL*?G>DFdP+bE-80_a%4H$.f}h/DUaApH,#y,RH6-#ZX];1(>(FnK<@#&m{j^lE@' );
define( 'LOGGED_IN_KEY',    'z,Q$)[>9hqR-)OP1X@=IBEz^) b-@X!R23Z|:q!)F=j.2]0{+dtSEKCjHE771%];' );
define( 'NONCE_KEY',        ' <|CFf[?nV$ew^M.[G+L%;rc>J8yt<:yT=#g(NO<<d`Z~szY`3YSBe}m552SnV_d' );
define( 'AUTH_SALT',        'RW _`A=I(| xP[,/G_Ek<q/M|`8&m*Q_2)qLPU0G>uLR;mJYGTLkqfX&-]DWjzDf' );
define( 'SECURE_AUTH_SALT', 'wmBw (sRKJ=^EH7&9h7{2I[U$&Io1uRaM:33!x-F=./|3k.9u7*aS=GnT*vYL`^9' );
define( 'LOGGED_IN_SALT',   '$peX{x 8/E`11/{vA`zt2QDZeu-7**f&D-L8@v$-J8PHwOt+uH)1|xnA=YYZvH>b' );
define( 'NONCE_SALT',       ')-;|,{_NdW`lG^kch^-g&t#X%jy6t=zv}; OhRC@h^#R)1j.GA|$Iv?YbKg!0?^/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

define('JWT_AUTH_SECRET_KEY', '$/BO<3]Un&w.*-eQD8Wed3-n~&DY&tv~R|lEYb&UIN-lLXFU!#ZXQAw&J13r6QpP');
define('JWT_AUTH_CORS_ENABLE', true);

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
