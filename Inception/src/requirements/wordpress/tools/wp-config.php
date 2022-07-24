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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', "abittel");

/** Database password */
define( 'DB_PASSWORD', "abittel42" );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '1B-dwDW}s</MM[lB|KN.f)eL>8]WjkHlqx0RQR.^PVP-&t9YZV09)5#(TYU0_x-P');
define('SECURE_AUTH_KEY',  '7h6ED!cP<BRnm_eUbIZf1xmPo$X9=~6-sx%@i5+7Dzo:nUu-[IwAmIc:?:R!q7&{');
define('LOGGED_IN_KEY',    'Ppv!]`X^([%Y|E K?@bYY4.,QDR^of>l2v;$C1-p|Nm>|}M4^+ZH{Ee_HtKMN(|v');
define('NONCE_KEY',        '#+wbsJhz8g8~.;g@D*1I%P7|&u*uh^8<$ZGER5tGKEfoybE}6T6?m!x-zC-io`l[');
define('AUTH_SALT',        'R:pK^b~bo+fva&+8&/d(P%~8Y8N~[#z5v#NkVP+LQE: =ml,=LH.1g(P-Uk40:<d');
define('SECURE_AUTH_SALT', '_]8~>z5I`DZ?)QLJa}%k;BVEb!2{9[!3/6T*@Zr*BRP{@WpX.Y)mZpNZ-F6J<#e|');
define('LOGGED_IN_SALT',   'K7*k}vheI>MLz<!-iPb,-j@F-eF6lo/W M<%~[bWS2`:t8nf%n|8#M-j}f!K}:/e');
define('NONCE_SALT',       'QJ} GqG-!gSNbWz$ZA0x%K)[IA:@2aP-loFrU~;XNqG&EyIAl+|[&#1s!0?$Cbz1');
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
        define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
