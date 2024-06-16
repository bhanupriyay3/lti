<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'lti_screen-root' );

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
define( 'AUTH_KEY',         'bQ1zu6s)&(.v5ohj1 2K8.z``7aEc#7k<lO5.#k=?uZZ6n5=,Rm(6V(L:w^0j:%a' );
define( 'SECURE_AUTH_KEY',  '-y|Yqv.4dYpNUfLgSqoN/#LiXp8UfazYj)zErQ,ul.dg5gt*PjT]@v>[78W?GqJ/' );
define( 'LOGGED_IN_KEY',    '(n=W5Ug/Ljm~F>T>{i_{N><h*+/9xG|_ZJef4*+6:,#I!8qi@OZ`E{3~l A!r82N' );
define( 'NONCE_KEY',        '_V_U_ Y=e8X%Y(Rq+BpTrvs[41w8+#P|xNQ?SwBu{lpUCU&1`y-E>!o|d:m),yCi' );
define( 'AUTH_SALT',        'F%LIc8H83$l/+W{`l(rX%?B[9&Z!j)MNwvVPwa?LI[Y=[NKG_wh%1?6W?T+AiE![' );
define( 'SECURE_AUTH_SALT', 'J_?NRM|e1X_6?DFc6(pW:c&RfV$<fa/bCAOW&:Udj^L|zC+r.LW*VA9ncE#T+GQE' );
define( 'LOGGED_IN_SALT',   'I6cseeZGHN)d+^~VU@M<LD&Q-S(R;,&vI)*iEC g4Skftp4Oc(C66YJNf~P9bz]_' );
define( 'NONCE_SALT',       ';CP2WVrQFXK~l$s9Lvf)N.JL{I{u$.a5D}K9l^`2dm[[;3BC^C4c>#I}y9}@!Yu%' );

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
