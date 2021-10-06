<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tekup_data');

/** MySQL database username */
define('DB_USER', 'tekup_data');

/** MySQL database password */
define('DB_PASSWORD', 'tekup123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+ d[*V0ELZH-6<NvMkem-sx5I7P)2~yEb7:h?bY#mR;L4x#-sXS~^I:/6QuA)7:|');
define('SECURE_AUTH_KEY', '+@!Pp$<^r>U5?2}*q^g[L8d0*dRH@n=Aei e>|XE|Kdp1}WK*h/~bGQ#RH{%34ly');
define('LOGGED_IN_KEY', '9m>TNK}7LbN,2Q9xSv*zh<4R&`FPbjf#a}{A(@vJ1jfB=kqWylR]d9><uP8Ee! d');
define('NONCE_KEY', 'r9OT|}({~I-_-1J`@ YJSjqt%4?l&s.T`kcfte$AOZl<zAubDRPJVv|EYq-+.33z');
define('AUTH_SALT', 'w8+?%fRb$VfS.I|v}4Dg8z#tPQFyerSlxKC&T-[hf@Y:5{Kot(DPMsnF]khRNCi ');
define('SECURE_AUTH_SALT', 'g8d<#k&6lQi7a[.j,3<)4yEjgx_lkeUKUTtAB6~p5z ,&]/<32SQryfl10a5Lu{2');
define('LOGGED_IN_SALT', '1Z4&aJ:IUL@@2elR;9_=5<S@_h-<`;gPI/,vKFa!U_mqRg<FWis8M.-pjV1/7d3u');
define('NONCE_SALT', '_/U(N`}-]2ofYpZ7 ])iZS#C{13H<*$/KmEo-=Z:EUZ5OT3h.9YB3sPFg??J?)7I');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
