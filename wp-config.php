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
define('DB_NAME', 'saikyoujapones_wp');

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
define('AUTH_KEY',         'C*Jrtl#3;s eMi_W4Kq#91#_0Ya%hv;!O*,0j/!1<V$:RpRn]VL5k!sY ZvWpmuu');
define('SECURE_AUTH_KEY',  '?$NxLh~fVm?T@KAwW/z6=Gipij_$M2x<}6&nnBU5=?,db0G/Zf4uUXg~[0)JZD@(');
define('LOGGED_IN_KEY',    '^MPX_rtC80`IXE_t-t QCxHPprox5-@CBmPWJJxS#M5hAa-h2#)`i$f4an<%D$R&');
define('NONCE_KEY',        'v5JKQY$cMw5>yMm|+{RosPHtM+DGWE>%q8jJ.xU*RnNLFYbgM-}N^<GQ!;.kqiV:');
define('AUTH_SALT',        '!w7!qky;Ok]p{;B-ncS)E%t[FK=hIQ-[3fwuK)6mvKg&Xg?l8x)Sv9!=gw{->e:K');
define('SECURE_AUTH_SALT', 'm?<YwG({R?wBv FHkEdJwAk*LVOWQoJ>dORtYn3`zP{e7mP%}n2D=Q1QxH#[+iCk');
define('LOGGED_IN_SALT',   '3#hqk_423<9*&faJiO*WZoBTv#O8BiTaJ]HO!@|O8)+wJy12:%Nqn<-iN~0m)6|3');
define('NONCE_SALT',       'Ewevd`j{spPXt1A8Qq+UUlz%u_H{>[z6rC}ddf[$9U4BMfz3j>_bMIRT41iyW hT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sj_';

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
