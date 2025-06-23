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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rashed' );

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
define( 'AUTH_KEY',         ' vIso:aaN6(u^<-sk;QMt*t_fX9_>fTca<bhnc]&xG9Jjqg3p.2[d)*<bl!PHu,P' );
define( 'SECURE_AUTH_KEY',  'S]]4B8,~I-c<7l*A-1q%^fkWEY(SX?ju>&>,tXB<jc? !yF1SpS]*M+K45(q[x~;' );
define( 'LOGGED_IN_KEY',    'Q4AXAOz.QD$XDBF^3-Q=le(iqv_=[W_nUHXe$W&SBBbsyJ^t#{Z:NLq|5A%N5hnV' );
define( 'NONCE_KEY',        '@,U@od0?f9j?jg>Wc7(09#^0l@j0Q9*D`&1lJu#?eUiocV(d-34xq?{k{p0CI|*^' );
define( 'AUTH_SALT',        'XbLemkB<hV69HqtHcS&w{$>xK&h#9y.XF/kf;kjf@8-SJU$0zz`0r^:+*iu(Kr|Y' );
define( 'SECURE_AUTH_SALT', '=@LDBL>9J;mW,b+IDf^[Q(BlyF<a}$uAD#ho&C7X-Rpe`mD*F_lL*|I%/pitHw>x' );
define( 'LOGGED_IN_SALT',   '(-OQ~q=gGn-&GfF(`h~W.#8=d!Kc6a C}B%iDM|}PJf>84fChX7odBqV.NuQ@0Gv' );
define( 'NONCE_SALT',       '#lcs}w7jffUf{(oBF;C M334zQIb1vdn|T]K;W8f5crgjogbf+y)|A,=MGGYT6O;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
