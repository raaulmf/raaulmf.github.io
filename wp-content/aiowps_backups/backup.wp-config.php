<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'dbs302109' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'dbu180529' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'Bohonal1998.' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'db5000309721.hosting-data.io' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'FOW/M_1VH0Xq<EaZ5%;SOV|93x=R6AbGS%&#:9qX-y}aUo.iiI`I(QU:2AO7HQ*_' );
define( 'SECURE_AUTH_KEY', '`gOxvI/KkD+z0p,Jf16V/opxqDx1FjmgN:% KqlF`pFucTXBUcX.r]R1m?<a(nlD' );
define( 'LOGGED_IN_KEY', '9(NZoBw33a3I+agc =.po(9J+wPJLN6<k;@[kC&!yEtA{+{ 1#;pu8:YPF-8[q}Q' );
define( 'NONCE_KEY', '4D)wKBQ%3pr`R9W..Eb+Nc!&{P4{RNyQrn>GLJ:e;aQjN.v[6;vTKk~[9CkU,,p|' );
define( 'AUTH_SALT', 'jtq7_uBkrx6nnoSOa-.LEr(fx?KX>?;A@HUl!E0Hik~)_?;4Pq@YA#x!rlq>Yu;h' );
define( 'SECURE_AUTH_SALT', '[hm&F.-X`:}-$2&v-^>[yjec;d>lVqo3Yu$9yQ:/(z{A`ZjE`Ciq5(A$,e`:aCZ*' );
define( 'LOGGED_IN_SALT', '*MUvm~3N;oqgPDY$oGiMB_/]3LD?}emS.)9U>EP(>Ql9D3Pmf)[C3(c6N(K5]<*R' );
define( 'NONCE_SALT', 'C|&pL>:V=&tF$hj(=j-<T8vufl+lPGvktyQyJQhI,x_m)b!E>3[wXvGuyrwB@lE0' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

