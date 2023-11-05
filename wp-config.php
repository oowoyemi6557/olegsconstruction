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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'Ywqw>BpRriNr/,Z%irA%ZxA~Sl?#?0QFBim!5-x<jZ3yKv<in&Llmw<FBBCX{f^J' );
define( 'SECURE_AUTH_KEY',  '__r1:lsE{hSr)PKq&b@UwcpvN)bN`(EuhSnqQOK-/Q3IU:smVqf`!,{} ZPaaX:5' );
define( 'LOGGED_IN_KEY',    ' ]sppBL$9mM$y2|h-g,]@,dxC+ymCSvF](_,5;Zk6@Tgv-7}7Zj=i6x5mT|GH~HF' );
define( 'NONCE_KEY',        'hl)i{WGV4&ZUt^W^_M+FR+fP6^FRev2iK/c5}W9 GVaYvk4**I$|Y^dXCN$|eHnN' );
define( 'AUTH_SALT',        's_e6xs.Vi.-go,&?qoy;hNwf6XCj{j;{Z(bFo%fV4JoPF|_%yR,lIut]wq+LY-y3' );
define( 'SECURE_AUTH_SALT', 'Lu4R[uB8g2yvqR0|;=1CdHlB,LMh3;h+}!]jtdbFx{8)8`PpRr5J81r}7.VkC*UH' );
define( 'LOGGED_IN_SALT',   'uQ ^vk*rH(h0m/K}]9[fT2-k+4}b`8uB3S6p3eX0lB102a[Ee1)qW`Ec/t7&}Y[f' );
define( 'NONCE_SALT',       '/ih|2Hw=#Rq{p#L:akx/g]kw>8_`US:<YLL!7BjV?} L3U4@5PaC7w{vh@yS[;8(' );

	@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
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
