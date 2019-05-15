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
define('DB_NAME', 'Banhangdienthoai');

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
define('AUTH_KEY',         '<X#=Q.k&E*z:jjZ-L.7-+TnX|GXCNeT3,glvc>W}%51&d ZJ4s|Cg1+n1~td,+sv');
define('SECURE_AUTH_KEY',  '-}%c)b]rgOWL^1|KA+`Y3k1c28w)p3l[Y| Cxg>gWZ0#ZJM_D/d4sgP3iyc,]q_r');
define('LOGGED_IN_KEY',    '0<q5CH,dryU}$e~>R1JUU82X.|%OB&W?e/:,=LT):cjzv9sMp*6!;IR W3?gEm4m');
define('NONCE_KEY',        '1UYkY|i?-c*.kwFr-Kt5lQs*7tI+$9TXf]N7]]P~gm;$_-C)lk<]*=B#[|D4_V67');
define('AUTH_SALT',        'ub&z]i<pT`H{D0r&jdJ4fW%:DKR|%o,QVXPye5L?kD(?|f_/> Xa&)+Yc-|>&bZ!');
define('SECURE_AUTH_SALT', 'J1YkAmx5zh/y~.&O5u4nPP~(JK3w!7)~d~|k}?O):bxxXN,+i*|~)LPC$3Z[ |:1');
define('LOGGED_IN_SALT',   'apT*{OztfG^cdQG5g:q)fsn/(<nJJUEht3OJ8+WrTH<|m=-smz%E_K7z1`,8BZ>s');
define('NONCE_SALT',       '6g/|`#lmH)o7.y@B:hl3?s9Y]>|iH?q>TH n%(I WLXB@=*i}]lkLV$-{u?)/wO+');

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
