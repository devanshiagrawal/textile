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
define( 'DB_NAME', 'textile' );

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
define( 'AUTH_KEY',         '/N]i#2=O)tpj@,n#j|NLjFaBS+YV-.xx?|Nv;k&eFf~=[<?%6@m`m(:a%VPk8zdV' );
define( 'SECURE_AUTH_KEY',  'Gy*R $Q*yXk60,cH8~7QJiOyhO5WT;.&K,?N)HUvIT8=V(c<2EQYF;;RB?-~ZM(l' );
define( 'LOGGED_IN_KEY',    'p!e,xTK|h+fArBnL9Gfvl,eK+x,r+ eJ}dfJi,mn#eh 9=>y{p9T7#|s/*o=4|PP' );
define( 'NONCE_KEY',        'H;@jFbeg3Cvq^(;LjYdhqv-Q}8RV>2+qiHf27eNs8LHODfy?ZFXVU/OsjvG3uK58' );
define( 'AUTH_SALT',        '&O }PD7eD6V0&dth)5(OTHTaLs]/@ZN9&pW!vdlO;}?!M_syA  $`v<U{WF*@XY@' );
define( 'SECURE_AUTH_SALT', 'NbfrM}2nl4PEVxbzaPZk`w &YmWUeu)N65;_:01<1q)R&sIOL11QW;msS;h/RiUb' );
define( 'LOGGED_IN_SALT',   'wz6/][2KP/X_Pz6oa:8%Ey]/kG1h(EMCcd=Ap}D^z]=R9$5h(Tm)Y+Xv =)W6_;Y' );
define( 'NONCE_SALT',       '3jcJ|>RM8ty^:Yc0!fLNW<MWG{n(6rMxk%RadCxxGZtXP5*^_P];IcBCQSi-L*1G' );

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
