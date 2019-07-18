<?php
@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );

define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing_page_sample' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admindb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AEkVu/utCo:Fj!bT%u{no2(fwpu83~^?[w1[y`9zbxO2<hXnHt~>--Fr}xt#$tMI' );
define( 'SECURE_AUTH_KEY',  '+ryls$Z(rwXpJRr-7[P!@+/HA_+?X$jc-(8FCUqD/% Mbo}F&10Zh37$!Qf4b$J3' );
define( 'LOGGED_IN_KEY',    'Z!prv:[9@$8iNer3emCpt,Tu3NF`JKTUn Sl4E8f|t(5^vNnMa:St9(v{vogzRVp' );
define( 'NONCE_KEY',        'uAD|q`db:uvozp{Y3)wVTgN9x,D:ovbKCk<LR$!ar0.-<R];j[.4djC<%PRh|.I!' );
define( 'AUTH_SALT',        'bw%G<#@Zm9B#GtfJVYl  kO;p@jZP*KXb.2503 C-}Ztzd6d5[#M{m5b<koUPl!C' );
define( 'SECURE_AUTH_SALT', 'YLLs+2QoJTRtFF$T@^u/{2^2#@pv2jeOcj>4]mxRg-3b!(h*gAgaGYx&+M_SN}>v' );
define( 'LOGGED_IN_SALT',   '3LeHJd=b0@UJCv=m,Qa07*+*m4&}_Ru~=T/(aUXV9a<I[t_&%Q@,{.&J@EGC E}e' );
define( 'NONCE_SALT',       '_Tk63kP8>RBED&d=aU(TTR@N,U/5V&:#19Su0zK#wh<vT@/cR;C}|K2Ygiz,k0X#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
