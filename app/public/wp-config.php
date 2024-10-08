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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`#]mMvAQ#-kVHNjZ[LB>o|3tl^#9%cCum,gss-*?XYILY|}V;k1=4AHsijd!aWG?' );
define( 'SECURE_AUTH_KEY',   'ML0XS@. (DO<8[#2~^x</^c6f3NGWRw|N*yLJk(zZJ5JX312.rQ=-,R-;[r0)9UG' );
define( 'LOGGED_IN_KEY',     '{IOr>^(/~EZQ.Sz57f`GBOH4,bkCV`rNb[>10huok_s_@[/Nt)V#IjCM&Zfc~a&8' );
define( 'NONCE_KEY',         '#l<FcT0+z&6roYZ;UHf?/-#6sTaW6w=Jp6:YU_]9g!FVF5*[CZW6!C=J@=FVP>Ii' );
define( 'AUTH_SALT',         'yY{c6fZ2DKUa*TdAeF<|=kzdO46F3u-uV-CZ/.c6#iQkhp<z.0G*xC>5lg%-[>:/' );
define( 'SECURE_AUTH_SALT',  '`8Y+05@FErlw/>%->KnH/!Z0ASuz/h_2|LQv [_PKj#ngO~/1/p=`([kKI(YmH%U' );
define( 'LOGGED_IN_SALT',    '14<]U?1$sVXkLXdN1u,A!mXgN&g .~#WCHd-n2QI;?yEG}]U_S(?He/Hu%}@JLyC' );
define( 'NONCE_SALT',        ']:Qn]DCnCee/C6}TjPwNoB>w]^[Igf6;EG%C+-t8c9::_a~})11(+?gS^;O~[#Co' );
define( 'WP_CACHE_KEY_SALT', 'O+g?d3Dk`Ns9,tOnQpmFum>d7v#CgJc`n1t[XTs&@}lKx#Q 2pcMIuzZM_5R-9ov' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
