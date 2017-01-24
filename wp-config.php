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
define('DB_NAME', 'Wp471');

/** MySQL database username */
define('DB_USER', 'Wordpress471');

/** MySQL database password */
define('DB_PASSWORD', 'Wordpress471');

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
define('AUTH_KEY',         '3[HwieZ07#v#Cz]iVG(:Z9-^.h:KKdF0<1^CgLgd&v_vZie6,>JK{,:c>VxlG:c?');
define('SECURE_AUTH_KEY',  'PHu!r:UK>?SI8n$p1^#,RY=e:~SlCMBTN&q@+0AFYZCxsgRF-!x+;`!=C7=v .yG');
define('LOGGED_IN_KEY',    'noJC)Xvy7nd>!/.S$X=yIr#7-}!o*vXk/7::(u^[(l(wj_)~9n/c{,nj8lDgwj5u');
define('NONCE_KEY',        'Fbl[kl>H|wyM):lwt5#8P@1j`7K{YtcMjfGoMNK57TMTN+7yeUy ,Sq:!2lxo[~{');
define('AUTH_SALT',        '2wd,Vi*,p02Oq_Px2tbwaUGwj^x[1%C%L+{)8V.UN!h(|od@H>qbiCb<j[E{PVI`');
define('SECURE_AUTH_SALT', 'LcYfbCI2)SfTi~-KPC>j6UD|hvA55uoi] H5_udR(4Tul~o9MQ2t2`q@ey8em)Q@');
define('LOGGED_IN_SALT',   'D>;r;C1MVo{:cUD}oQD?~,>jJDoI/3anQ+Ad#Q8M3.RDe/>}P<`QVJk<[.5D]A{n');
define('NONCE_SALT',       'YS!W5I7om{62gvL<=6w#dY%LS{mJsTPwe{1s`w]5SS$n4C5cvZsMn1Y1[xn>Nlmt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp471_';

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
