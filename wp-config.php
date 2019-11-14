<?php
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
define( 'DB_NAME', 'wordpress_asdecoeur' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(Th:+J%~a4B.-|o]bsM;VMc)$fVVIK-3@BZye$>)[0%c,C=+(._fO/g;=5 TJfCI' );
define( 'SECURE_AUTH_KEY',  '/9-DI>/lag4/4_[NY*K]H]_w=hg?(?_=I_c|z60KD:Q,TRD-&o4;/Dn!c3I/nFlE' );
define( 'LOGGED_IN_KEY',    'c80i 6zL.T$0W7#F_mo9)4rf.>7r3cJ$X;5pVgkn1DVXD7M:616n`=gbeXeF%`!$' );
define( 'NONCE_KEY',        'ee9[{mQ4&OppI-z&2<eB0D*M%Y-:2Z:d5Lt|F,#gw)[iW#)p$[<%8$?],<Q)o{Mp' );
define( 'AUTH_SALT',        'OjEa>6{alpcX,u0Gb<S&IsL8#7K(&dc8WabG0e<ll`0ONdT7E!3I/v=aZ~]CU`vJ' );
define( 'SECURE_AUTH_SALT', '.)RWa#KU>(+1fB.aSDf<c~h[h2ry$j#=rr:b=geoJsk`;FN|J1&iZ>1ST84pGIGq' );
define( 'LOGGED_IN_SALT',   'x=Q[^XF.%#BwBXZbrH!-I6dyIM~MtB=[y>&Cs*ANhm:-$kQ?u=lPmva~1z5xP{z[' );
define( 'NONCE_SALT',       '`,kbxveD3 1p|J{3X/sWi^j<BmuW{S7CuB1(>={i4Y(yxcB<!b#4n!,Cy`H]?fJH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
