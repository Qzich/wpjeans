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
define('DB_NAME', 'jeanstore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'S=pUt0Oc8hQC5{[-OWohM+-l+*%najhVm(==rXR4o5q6qUeZ|b0)JTvleMp-#!;X');
define('SECURE_AUTH_KEY',  '^Gh3%vOx${4h0}ShVnqhd5@WmR4^ZF(n!VGz2!Xb{9H=BQ-j.cTbEK|-P+p!IMB;');
define('LOGGED_IN_KEY',    'xr9r?lmvN;9R)H)DL,_z4}GS_*bfD-!gy#tC5,B{fKD9xk lzQG,!,olD4+sC#Nl');
define('NONCE_KEY',        'zO=igjQO]6x!+fx5>LrNx[a:;2Y]]AKU~=6Id^W$^-+gu.-n_boq}t=y8K)XFf<<');
define('AUTH_SALT',        '[-0o=n>h$IG*[gQdTgtgHPi}T#8v%Z[[|XaBwJu`Q]jQyNn_L04D~isC+-AF8n=/');
define('SECURE_AUTH_SALT', ',>$)E:2Z@icU!+=QD-j6YN>W5k4X%&#|-5QO|]wPs0[ n aLfH=O[~TE2FS#9%i@');
define('LOGGED_IN_SALT',   ';xT+32<6j7xR/jqtyA n#yjiuI0 ;pDuTqJ?,MHyH&N!weA7+sfAa|>GL<@gWlu=');
define('NONCE_SALT',       'TYH@)rLGzQfD`nk`pc1NmAU~|tjuSk=GIxs(#u_NthFuzbE$SWwW1)W=!%1|Ea>H');

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
