<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotelkireinn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ']rSbqu$%tc6& j<`i&M02T|7tcx47;I.Sl.}}> &lE J9dj2~j=~xFq]?9{JoJ0M' );
define( 'SECURE_AUTH_KEY',  '9hi=LkuC~9ZF<OCv5xi1x$_u~TQAvw{xAbPZ7?Q|klRyVdE]&uWUnN+Q@(=1Z&K|' );
define( 'LOGGED_IN_KEY',    '&~!h~)1XhMDx@)3>.EM6c4We=w*+2H(LTXzd_X/bhcVgV58;^gdE`ObY?l7K5/n2' );
define( 'NONCE_KEY',        'HXeXmg|ayxs|OVZr*EBY;Yp:.<g?uaeq-v;Fo^=M7V$z32qZ%}]WU2FT;=sk{J=)' );
define( 'AUTH_SALT',        '~#ujT-wt_=tj%p6xY]GojLVw8T|~.duz1l!;_8>7dP^[-:6559?*,:*#^xl*(K$<' );
define( 'SECURE_AUTH_SALT', 'z9g}[.vue`:aemB2[!|1!O9{(5QRi}cV UQ2,=0ylV5=(Iy`GM&ZXq7hn&aSe<<I' );
define( 'LOGGED_IN_SALT',   'DX3veYW4Y!WyEY<H%qWoXW|EV&|dQG{CI 6?{x($5uPZi@thaK3ME^G)AmCsWJ-,' );
define( 'NONCE_SALT',       '.Q<kk1i*rgjc#-=8w.EHS}Q;uO-nz8jy4f([hEG$iJf6k?5]J-mup5&Mby xp`R0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
