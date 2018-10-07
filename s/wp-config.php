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
define('DB_NAME', 'misuper_mso');

/** MySQL database username */
define('DB_USER', 'misuper_mso');

/** MySQL database password */
define('DB_PASSWORD', 'p56S-4SY)r');

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
define('AUTH_KEY',         'vcas6jql5fqlztswflhwigx3iqcysypw1wvo97ipecnivb0fwadvg2bmp8g1othh');
define('SECURE_AUTH_KEY',  'uqlxhhbqmy3vn6uclmefw2fe4wrhjvx4ewxdmaapsyvoukvdxzbxtjnrhznkrstc');
define('LOGGED_IN_KEY',    'derg4hsjxaya08gvwfw0nahbut30pahchnj8uux6rlbjl63a9vxn62wyxwpdoxl2');
define('NONCE_KEY',        '4y7ig0ncnjkmjz8gov3eg6x6ifbn8zzp6ftn5kreh0ykpli3iwwrumafgcrqjiua');
define('AUTH_SALT',        'pijvvwmnl7deetancgtrkbmr8fkgaqdhmhflh68tflu2nhfwjbxim5mwvcb5shua');
define('SECURE_AUTH_SALT', 'qjmkwequhaj5vnd8ocsfajpxzb42zdiy5ewtfzoecpe4pqplsxd6b4efgnmt4yn8');
define('LOGGED_IN_SALT',   'ltp5bam0of2jyf0esohumonqb3j20t3l9aznkdfx5nchtbrw59wbnjqfpyogr9c6');
define('NONCE_SALT',       'c7ui2btkwnbyujhkswl6yeiv78ri2tqugrpnpj7lcwsd2wcoyzptkirsdaiewrxz');

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
