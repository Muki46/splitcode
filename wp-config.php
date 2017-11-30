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
define('DB_NAME', 'arthainf_wp644');

/** MySQL database username */
define('DB_USER', 'arthainf_wp644');

/** MySQL database password */
define('DB_PASSWORD', 'pS78T1D@6@');

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
define('AUTH_KEY',         'xyb9rlw3aerdm3lgbkif9ppvdi7zcsmqm0bhhvfzodxcfmqyfir31xejq0myppiq');
define('SECURE_AUTH_KEY',  'z5psewvhgsrkzyogu4d2twuetiok2b9giqs47yirayvmi5ta3r1wljlhdvlk5b0o');
define('LOGGED_IN_KEY',    'xs4jwimsaks7xm3t9s3l41a4ch2ubhvr8n0mubxatcr0zfj3zgsxcbvmxmwiefvh');
define('NONCE_KEY',        'hwnoz4szf94yhpef9mzya5rfsrlgt1fqxueab2ozl8befkqkbmmx5nyodg74p1yw');
define('AUTH_SALT',        '9etrsbfdbbvhqizlbdzyuh3bpvd7tksqlmlarmcazudfsrlyrsti0wensaibkxam');
define('SECURE_AUTH_SALT', 'yqp3ifpiqvtule03fi6brrr44lr0enwkvynt6jsxbz44ydjnza68hmkzvmuhuakc');
define('LOGGED_IN_SALT',   'mmtz9tbp98vvolaivcgcuhomgitjhjbl6xhomvjdmqshkfyia6zcksx0fih1dngu');
define('NONCE_SALT',       'rjx0cvfrmehc4opklvydojy7dmjpakp7xqqia4wibf0doyspkuorykyczufpwqrn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphu_';

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
