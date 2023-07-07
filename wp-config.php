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
define( 'DB_NAME', 'db_wordpress_2023' );

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

//define('WP_HOME', 'http://seocar.local');
//define('WP_SITEURL', 'http://seocar.local');
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
define( 'AUTH_KEY',         'xjvnH<,?jxrho-,8DNh/hT:R e;TkBp#U|f}_KQ6;JFteck;fui+]FyYGKG;HmA+' );
define( 'SECURE_AUTH_KEY',  '4 :Lv%{#[=!aAi]HpwY$?*Tj:8`Rs#8msrS+Zu5oKGMj]p_N_)_~kG>abEkK>FH-' );
define( 'LOGGED_IN_KEY',    '_#/iYJ[-zi/+10,,xd9,PX5N+%-_BR)?0pna F]>p:gV+,-lX7F&Q_yQst(!|_o6' );
define( 'NONCE_KEY',        'gv5]X2M[@S$xM<RivcxyLl|xNs_dCR_b%.`A/eYwvu_|qK|l`NVQ?@X=@3(,&#,Z' );
define( 'AUTH_SALT',        '=HF;W>Q$5DJyg:d(<El(3ud*fD=P;F4d :m1:/nJe2|iuj6O@>gd F^tZ]JHjcf|' );
define( 'SECURE_AUTH_SALT', '+{e5T14.=-dKvjf{aWWca-M&5R&H-Iz:Qu|Vkm6-^T[<A+5d7Me}hZ_4p_YDh6SY' );
define( 'LOGGED_IN_SALT',   'E,mC;X9KI{Lnda2>%e?X|RPT!tw%%yZ7(|O[v0B|V?2JW801U+{gcuZ}-6Q2C4k=' );
define( 'NONCE_SALT',       'P]Z$DaVzRBa9O{v (ls(>.@Y4r|f_b,U6)M|qq4jus9WK.`tZ)>+{jR#_4wl{haM' );

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
