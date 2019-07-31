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
define( 'DB_NAME', 'bladhzhw_appointments' );

/** MySQL database username */
define( 'DB_USER', 'bladhzhw_octane' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Acid3140266' );

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
define( 'AUTH_KEY',         'V+mFaz;IX(?}Q%LO)N-g zZ&@958<of6Mn>cj$fL 42XEusIi[p+$y7D8abUwHSn' );
define( 'SECURE_AUTH_KEY',  'vxb9~xdFaQV8S*RhRY=`m|wz:-M KK_H)fPEF0qFvh}swgou_n&w%Y~Z`J7NAnD^' );
define( 'LOGGED_IN_KEY',    'V}2zF$j_R(@>tX>tiSJ]g$}KSxtseE5Rp{%(8b0]G:`D:rx|16&y~,NXMC!w<_nf' );
define( 'NONCE_KEY',        '(X<3f)0T/m%;s8.q}Q022doEzY1#*]:AkG+!6wj)SE4:]%g^E|sk$n^yC`U CkEx' );
define( 'AUTH_SALT',        'EPk)s~(BRba54<osjTKbXC)1%A0d}uC(3#WUK;%lv_E$wx:!0k(Z]}akp54rLhPh' );
define( 'SECURE_AUTH_SALT', '`90|yp}CQ8/](zb4{6ruk(5Xc1D0,?&QIYOJ2[}DAgJjcvPbmGk[Uj`@gR&E0^ir' );
define( 'LOGGED_IN_SALT',   '(If(*WU{atOO_@#Wf(U<fRI~rT[UvE*VLwO.*hIOuR1p@ff*_7{}fqZKL:zTR^cn' );
define( 'NONCE_SALT',       'NBVqA5[Ow4n|/*[o0!z4~F-86~Qf5L_n t16>;%SQx;yAY7H0s)mN/z5*MxHneUz' );

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
