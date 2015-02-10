<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'andwhat_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '28Yh]rE{eloAm8#3/S>+b!=-3aPI-L&/LCK[Wm%oS7,zCi1Iy(XQrgV/{WW@RqU>');
define('SECURE_AUTH_KEY',  'IyO|C8J%jX0W,(+y@!.,V3|s(i$JOOaum1o>ZO7o@#Fja|^ZV$X+Fwq{$OBr[FfY');
define('LOGGED_IN_KEY',    '>em-g%89)FPU@T4}xqb`$0&$9<Pfm0~XOR55N$.-#5Y<kgq#pqa^_ &dWJ!o]q7i');
define('NONCE_KEY',        'TE8viub][9?{l6U#uk-/YxjW.j#9ZPU%);i)|?)B&=U)ad+Ag}hXS6TbI|GN:YY*');
define('AUTH_SALT',        '73(!r1o3C|du9q(U0oyC6vUQ2pgtm)36A+1{9-4YcU<R*s&n|[5)9WDk=!:VQ@|$');
define('SECURE_AUTH_SALT', '&KdgfmK#|9+]w,rtLaS<yYxm.3@PiEy/KGt+$I4><L&^3Jjusa{rD8/:{>ot *JZ');
define('LOGGED_IN_SALT',   '6qb-uF^<.k#rilI UeY+b-uVB7ZO!6<J`6S-1JQ|G#?FnY8q.YhoT7IDgA-x#i8`');
define('NONCE_SALT',       '?XT^cZr|Hd]mTsBbp18wt68Y.x4:{$ %ZP91@ZQ/[>j|U!U C=ah;CL5o0e`bMte');

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
