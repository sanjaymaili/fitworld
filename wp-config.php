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
define( 'AUTH_KEY',          'h;FluW):o9q;P?~t<;^2X4x,vt(7?cMIpLmdO-<@1u-d+&?q.(Auq~ W0)10iV-T' );
define( 'SECURE_AUTH_KEY',   'kxi!PhC84=5hhXkJW%x6,{ls:v>Hd/f]HHO_m/D{Q51i_s#.QH(E([ENcfreqG3b' );
define( 'LOGGED_IN_KEY',     '^ybV#U7D)ox],3r)1DIP{Te#r)L=HM/AR1V*cT@pn!npTB1h}m$}j?Di=hf7LaEe' );
define( 'NONCE_KEY',         'j(J%)*sZubzYpSa(+WP^cqLkw(m:;cB~R&VnQke:yJ?)#C#y<%+~^Bnmlq!O}^ 0' );
define( 'AUTH_SALT',         'dpLEZw+5qU|HCQ=aRE`[DqV.$S)l,|:L~SfL,A(C++(2S@:p<u*WuP{tkOd%d 97' );
define( 'SECURE_AUTH_SALT',  '9)(lT*8P%hd2{fmS8i] ]MJ41nQ-Mn3fNlLB%2UZ%{xjm0HHkb6|XK<.nXetQTZY' );
define( 'LOGGED_IN_SALT',    'i^blv`Ui^WR/,<wCY_L24WuZOi;MQD8mj;ZmLZdraJ37~=Jc` L0efnMeirW]G+X' );
define( 'NONCE_SALT',        'c!d#Y|EQOwVARjqy/2KtXT2oL/QMkR@# P@-xBz54{?R,&<z]&gg~Q2mi 0{LSnO' );
define( 'WP_CACHE_KEY_SALT', ']eJs;B=gb&Y/i_;1_ur{}AsaOF5`y]d)_%>D6V1!,YTRuvaI<lAfN_4fDA$SV~R3' );


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
