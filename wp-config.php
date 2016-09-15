<?php
define('WP_ALLOW_REPAIR', true);
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'megaturnew');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm~7vBqE#ri2WBX3%lU<*cOx2nQFUye;jmG3YoJ~j(W1 FUGYKKTaLI2VwQm%*?==');
define('SECURE_AUTH_KEY',  'KR@DDX8<HO`LaW&h-r5XJSL~m5kZ!{%G~Yfj+j+K(1:K{!93PYv@9-A./unX$u~A');
define('LOGGED_IN_KEY',    '00gN3WFYt@y&VW!tg5tB}~G!]RBRfFu/<o2K@^bFC-#(bj`&/PI3b/`U1pzgqo6&');
define('NONCE_KEY',        'lVuy)d%lKT_l6zD(*Yj.A`Tl6U0fGa:i06>.z){k1+|@F]CppR}`W9EHKFbAO6#;');
define('AUTH_SALT',        '?bgn.N=Ykf#t:vHCeN(]iNUkz{%~o5f{%B?Mh-ZF2O+w.>YbMLU*DsUE[dIf4}.?');
define('SECURE_AUTH_SALT', 'X*R8bMgx$4onn06_]8ADr<HaNA3yf12ueX<z<~ubJ^s0A5gO>COkgWNW.5?}dD?H');
define('LOGGED_IN_SALT',   'h=!],bl-Rsr +5If)0AlzvKPlC4,7z6f2?~1M},[KRvvQ]p<:t09;<|{tqJ^as?2');
define('NONCE_SALT',       'E7KIx}Zr397*6o% 2o~QWbU&Io~d-Nk2`&X%U9^_bRmF@D1GNf=t+}!emsZbN{vq');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mt_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
