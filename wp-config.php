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
define( 'DB_NAME', 'wpr' );

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
define( 'AUTH_KEY',         'Xz3MIFvZ/8@IvU3.876>ebcKu6HMj ova&+?pFGWiN>Pw1/PusV{Ad2ke*3PTB6O' );
define( 'SECURE_AUTH_KEY',  '{QR(wiVD>9~NG xi6MBsioXVQ0+h;0BP&M+55oHB:R1[[0_Yg=TTH`h#nb_iV]FW' );
define( 'LOGGED_IN_KEY',    ',^ ga d`h|0E@p&V@iEFl` 9+r Yt/GZaBno3wB-w+SLf=luI>~4]2%Jx&EK|?#4' );
define( 'NONCE_KEY',        '` =xlKnu)K34Hm=oFiuizujT}4?Yor7r_EU#69WDf_Rvj_S_gJxz%^(`j-6}wy$,' );
define( 'AUTH_SALT',        'c-yVZE#%L@M>>&Dhj}I|l,,{rO<{>&huIkj{x//CdBhcdI+7S&s`N~K;KdJJ-Kmo' );
define( 'SECURE_AUTH_SALT', '@rt$jU}q/l0-O<9XuRo* tco%jmpl2hp)Rq-pQe4.}XdYW(9FZx+AA~b%ioP{hIt' );
define( 'LOGGED_IN_SALT',   '?]` ,l4{bn-$GX.D#m,HszN`U]dmbL-Wz{-k&2uZA]}k]X7mfm<D@W@0;~EH V{{' );
define( 'NONCE_SALT',       'J=!~JV41!M$L-&T_7W<a9zA4*r,seq*Qqj@u]F*+^G]6UL49>mDx, TN /5:!$?~' );

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
