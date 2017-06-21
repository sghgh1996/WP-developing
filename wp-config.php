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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '123qwe!@#QWE');

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
define('AUTH_KEY',         '<%2P-U`dMkjfl!*v `QlZI:E_z$).]6=J+A=PyBIb&5[koTdJ^V@lW|% 8nc%zE2');
define('SECURE_AUTH_KEY',  'M.Vnl+M=t1u2.?^SLHMi70q}-/4Zk~Pk@PU~8*jU5*6kEN0}4<>TEE;;sNl$Q7Yz');
define('LOGGED_IN_KEY',    'kX@:N>CZHa;>OB[CD-[gs%J_/jq|? kb!!^|gImCP*_vR@omlf1M0a)vIUKn`+6[');
define('NONCE_KEY',        'QG}KjjKckz}&,lM{daGmh^Vz~=<A Kz7h*kJ#Buy+eRct^,xu<J_9Qzq=]G)Zm}F');
define('AUTH_SALT',        'xM_9=$DhdAqZ5(JpY-fOa9?.ig)zMpci`7<!O+m-CL+bp|b (N6dSKc0~v4nC4$:');
define('SECURE_AUTH_SALT', 'Q)78s*IV)=KHz.ThSI|&l2.Ig$)m1$N{aG$Ke;8#D-YT}!MX5%OcV^=Xnn6!{Bmm');
define('LOGGED_IN_SALT',   '|E%`<R5jMV!>+m|iJ=/8NUpR%]t?(gE9R0oK,v7*Uy_i11JQ+w[YswL+ir$%.}15');
define('NONCE_SALT',       'PT|q{&c04[2T;Hv)*_@ 5m<<wF^:2VMriG$%rK#XLiO:#8>We4kioM+^?T0B} L/');

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
