<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ctiks' );

/** Database password */
define( 'DB_PASSWORD', 'ishaan@2003' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6=IC`%7F+Q|3VrNOlL !h&OlwNdK`CW=/JWWqSx179,~? GQr9o^}&a.&S}%@qqP' );
define( 'SECURE_AUTH_KEY',  ']^OVO>WDU_VrAj$tn!uvV6IVz PmMu[Ih!ko3Hb(0mgU0<9pKFVG[Rw?{x:B +eq' );
define( 'LOGGED_IN_KEY',    'y9dJ}Go@T35q06-HAn[Gnj_na~psyK3{esj?($]OiY[sUD>0[a_t}hIt/ hz+n`A' );
define( 'NONCE_KEY',        '}tHaGcxAhwq[,hJSv;Pp54j[MYpfKkfc`mT@Z`b,>yn6?RBm}HL0cVmRQ7Ln~FO~' );
define( 'AUTH_SALT',        'V7wl6K|:{Er)tOqvm/WJ``>Tl}7qJ.3xn[Qh)AnJ/_L|PP]H^p<OgTasZ?65^jNS' );
define( 'SECURE_AUTH_SALT', 'j&R;.NW*X1Xe%7EwX}Q<};{HW&<F* @BFXBaogJo`H]8HpEs*;0UK:}@j$prwXOM' );
define( 'LOGGED_IN_SALT',   'W1c?^/l}jJQjz_eMD,&vOn-1MuS;wdAef-[R8hU]75 .U*}oIFn_f$Ip2Fjv>D);' );
define( 'NONCE_SALT',       'oeCcZGtf0?YBA;*y*snEu<VwYLG@cNz02v;]H8ffHTUhPhMd<SMMFpB@dMBaJUAV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_MEMORY_LIMIT', '256M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
