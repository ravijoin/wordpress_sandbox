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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1~9b?n5&`MD-5,Iz%QPo1H(I$n4EhEbR?l4@^(Ql!E[zS_A=b9XNQ1)5y&noRf08' );
define( 'SECURE_AUTH_KEY',  '>8&m!A|+8wn}+Fb|qkFIgrh~u$3arAPQ7Z)(2.O*VbI3I3p8`=Y.bU.3@xcKuJb:' );
define( 'LOGGED_IN_KEY',    '3B/HpJFe4FpoEz:2$sm^{riXE0SD+eJ,-low`F~4^>QKrg9dSX.|yc#&TZKvt+/w' );
define( 'NONCE_KEY',        'kSWoh>Wkj8W[5sD{P[Z7S5:Ip.KFxN1mwY;=^gUc&E+T-&UEFD!J}&8T~F>kRS&j' );
define( 'AUTH_SALT',        '(P^|]!eF>T0=lpw(*F+~)s~Ku4EU`j$2&*?N*+:(bK.N&#6d/fp:=&?=&!C>W1lj' );
define( 'SECURE_AUTH_SALT', 'Z~qM/X|-=qR,@0%bbSPHbn-~:7]Y)r*E~)0p~8vFK9u~:Z}A,|zx(iIeWmTX88`f' );
define( 'LOGGED_IN_SALT',   ' Ah8~@KyJAxH6,b[.O,; 1_0EpVVu;S0tS!Mz!qih7Hdm1CTA2a8zG|odyCQ?zE_' );
define( 'NONCE_SALT',       '}aB:|H-d|eIo.@boI/vj@5Bp&TVt}=_(//BVIJ3qvD5ffRw%~F(*41?5S,SW87?4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
