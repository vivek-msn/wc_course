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
define( 'DB_NAME', 'fancylab' );

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
define( 'AUTH_KEY',         'DGK[A0hy?b>eG0h,=i*EKutuCR%hrM?kBOTLcg^/GfMf+CJU;05B52vOLzU!cQHm' );
define( 'SECURE_AUTH_KEY',  '@3UCD+#@Y4SbBn=btfWjM>`Fz:UBu7|I {Ht]a%&{--<#eE#J}[}S`kJE,Mnfam[' );
define( 'LOGGED_IN_KEY',    'howvM0S)XDR3VCl_?u.CBj[UC<2a5#1/k*T(21!Z^0MFRow4]Xi{jZ3@*}%-{+RX' );
define( 'NONCE_KEY',        'a/2]c}Bc5@4mg7U@2A7u*T9GQYK+)d,yh^lO,ybx{t$V{+* :N{FG*>P_~|XSk*j' );
define( 'AUTH_SALT',        'q7`|:.y/cyC.N$Ou.(t*Gr{ADJ72%uN3v,94 Bqhf=.m7Zx<ePpsks^G/*H^PB0<' );
define( 'SECURE_AUTH_SALT', '7BJ+$Cre4nV%US+[H0g::)|7p1_^hUbl{,ykw&,r.E?Ytf6a`u#&0AC]7Kz]twNU' );
define( 'LOGGED_IN_SALT',   '{~[z4YE_D.I6/#R,s:p*qJioK5%)1da.9{Z-$KFB/(DU!jHD>C7J^`?vMSDCWNhW' );
define( 'NONCE_SALT',       'u]}A|EKjQ%]!]i?*_5v.a^B@[2r+ZO8tKPtb!>~T@To0lQY6b]il0z>K6|(NR=$X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wccourse_';

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
