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
define( 'DB_NAME', 'DEB' );

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
define( 'AUTH_KEY',         '$k1dFqb>rjb`0r?As8C}18O}{&p{#q8M9K.%;077X_-1hD{dTbeps|p^n00/]}-9' );
define( 'SECURE_AUTH_KEY',  '&b9v<RxdWsa ^R=lBvZjNA(,u+(4TF/!-Xbs$kQ=[#}FR *no?< `:?A_,zmv:kS' );
define( 'LOGGED_IN_KEY',    'LL&GQbi}_,5oAm5;;b%DJoKpV!?im[E-GtJwLSFmBpNGI|ICqACS<l,*zcof2^o$' );
define( 'NONCE_KEY',        'R~6l0XJVKea:Arfd|Z#`[g=g^.Io@S0dA QMLW1JM.9MDP%z9O_?%&n,^q:_[.GA' );
define( 'AUTH_SALT',        '-3~ehvz{,SE$R/H.o.]#*~4Z~jA<kmA;L<1.eYkBKJUCu7aCzB)csoNRJW{lTn-u' );
define( 'SECURE_AUTH_SALT', 'm%USymcx?ZPr@xW5U)Lw,q$cuUc*uJvS%l`9$cgnHrLvOZCJi(agJ(IA9BbYCut?' );
define( 'LOGGED_IN_SALT',   '{i5F$j*?AJ]xO~]NBRU~,a-sXY3={8m>O,<X1_z9GzwLqnRnx]5uxR#3VWk+_p&J' );
define( 'NONCE_SALT',       'Z 2SDkU|X:.)<>,xUAmsdc^YS.6_s}e]2eRlOEOA& YBMI.%_QD^vd7E?=Ke/vS/' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
