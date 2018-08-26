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
define('DB_NAME', 'priyo_db1');

/** MySQL database username */
define('DB_USER', 'priyo_user');

/** MySQL database password */
define('DB_PASSWORD', 'priyo_user_123');

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


define('AUTH_KEY',         'e2JGsI|PZJj|5Al}wn<blX?3g&CAi;eU x`+f)e_z}@J-l/0Y/)4xIfEf6h@)c? ');
define('SECURE_AUTH_KEY',  'Ze|nA^jn3rj*>I4x/<qqnYi<OVX3P1{T!u6}gd#,y9#rKu-e0H2D d.z9+U]RtK|');
define('LOGGED_IN_KEY',    'KEOBK^4-g;ABr4-qVL#ZKv,g8=.`[Y]],Z&g($`/R6[aN|6p;|2k>|nS;%WP}Gv|');
define('NONCE_KEY',        '[B#zk*du*1$] ]PTZ{A~N*>Gxjk2RP6?|{c]-3khM5Fb8UV^H<S0.|lRZfb&V`~N');
define('AUTH_SALT',        '3eji??VV?+LT|K[EK@[}yh.6hCj^e3(=R<if4{SFbgTNq)*[<w`}~cs_wX(t=e%%');
define('SECURE_AUTH_SALT', 'TB|+7MW32fGzG+%<Q+}oDPD@o~zDRD9.GuNT4&1;+UbizUg &o6Qmk QCi5TVJ||');
define('LOGGED_IN_SALT',   ' c>azyG^!{eIO/$xbYbc~lcI$57?}!qYG>xB+-W~))?&h$oDvR8eW!w25`sZw#>/');
define('NONCE_SALT',       ' Nf}H,3bAR1Z9ku)|3|PjUdMVBUyo_zVqX;z!`&Aww~! BFjZnk6#XS8gBLo,mKC');

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

define('FS_METHOD', 'direct');
