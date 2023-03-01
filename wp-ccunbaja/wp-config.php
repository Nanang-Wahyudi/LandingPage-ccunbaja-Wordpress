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
define( 'DB_NAME', 'wp_ccunbaja' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Nanang#220503' );

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
define( 'AUTH_KEY',         '#x3F3=CAK2L5mmM5FwlaSFqnPSk^{s7Gv7Drw}ArGeqw~%eOUK,@v=HSie8[/0Ic' );
define( 'SECURE_AUTH_KEY',  't]p{p`ouuX&n>f*wy]R1AiwDsS%)|S3zj,F#Sbx7Wn4 4`Y9WcuP.^n=W_l/7KXv' );
define( 'LOGGED_IN_KEY',    'GM-MfjkW(e!Nyyqn%.;V(ZTCc]{0uZJ$Q4lY94M4;3;E-{tpq:P7Oz%{OvR;{^;:' );
define( 'NONCE_KEY',        'US+Uz|[U#}XUNU:W`cH$qWl$s)T:|fu|J/ef;,i*ypf>58s[HbG_5/!*VQ3p@?}B' );
define( 'AUTH_SALT',        'JypUT`wUBn%i?SsK@D1{ct)qxg&l#.r1x%7S7+P5rP/bn$1tnVdaU5z&a^9T{gOP' );
define( 'SECURE_AUTH_SALT', '*aq<EFfDN_/|HohF{%0/C-s}9]XdD}bWwPmx{g[8JG7bfNn&;c;Vq)Wn*(Tu5+ZA' );
define( 'LOGGED_IN_SALT',   '8!77%8q;)YsDhx@BhQJi#9#g77>R3`b%h=-P2.C]-b,VxF>R.#.S8%{*zvL[g`1i' );
define( 'NONCE_SALT',       'o,9R%C#Kh1s-02AFD04XnUz>F*8i~*cVDGY[BPxm6A*Lk031yNBK/vSTHArhe iv' );

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
