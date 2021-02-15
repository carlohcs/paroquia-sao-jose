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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saojose_wp' );

/** MySQL database username */
define( 'DB_USER', 'saojose_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a2p)3V81S]3]O@(o' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ohgutoqmprwvlqpeh1asdhc3ltmfxuy4rz38c3mljo71wggzusml3r0zntf7ucky' );
define( 'SECURE_AUTH_KEY',  'xe3m6obptitykstw6ecohk1difzycj9o6e1olew6bceh66zirzlihmbhpqpljz8p' );
define( 'LOGGED_IN_KEY',    'ot3wsceacxp6vkugs5let1wznno9qykfvjqrx31i6clxxlhq5yqbtdriqs4hanym' );
define( 'NONCE_KEY',        'ts6rq95ezzv3vrcaj3wyevmrn6jitdy8x0uvlbhxtjtc0h6ezdkcsvfn5ywtaupp' );
define( 'AUTH_SALT',        '4nlwxvi8h31zywxlttfcapsrsaozzjyf5iwxelgq4rboauxbxf5qhulwfzgsccfp' );
define( 'SECURE_AUTH_SALT', '3inq8laxd0ckgaeoahz46hcyjbvijnzp4oo0i12i6ulco0kyagtkuwlhor4iv9ex' );
define( 'LOGGED_IN_SALT',   'iez3ca2jzuqm2qg4lrfkc7ayog2dcjhgtscdbnzzts4nrjtftnydrjhzou80ldhp' );
define( 'NONCE_SALT',       'mxpujrrsna4w4pzht8pzwbanbvorukfi7rwrmoyfzg9f0gwbcxt9tj3mb8fybk1p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
