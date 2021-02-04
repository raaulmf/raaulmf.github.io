<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_raulmf' );

/** MySQL database username */
define( 'DB_USER', 'raaulmf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B0h0n4l-W3b-mil998' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}h;V+cA6-hOgS3mN{IJ2UEtq^%;K4 |XT lv1TbdjfQa&am[k9?y>W)F(eNdOabv' );
define( 'SECURE_AUTH_KEY',  '.^>3~xUhXa%0T_gsS`6Hn8}@DbTXe B0nKmK~zcx}Q+8(=UKfr/sD.R(M:C-o)9h' );
define( 'LOGGED_IN_KEY',    '*A(a~`iJs,JD?6UPx8;SQTu,z5@{n&{al4op![RS)F;cGJ;ip6m7=NWT{!S4p{wS' );
define( 'NONCE_KEY',        ' D90N>ISC8aY^&0ooSh3c#5IQ9BXLl=],lS:WX>yj@,[b7`e!s]XF%$0T#>F&rdW' );
define( 'AUTH_SALT',        'b$Ng{J#G4efSxvpH%JZOPIxkhD`Y|{O,p=?6YT4UteOpk%JG<RhJS[tZN`<k|ueK' );
define( 'SECURE_AUTH_SALT', 'U;E]kF|+)4l$~8L $[|,i)y_#hP7W)wpXij (WrC$&?MtPoFpX;g1~`zHP2[{hkU' );
define( 'LOGGED_IN_SALT',   'YQS6Q.tF=Dz!XBx@tySn%oV^pP3fCxy+~Z,z2N[V-q-O[gh`<bU_6FMK4HBE?wjG' );
define( 'NONCE_SALT',       'L-tTE@h{PGgP!{RFU`lC6teGdiO$)X WdWQO!.Ir#W!:URevS.EoYF*w&;o1~}t^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
