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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rusholod');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '~aU8]-c_nhE4k ;ur=qX3>GBDv>@s7`AaRyZd 6k`AP/,o:P)Ov$evAtBR`r7e3w');
define('SECURE_AUTH_KEY',  'z4-]@<eaJVfJ?4=;/n<>/48+qq&62])xP?/?_Fz3m!&BDV,U`5]KhW}*(v3^o6af');
define('LOGGED_IN_KEY',    '_MTXSF(JJ/g*%MJ4PArMvf8,oRSZ)CBD^ZynQT3UdW56s!<6APc+1[9R)jXhz=9[');
define('NONCE_KEY',        'T!~N:s8_#l0oX|pkOmEwc$HU=ObR[SeL+Yd[vB?f6bTD(qRtdmt!MA?I 6d}6 $-');
define('AUTH_SALT',        '6a 0(-/4)xqk}UG:u#<S9</Dgu;Hg8l4^>pgB1Z>eWQ/Cz=iR2k%6Q.@zaDq-1/B');
define('SECURE_AUTH_SALT', 'DCn[M,jB Y$n5L4Rd|x+3H(}*V(8p@$G0>h09-e,<TX1t2gm!M6@N$zYIATYVIEr');
define('LOGGED_IN_SALT',   'zUS*eS_4We)gh$X:W<uG(P*`AQgNA e6)& SM[Pxyjkc.LjnX)#*P=PH-}fC+MP0');
define('NONCE_SALT',       'VzjV`SuR!W _jhNJafq%$Rr]v]Up#MJ>+Nb )u_vyJ NwUoYD4Dk$JsukQ=S:+bE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
