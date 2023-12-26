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
define( 'DB_NAME', 'basededatos' );

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
define( 'AUTH_KEY',         '#`M?1wJ4I]p{JIT}E:A@)x<-WRw*P1d&2&Gh.]6GBM(XVTJ=-|gL*0DtXoO$Q7jj' );
define( 'SECURE_AUTH_KEY',  'X[A3PW01=ffJrJYZrdCK<Za|Wd=9`%U1b4pcP0>SP4kv*MUiJb$Q)%TytpH-9t4>' );
define( 'LOGGED_IN_KEY',    'A]=GQW<F&DQ*HJ}<,WS;?4;55) ZSoP*4:;6:vEl8DU1p}Xg13ogF`%4T$9zI^Ww' );
define( 'NONCE_KEY',        'AbL{9dM9?LN8vDjeG{Y]fiX3/^kK;_wF-b6^W5o2y[NuHBwuD F.u4GUJZNVK@Ph' );
define( 'AUTH_SALT',        '|nc+wz.I2efj74F]UqD:oR8W3>fqg_l/|XpD99H[n[Y8%g:aV&Yx8(u4?E)P,xdI' );
define( 'SECURE_AUTH_SALT', 'eQ@>$Pg%(t.%QTQG1nMUGJSeIXMkxlXJJ|G#Y7rzNI1k8_(YL`La4Mp<V;5,Y7g|' );
define( 'LOGGED_IN_SALT',   'h*+`3?z)DnSFnUdN[d{]b,rO,6ywCI3Gh3f&?S2MgM9Tj67LeT_Jh^vUFM~lv!{p' );
define( 'NONCE_SALT',       '+m6=9%5FQy-h.F4,92onZJbTK.>ymYugHeSpsx;R+pV7N`4tq#rm3X5&-4: $2`]' );

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
