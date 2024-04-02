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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bebe' );

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
define( 'AUTH_KEY',         'Vb6fOvS^4!eMe8a@siyeB*S}T_thvn*mc.G}@_}@m16Ng16][K8u~p6J*3<Tih+[' );
define( 'SECURE_AUTH_KEY',  ')Q%gS;E3E8m!5x7jR5>JT6_lLjq[L&kvu7:_z?B?Lwgr]1l:)OC/nMK[O1.mRG7.' );
define( 'LOGGED_IN_KEY',    '+(E2_*sN;vl ;,{6P=f(%w8lUK3o-Dv!v4#*Fg[g~[H<_:Z:0Pkho(#8&W5q)BQe' );
define( 'NONCE_KEY',        'GYYG+nEsf)<ZhrQrs<Uh.;$^K2?|I|gw;rW/NR-9.2FT;XEA)tYu=fx.?yPzMsZ7' );
define( 'AUTH_SALT',        'T9pz1a|:SvrkzSF*pX46^}X41.!ez[>Ns(/OaRk~a/A @M w1>zwv:xR=?p2wJCm' );
define( 'SECURE_AUTH_SALT', 'T|`V.!6!4@D2hq~1mM9B~~$WXX(D K-iIx65](XDihw@D;sYs({hqr[wI@]+}uY_' );
define( 'LOGGED_IN_SALT',   'dgos7}&>|[<x CkdIRclYTA`?GvoHXZWa52Fb.=v~b#-SLS[K,0G4i?. :TyctOn' );
define( 'NONCE_SALT',       '>ul)[L4dEB{d(cd FFEZwNP?n#uyToHtNI}x5Tz_~3vI7fmilQ1r|T82p3W$xd8R' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
