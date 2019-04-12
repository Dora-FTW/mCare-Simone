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

/* Dette muliggør at jeg kan hente temaer og plugins på localhost
define("FS_METHOD","direct"); KUN MAC!*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

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
define( 'AUTH_KEY',         'Nq>dq;$$0E-;yg~bGo)<,I|SL29f,dj2Pwt==/bjv`6*k%M6cCi{~h5=2hiJ0dr@' );
define( 'SECURE_AUTH_KEY',  'l.ap@yE`}SQDGcjqW*P*{7ZZ67Z1N@q=#tmkVLNmkg_pBUt;n,s5B7v/F1eE{S&A' );
define( 'LOGGED_IN_KEY',    'H %|E^k-UE;Lbl~rMCT9^cll&FYl{7v>3Yuv/[nbDnS?8OyLd<).$ke@H ULH@E>' );
define( 'NONCE_KEY',        'GF1)|*mO%=ANZyTv7U+PzNy#o}DAd/,mU)4{Q0I[Qs^T8o`;Ie.hQb+/Sf7(P#U9' );
define( 'AUTH_SALT',        'Y)C}452V?SM&P/LY{dwj!a^A,1q{xk)t-Xe<OyAi8%P9?TEaDzEYR vXX=wOPhGB' );
define( 'SECURE_AUTH_SALT', ']`Omg]&;Xpy6_:GL1Up;!?;&C+$*upf <+Om{jtN[clY;~`&_G7W,Pv>2q8:R^-0' );
define( 'LOGGED_IN_SALT',   ')T92&D?J1BivvhJjX>ERW{~O*1Cf_J<%{*[S.[f;2Ig!RF>OgnGLc/Bz{5 i:5KL' );
define( 'NONCE_SALT',       'i-LqvYKOp4p-dcu{l{m&<(Jd}SP>yTN0S*jww dz:e~R hFt{&ZL[{cjriw!Okz*' );

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
