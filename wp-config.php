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

if (file_exists(dirname(__FILE__) . '/local.php')) {

/** The name of the database for WordPress */
define('DB_NAME', 'themes_archi');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');

}else {

	/** The name of the database for WordPress */
define('DB_NAME', 'themes_archi');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');

}




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
define('AUTH_KEY',         'cdc*whqolK)CzkcG^y%*TY,V-()5iRKyNqSfUy(wJgq R.iPsggMjLppTK8x#LvW');
define('SECURE_AUTH_KEY',  'fW VA`? 9!II>I*])l_^lb[fB:3Nl $T`V?tOIiBe0q/lM)kZKxoL#,ppD/eI|kD');
define('LOGGED_IN_KEY',    'MBVnSk<mWOdI$,dl]q+F} f{m1G:q_w,OhLniC<`5k&vv]}i&xD3kyuZrVg{J-bu');
define('NONCE_KEY',        '+@^dTH>4U_O*FY1~~:nHUD0F/CA^$ :&=(MRJK+M>T{U0t-9=:wThC^nyt/gW$qz');
define('AUTH_SALT',        '-X}{VWh_,M5rjicmq9{G;Z|);+Ks[5v]Tj~yZKaIIG!%/MmP`I_(~G~-clzjf/i[');
define('SECURE_AUTH_SALT', 'Nn<^O3hlQ?+4TFZS~,*$-,Q+j1J#?5Ej PDld@E%9-}%D<3HN/3s1_/MpW+llFTL');
define('LOGGED_IN_SALT',   '^cF)~?-)@_b_(/r@K,6b97LxeB1>&qWO1>0m(ce,hJ,j~UaVs9Z;=Z]t:d7lJWoQ');
define('NONCE_SALT',       'uaI|iHOW$G[,gfbvS<$ ]t:YEgNqI71V_~Dq7#TXJDb*A%7:G*-bJWi)Ka>.]f$s');

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
