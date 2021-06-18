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
define( 'DB_NAME', 'wp_cbsite' );

/** MySQL database username */
define( 'DB_USER', 'imamul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ikoyan52642' );

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
define( 'AUTH_KEY',         'zI`-4! g.*s4WXO]^G:NCu;@u62-@Ez nQpH4iHRD[2pu)_,w&[qU0c|}<j9TFZe' );
define( 'SECURE_AUTH_KEY',  '[SHWYUExq.-VfA{0z+l(?Z}~.smxBK:Y]mhrw8mN+~5}e#Rzm488B3D$HI]( >tv' );
define( 'LOGGED_IN_KEY',    'mC_?EY#]OI,Pt|%m`N/8ZSwljD+QUMeO35%4v!H<Pf~))Gj2l->c=?(qgiDcgZ+V' );
define( 'NONCE_KEY',        '_Cz44~bIVJJP72x}LmZi|}Dg>[}1q{<Y[wu^5~lV~o$/b4SXA>/q=-G5rFUyJc-)' );
define( 'AUTH_SALT',        '9;NZ{K^nG?7klZ&4,22Q(T~`|+G(:T<&r(-p#}RtKUP?zodA~q6NJ1fWRe,}oBAT' );
define( 'SECURE_AUTH_SALT', 'tD``hzu+w_>F[oUS(EOhzmj:} GP~c|0:B-IB.dXA?>1JvITEh&Lc*&x!*Exc2^g' );
define( 'LOGGED_IN_SALT',   ':/{?)u:ROt^ AZx0imXcCfB[Y^FvcOnbC @M_@eYl:oMHak BCY&-sGwGztWRX L' );
define( 'NONCE_SALT',       '1;GFyMI-(gH;W7O0zt_]}a9#qV/IWh5/@k&K6AkU,<do/mkQiO9.*CuQk-.+i];W' );

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
