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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'd7zUi$hU&=0Ci@bV`fKq=8^Eeh3`R<^Q^2ssS$0H%|m4q]}d2DPI~Z5f}/Vxkrt(' );
define( 'SECURE_AUTH_KEY',  '43V?@XlxVPxiw7ylqLiucbsWC*pCs$gEpO*lw[&`d`WCR@Q<Sy[9b@R6x5?5t30g' );
define( 'LOGGED_IN_KEY',    '1(bhJOjQfEvr}Lx>-/=mfO[2bK5Tf9yaR7c,hq:89($<v/;=FQ(tB[wtT~&E`Skj' );
define( 'NONCE_KEY',        '`P6TJ.ER*qoLd5OD[@5rf&;g{zP3TtP)|H>F}_mA?}i7p>!e7$R,$R1wLx$Y:x)4' );
define( 'AUTH_SALT',        ']mp )KaM6(/!$b2REr@cRRmS4D7=r#LNb)5XAs~Ze:w^jl4?wa{k3`Rx?p3/aW:f' );
define( 'SECURE_AUTH_SALT', 'x%<J@}:p^>^SQW+Im<A+n_{W;9J/EahV/V|Dyn$;{_(3ZB_6zeL/(>.%>`9zTW&k' );
define( 'LOGGED_IN_SALT',   '}J+E(eJ,oa9?-.wr>yVVU?r5:!t*LB~goS$u1{|X}}wUvMj&rZ=@GLmuxw8m]8$m' );
define( 'NONCE_SALT',       'rfjBR/p%%]^,H!eo;I!Y*z-=J<7o$/lcnrctx),o:NSX=E+$ho%)wb1$lH_??dQK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woocommerce_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
