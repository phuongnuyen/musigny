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
define('DB_NAME', 'musigny');

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
define('AUTH_KEY',         '-@afkc5NHCl^zd~zmR=]7{?q_LGvPb=j0?yXQ+)<`Z6>?Nu(0!z7|ra(G)a9(DD5');
define('SECURE_AUTH_KEY',  'Dy>h{Lh#jvTG1LLqq0F1EZxGF_PQ41ukk`dX,u==k.PNp26wx+zYAW|%TZJ$#IDc');
define('LOGGED_IN_KEY',    'nXQ/g>:DtvKRmX$(MgBY%P_[b67s7MRF1j5A^WT56p+oo!_8H6M 4]zHl)b!K39t');
define('NONCE_KEY',        'ZmU5KxA=5m]hk+W zN;~:JVbM8/hf33p9J4hYxEC29i%XvwzV%lqlN2xs5-_W/aU');
define('AUTH_SALT',        'gA50F#==c-l>a.w!E!Zxv$$B`oEaX$D>%Re?I%:iI)W|ETs@vGpn@*LgG}0p,bPL');
define('SECURE_AUTH_SALT', '(`M(L9lLBk>K1,i-ZdKH/Ou6L^dW%9L$!s!A.jtl)C}^MclB^mVmW$}3?85H2H:I');
define('LOGGED_IN_SALT',   '6-chFn]!}3_NfZzq tfUC&LS8;~Xkz5,K.CVj;O#QSt<5Fu%Rcgt3]bYyg@ve/Nv');
define('NONCE_SALT',       'wD-ng/BC{UABkj{X%G}hJv!;E&[Ka<5f3JXW_>Lvi.l2}RtjQF,: xHH[P]LbnO]');

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
