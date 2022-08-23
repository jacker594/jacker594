<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'scpudrgk_wvisi' );

/** MySQL database username */
define( 'DB_USER', 'scpudrgk_wvisi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z9-17.tkPp@]Xg)jT-!S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '62p0b7uzdiztxbck37tvlbflwurt7vkstuifu4qlr2invmbb5cvh0yqzid6fjjmu' );
define( 'SECURE_AUTH_KEY',  'zlkf8njadyhfoxznkyxkkvctgridv8whchkwhj7ykau4csnadkpsv7fdnsbofkvh' );
define( 'LOGGED_IN_KEY',    'qnknhzx3fkdcrr8krhhlb4pbspsygafqjftdm6rzretcw8hbepfdhwy3nokvu4x7' );
define( 'NONCE_KEY',        'vaan6uwsrw2m99xxivtkjn8bmb0qpoaxlpzblw0tmrrcfwdpded19k8i5lxq435m' );
define( 'AUTH_SALT',        'xdmqz4e0rgqjksb5kznlogzz5botqmjfe37f1nsukic4tzd7zis5icqdaaceoc9q' );
define( 'SECURE_AUTH_SALT', '2zvfvvopngatp78xdymzlmr7ma5cyca0kzxntgjf9lt8y3yjbqcndo7qzlcqabxp' );
define( 'LOGGED_IN_SALT',   'rhffxisf8ie2izsnfoyncvvgspryjofgd0surlyu6onw8verkjdldaukaxuigusf' );
define( 'NONCE_SALT',       'ornt2vosdvo6vnhnesot5xnxyvb5o0xtzbfewkwazhirffodfevrsp1t6xl1h4da' );

/**#@-*/
define( 'WP_HOME', 'http://visibledaily.com' );
define( 'WP_SITEURL', 'http://visibledaily.com' );

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
