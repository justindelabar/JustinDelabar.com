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
define('DB_NAME', 'justindelabarv5db');

/** MySQL database username */
define('DB_USER', 'jdelabar');

/** MySQL database password */
define('DB_PASSWORD', 'ocala32');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '$/zJS-(]tN8;>T!r.VCz+xHj{4gs:EX*t0nPk(%5+*d-(ns$+{IR/465k0r%tT-{');
define('SECURE_AUTH_KEY',  '4YC8V+:luV?MJSQ|77)wN]SZxt.J<A+P]vDy7B0^il@fNH+-vIKZDd)6n_dq>MN^');
define('LOGGED_IN_KEY',    'KnW?EN7 ]tBI*#Bj0xt|V|xJQOMdWyBQLpDIOdMGKNl#hRct2|/Q0C{u17FN2=Le');
define('NONCE_KEY',        '.6_it2$nj]V2}[9p$pVEVq>{lw2w8|l^C(+ONzN !Ok~XwZWxOCbV%->y]gPJ[15');
define('AUTH_SALT',        '9K5Yyzu+|rlM4_<U3@f_VBl7&IUW0$p7>s[ srAd#nop#=(Q5*v,b[TL+[VN]*u*');
define('SECURE_AUTH_SALT', 'z>{%zw#rv7~_Ec!g,}B<R 9_Qi(@@(BHL%oAO!L=3<`UL&&F(C6,,l}leBG0bc9e');
define('LOGGED_IN_SALT',   '[-~m .m0{MhesJ_1tbe(A,1>_=Q!]nOo08)y*&<S`WaCoForh3c9c[+n5mWP*ez-');
define('NONCE_SALT',       'S[]S70;t/tU&C)[8qFQZbO->|&r8Oj+[KM@T<:|lhf4A|?eXr,iIhQ)%}!s_=+D&');

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
