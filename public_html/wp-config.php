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
define('DB_NAME', 'bfitnvsd_wp798');

/** MySQL database username */
define('DB_USER', 'bfitnvsd_wp798');

/** MySQL database password */
define('DB_PASSWORD', '!X@Q66pSq2');

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
define('AUTH_KEY',         'xkmm5ahgtjgn7atj5nryv86hau8g1ppmllscfajeqavhbcbu8edh6filx4elzgc6');
define('SECURE_AUTH_KEY',  '8xaf0fscjyqsrehfwszjv1xxu5khexb4hzgezlp0otmvqv0fq9tbipyeebsinryv');
define('LOGGED_IN_KEY',    '5o32vnslnub9cjgckdwrwaxxxemdkumr6dv7j9vblst20kybhsl9few5ktsocnpw');
define('NONCE_KEY',        'eqxbuimyl66avocwzzz8knvlsxsmjrszuqhzlg2siron04v5xtbuqegoza2m2ibu');
define('AUTH_SALT',        'jqtqh4izbw1bxlk9jh9pr8hgiqkufw5qsrpsb8zwrnnogbfldx9djgcjj7ijqx8q');
define('SECURE_AUTH_SALT', 'pexdacu81pc8sgroguuqj2hnax1mjpxbkleaumnec6humkdktveo7zanfpqhdiii');
define('LOGGED_IN_SALT',   'xze39y5s6kmwsyqg5rwl8lnjuiom2dck2jtnca8b33hjon1rlgmg0h1qflvfxvwq');
define('NONCE_SALT',       'rnoodtnd4j6asff6qbx1eksbb2te41sg8l5lnu9d4envqripqaxgrvu46ymitfks');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpds_';

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
