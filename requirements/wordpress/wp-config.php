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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'database_password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '`j$we]6D(h 8=nP*-6y_LhvVGo<^3Qw8&04vU|IKw,=Tx>pG;5DDsc-89ivJ-ft`' );
define( 'SECURE_AUTH_KEY',  'jf7e#Ki3r&LjbI|`9Z=PVU@?1vn}hqlW=,^1zNzelBJGER7?nTH__=V6zUg!cl?_' );
define( 'LOGGED_IN_KEY',    'A7c`NrK=nBcJ/n^u!D1:_]kFG&`<:s?SrfZteCrLC9`Pp=sK@_t&oguaKP=tkpn.' );
define( 'NONCE_KEY',        '@]`RkccOeZ{smQxJ?3XW]Oj3-tIt%^03n>{QD9[.|MtA~R/R[B%B$D6vM66ua?f:' );
define( 'AUTH_SALT',        'W_Sv??:s9%g=d$*V!JvStubM(,3F:{~.0}X x0`^~PBW,Q`!{u}u<,#J~u~B)X;Y' );
define( 'SECURE_AUTH_SALT', 'aiKEpi_{36W)D%EZlBnG~j#P&j/NciX=mxCj$QVKnJaPxp!**i!_H^ o?[w]g&3_' );
define( 'LOGGED_IN_SALT',   '1|#V.enfcc)l$]dCkHP41hXoX.rNUypauw;bz69K1ke*H5r$(KC|Czi~aW>Tw]BO' );
define( 'NONCE_SALT',       'p{*(IDmdU1y?r&E]$0YjtpkUFfo~4$RGBD,:k#~XlYbfuw&M{P*ycdn_L_#A}[@;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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