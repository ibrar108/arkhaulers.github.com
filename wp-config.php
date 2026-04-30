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
define( 'DB_NAME', 'ArkHaulers' );

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
define( 'AUTH_KEY',         '~zgd_oaWpCj5.N]02+|HmwXKK1RV0!oPiMQ]@vo|SoGj3aWA/zeaOpt]M2j3yV_3' );
define( 'SECURE_AUTH_KEY',  'RSc//=<I;O;#A~l>KZpm.dIsh=aTssZ6IDEBw^TA%K(N2$ 8{`JCBFH*kju.|J;G' );
define( 'LOGGED_IN_KEY',    '5htD1Jd+BK[R;47^EdK:,DwdYEtL{tx9QEE).gqf,?dDeO&G,$T/b[r,Acz?ugs|' );
define( 'NONCE_KEY',        '0Zh#G XWJFMKe6&p^bwdOa v~zSPljocY!:cYo5?1a}/W_8.m1fhk iU5P3xA8qs' );
define( 'AUTH_SALT',        'UtLuIfAX(<&1];E+-@DY71j0q[#7G;Jy9xAtFC.}Et`_A3}a_jQ6GEYCK:%URXbC' );
define( 'SECURE_AUTH_SALT', 'o?g?b54dnDBXybQqsvXi`LBk~QA&-?1-/k$[~LUS@Q,/mTkuedJqWvG}zA;Mq;`.' );
define( 'LOGGED_IN_SALT',   '4pSgJ[`Hlof,&A1;jT[wP>j!n#iVNgw?&$tBi~l<.k_*!&ULM!ka@%-@faRb3uIq' );
define( 'NONCE_SALT',       '|^t{D[-7Dm)5fpl]Bqg^B=S)/$WzD]F+S<W0~sYNV>dn+#$pD3F7 c`+wvxvPuyC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
