<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lessons');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.?Xv9<-B=_GEP58|( .slesmr:St6bC*_En/tM_;M$YiH&i|e_<WE91L|.dA<a~n');
define('SECURE_AUTH_KEY',  '_B^63A6vaX+O|l%S)b81_J+rCX!~tI;^X:9;ObM.|Im[*q4gyReY}m-;[$K`h@Qw');
define('LOGGED_IN_KEY',    '*f@sOdKFnDL-b#tz5&ga&H4(w;X1?YM6Tl=17+D2s511|o8eOF4iH=sD6+J@V=PV');
define('NONCE_KEY',        'A[~~n{b(bKg?_Hz?7YOG>ls4n|=I=-vC;;Up^TpTFVQ+70v/pyP=P?*.)eQ-[c(@');
define('AUTH_SALT',        'vg-=7t249>[z1:anga=5_Uw=d}dTRFsa&o.Ov,KRD#,rZUa,m)2tTVZjoH$J)ZaP');
define('SECURE_AUTH_SALT', '!sNy4P^To^x&~x;ZSh]:H;3f7]2)ivD`g?HSkEA:&2$rDx&tgdmv]7[;DRA$npba');
define('LOGGED_IN_SALT',   '~5i`[(^~WZ[1Q rMaF&]0sMS?qA9x0Tf7f(&L4W>]BCu?p3V,hVd)!Z.%+Z|N&Y{');
define('NONCE_SALT',       'u2.g?hV,W9kbL.4=D?[[Jb9Ws=#/-fz6-59np1ta*qGJ?h^:+j;Pr,!daRm-T0/I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
