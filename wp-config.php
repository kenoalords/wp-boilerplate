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
define('DB_NAME', 'boilerplate');

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
define('AUTH_KEY',         'YShcr>gs5&:vy+8.N*u(jo$ Cy;.)7r/i[NNz.]uTh%Y;~d_hq4l%<6Tp?h@r$:3');
define('SECURE_AUTH_KEY',  'cwOU!3ER2:0}_,h!~XS6 |=6azAK6dAa(K3uy8)fbFLyK997b9_+lcF{JQT9~)pL');
define('LOGGED_IN_KEY',    '&Ja$R*G?&:-.N:.r2@NSJn?/L#t:.?j/&SB?uYIkL0B@fDOUG6F3MyqK2$T`!(-k');
define('NONCE_KEY',        '8tlmG#/TSAx%H>fejkdcUA~d#5`t)`@5k.fK3C 4E#YD)_K76kE[}G({xq W,c@y');
define('AUTH_SALT',        'YasOlV3ogl+},!KG$P6uHfST5J:XUth6xhXOY9^4NnIHY}psvg1GNi75vy|N5T;f');
define('SECURE_AUTH_SALT', '$I1kAb.AlEdGs%[!_hogJl65kTV]^5OHU`)FDOV VqsgDw?@R2x`,LUW|/u,Bq{a');
define('LOGGED_IN_SALT',   '1xZ8+=`+!>R=(]Z c.&(`~nrPA5%u=.4-!xfh`~am*E:TuSFs$<@~hc hm?mrS06');
define('NONCE_SALT',       'psj`ir(R?t,7MopM<>;Q}j^N*$opNb;5?-BG4#,S]e?q:cq]S9C}6Z+<G.^>DJor');

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
