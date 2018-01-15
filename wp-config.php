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
define('DB_NAME', 'sedekah');

/** MySQL database username */
define('DB_USER', 'adminsedekah');

/** MySQL database password */
define('DB_PASSWORD', 'adminsedekah');

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
define('AUTH_KEY',         'U2(,`C/RePCzm{if F CP$>+tb= tU2~/,%n(K1c~?tYc~`FBpGLpAbau&->+H:n');
define('SECURE_AUTH_KEY',  'sD5m9Ma}]=4hud,lO&H-M23A(ysHMb-D3%)oHWN8}tbSe1;N;7d4$htz{/9^RrI.');
define('LOGGED_IN_KEY',    'N)LVpsOC%H/~h?3]zxE| Oorj*>]#P^S^z,$_i^RFT8}?3MsqQ;^0%yfy-`swZeE');
define('NONCE_KEY',        'M7X@!G%DYPWM#zgBKQVn|M[)BF[h0exXU+O0?o-Lc`=Mp&Eto5W`eY@?-Z<r#b+2');
define('AUTH_SALT',        '[{,/Xy`_JE?sk;VzbZ]TxMN7b{2]3[8qfo6h2I)Kyk.QVDDVEB4eVL^><6_${>J=');
define('SECURE_AUTH_SALT', 'UiX$Z?z&e?%-DL9n*oU7iX{=Lhp5&AYWm&%`-o.lx7~7WL.|7R6r}hzB40Q0MMo/');
define('LOGGED_IN_SALT',   'UcI]],JK4sK)@Y+hzJ7A-yOUmJ!Mz,&!Pt-Ow60*l70F&L5QWvUQ Dz#t:oKz_%p');
define('NONCE_SALT',       'qKt)(/:jXbHH{e`+U0,p.d]0H[fx*vj2FH0lJw64y$xK)!byr0^?3[ @5 NFi#)9');

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
