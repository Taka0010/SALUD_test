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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cKzhz5T+0qn8W5TcDXuAt40E8aCvImuzjADZcUFDzs74tAbGNH7P8zB4+54oooiGMUu9DAG1EncnASQe8SfecQ==');
define('SECURE_AUTH_KEY',  'SXcusMTiQA0MDCJey+p+STAFJT4qNn6vjpamtw9t0R82mv91YmJ0+/qjXAaCPHG9Sy5JOqI1cjdEX1HyDgfu3A==');
define('LOGGED_IN_KEY',    'dh9fkBSTEeWWGXFeiea5L5nmVCCjBiVb6fTbuxThD4jjM/JoBf2hwGzuaBXj56qJPuYJbjmQsMaR8wrXMNWxWw==');
define('NONCE_KEY',        'uGYVW7PAOQhBM18S0MPk930u7ROGyjR8e5x4Rpbl3vH+xfp3tcRiaYDqznI5YJ1s92q6TTYHgmyyeCRGdv0/dw==');
define('AUTH_SALT',        'HoV7BjxDwXEs6jvNoK4uLGMJQBRp/6iS/6g8cNCPUtulREmmBcJbBNRS4+Bv9RRd4313054zKvzQeTVwE7Q3CQ==');
define('SECURE_AUTH_SALT', 'M+4kjwB8H+OvUbVFJQcprOfkRPWvxKX5rxgkO0AkfDE4sBCTrSYArqBYnwsCX2gHYsGVqAZW9RzNGp6jdsrMKQ==');
define('LOGGED_IN_SALT',   '67nLBm2Hurwi3S9YqVU0CnX+9Ru6Bs8F5l/Th9OPv5KpOrrsrmjKnzLTOtXf3n5d5XsH/rbgxyGNQer562FoLQ==');
define('NONCE_SALT',       '2r7RWVVRTMDgwBXtBJE718zbuRjA+JUrbg0LghwWPzwspl0NffxudbX37jw0UfdSqWuXaHRRA0M7nm+pzcf2cA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
