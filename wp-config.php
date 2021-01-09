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
define( 'DB_NAME', 'sem_pressao_wp' );

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
define( 'AUTH_KEY',         'FtXk4Z*@-*a<R>%-3$rr0EMv~>D#Ejo}iEf-p3w]}70Gp 8O?Wn:!T=KQ,U]hP]6' );
define( 'SECURE_AUTH_KEY',  'QE*T@c9<+=xi 5;-KrQ@s4BBosz+_@;24]Dy>@sTizm?D&?)5l2)m%to6;TJFd$V' );
define( 'LOGGED_IN_KEY',    ';G7ptX*M+84?*piT5/Fl10~N>4a&G]P}_^k> vIO>!W:DY/QvV5BISb|#cp0vZM|' );
define( 'NONCE_KEY',        ' QK:e@Yuv[;bVav!CR#tm`{GA|:=q3rAi;G$>D^`WdZdb%]68HFu{%*im{=>?O-`' );
define( 'AUTH_SALT',        'Ol}&x)Y(xFk5n5K$Pt]a%yC?+(uC[v`a/r<nj6@}&F=&`o*j&==ckLqY)!7gf#9P' );
define( 'SECURE_AUTH_SALT', '~~8jX!GQ[@JW*XejE{.VIAV5,wLKEe/Z=Qm@EQJtbf)H{v#OAM%csO3ADkd!%?U;' );
define( 'LOGGED_IN_SALT',   'ely5zMP8n#O>,X-()u;4$w)1[qA37ET/bm=P1l_%5~g0,en5[>z?C,KOs2x`|ha/' );
define( 'NONCE_SALT',       'W3).X^I$=*;&?h39{M%DImP{0=6grXZ2_SHG^.jhu^&TgAhG_`dT~i3HZYPMj5sa' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpappwp_';

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
