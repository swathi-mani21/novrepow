<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maninssdb' );

/** Database username */
define( 'DB_USER', 'mani' );

/** Database password */
define( 'DB_PASSWORD', 'Gvr@12345' );

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
define( 'AUTH_KEY',         '<01<K;`KA9l|77~$9a:Cfv(>4_|+nW(Iz/*Pg2E!1;Whk75EFh9EY|DWJ${TVYGx' );
define( 'SECURE_AUTH_KEY',  '-r{PD3An+;ZWjbtxR$4Aqec<ZW1p9bmpUD`R8*.PS1y)VxaL94Tj9#aO%gI$:S:V' );
define( 'LOGGED_IN_KEY',    'BJ%B>o=Drp2o>>C2vp$KwZP#l@g(Z_4ZeWSp:,$f} xa~YgluND}%BZ2k8Af%i@T' );
define( 'NONCE_KEY',        '{sq_xzTt$b$wa3UqfrKC-*(S|x#dGb8.sm=PNzVR47{XGQ+YL-%62I<^>;]#?%bE' );
define( 'AUTH_SALT',        '`+_+dTyqEK}{a&MzLqMheuENxFgwjJ|jUvI5H;eyqi3;Chy,ifD0m)Yz/m66^iji' );
define( 'SECURE_AUTH_SALT', 'NjnRZr_#zikBxVMy,:)s_9`_,&V4SjzufG/j2@/9e)*q)o,ZBUDe/?:Pd/4Yyd9s' );
define( 'LOGGED_IN_SALT',   'to6dBPFEC^OKOC(pY+HB^G54Lb>lQkX:Ho/sX(l^=5L^Cl](mJN2c]QBi`<AOn7f' );
define( 'NONCE_SALT',       'lRNh+vNjWRd+:y6<&T8cjeX9zjZ?b*JtQf4L+a`IgLu9^x)s{?GCaT9?=#;]T(a`' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
