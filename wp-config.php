<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fourstar');

/** MySQL database username */
define('DB_USER', 'fourstardb');

/** MySQL database password */
define('DB_PASSWORD', 'fs!@wn2012');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#o8)Vk0WsaA5xm<~ry@LCan&l^sPm{M>K;%uS@7@WS&mimGS>2W#0AbB`}B6^G}L');
define('SECURE_AUTH_KEY',  'ORs`~]WNLe!cJa1$sbN6-zn*^KN+)R/ 5@ O,xI|T#!}=^ 7IcR2^plJt^3ulJ[S');
define('LOGGED_IN_KEY',    '^*HKSSczRn?t2uo@WIrAs-a|nC.rA6<n)UdWHxFUjO]H9$OkX=jNklCQ)SCuprPH');
define('NONCE_KEY',        'D-O@6%zw<d_ >(=%L,9zJL>AE=o|wTMb|#HT--WYsWNU81:d5;e>46JjN`]eHn<T');
define('AUTH_SALT',        '@7#5(WQP4g$Pk;^an);.kE@pG$QH&5{&[-!Paac?xZC<Z;VAvT:s:3+g:r{lQ8_W');
define('SECURE_AUTH_SALT', 'udV;B^o%Z_awGpj4k/ZcX*Gy+id$Zs;ooM_}vs9Ls-ai3Ie-.Bw=$$UL7E-s}W{3');
define('LOGGED_IN_SALT',   '{I$vBKTT{j}Ng~C8x;m%v]F]v(pU/GI&r{D~8a8@Hj<zdL8C[-9^||jqZ{B&3DHN');
define('NONCE_SALT',       'R^.HaR$--F~a}>98zcHqdc)A>X,kTnKgEFO,@;]5>]Ec:C0r{{0X3d13c(+(~vxT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fsl_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
