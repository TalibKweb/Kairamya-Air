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
define( 'DB_NAME', 'kairamya-air' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '%/WWoM[+Kch&=^Si:2fP.$CG+x/p,8efu}apuTq#)x<s&9WbFo[wG&7|QJSA$3kt' );
define( 'SECURE_AUTH_KEY',  'JR%Y$SF`>)6#`{o(^#ERE]4=*wP2|5Y37Y&ajW5Wd4@CT1]zP:RnBS~!,^j!cSwc' );
define( 'LOGGED_IN_KEY',    '-=ctJ[6g**^&@}fLk+t-L~<p5>4WjX(WXrM]_zb<2N&`aPS692z%ox#=-(2 ]~?D' );
define( 'NONCE_KEY',        'rC{O08V%HNAJJZ>TJyF>34dsBWb6:cpb{du54*.9EDpE+MD]C#H@}YUhYzFA}nYK' );
define( 'AUTH_SALT',        'c3,/FNbtO,~P.RCLstJ5Z<#K)nRlX8{c-%n#XndM+]k;W-*OdBUxs43U(_H}CP4^' );
define( 'SECURE_AUTH_SALT', 'G+&P5L[;Kqsb-2MiYB74oY]MJfrXd4HD/i^#~OkJV0=Q*$,flA;hs z/9=t#,mcX' );
define( 'LOGGED_IN_SALT',   'U)kT[wd%ATpgMx1sr*v@JD[QDEYRv+CPCCG+*w@y8K9F|/JqGcLn1L5bgGIpJ$Qi' );
define( 'NONCE_SALT',       '3qZ,G2Uez88wIEQpJf75u.}H]PoVpv269fpxK/X#rU*@HYcwZ##40O:j(9[ KJNx' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
