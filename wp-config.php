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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         ',$K;>_`MO4cH~XH.|hWRk:g]IXG&8Z=Vb4;4L(eyPQ>aA*$5VD[e&eQzo7^H)tX,' );
define( 'SECURE_AUTH_KEY',  'dHd9]f(XEGP67*(L[|*9F3Bz+[$w8zTFL&tSJc7dqLS)NRy6JNc{Umj,Yb*<IvHJ' );
define( 'LOGGED_IN_KEY',    '?rQ>NWqRt1PV4}=~>[9L[O`uG_O1-x/c#Z$`<USBlw99J7n1Jutc<)nm^(bvsFoV' );
define( 'NONCE_KEY',        'Cu1klJa~27!wL{3uNp;z6I~M3J^sq%7`J/^7SL6fJMhlL7*#s)JBvjwg%|@>+aP<' );
define( 'AUTH_SALT',        'JJqS&iN|?(+o??$c-<7]IauAC~Rh3/lZXc}YY2a.2c%8B0QM2cVZ}1}P1uSzi(cV' );
define( 'SECURE_AUTH_SALT', '[u>SzlhN!<V9UqOSqe/hlE-RUa3nzX+T>3Xr.GbBt0&O5a7AB<|S%#sI26O#NkmN' );
define( 'LOGGED_IN_SALT',   '!zqYH7C=~EIP8To%pwLnWhJudb>t[ApGX2f,:&Je8D,`b{J!3bSY/Co)Q:@C7z18' );
define( 'NONCE_SALT',       '0DLb|gfV{k>.n-bu NY42^6=f%VloD?QbIA.P-R>O09h;#2uGyA @_8vAozzEE@W' );

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
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
