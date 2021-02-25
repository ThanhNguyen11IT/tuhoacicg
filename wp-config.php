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
define( 'DB_NAME', 'tuhoacicg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VaF&,?aPSFb1A#+ifl3KC}X/FQa2Bqj ##z*DQ3&5/5]CY%4lvHX0y^W-ee>JRWD' );
define( 'SECURE_AUTH_KEY',  'KlJG^oa`j!KQLC:vt/^!Ckw.cLP!o4-MFjSNP i{tzk$j|GBV:S>&5Z$ZsQ,B>#C' );
define( 'LOGGED_IN_KEY',    '}Rq?{E=b&%y`LyIh-%msP%C~K}};d&OxSe|ja%UA&PZg])*1y5`!,TJeqLVoU]e*' );
define( 'NONCE_KEY',        'ef@.#p|bI}^m iL %JBeRD5k(Q2T`&58#)-P)J#c_<E(_XB0I?(y0[O_L~2Rn,uW' );
define( 'AUTH_SALT',        'r!*d#;8RSAmJSi+L6/5P0+qfY5<B WJ)FJ}bz6cJ2d/V#f.  rv!vkN&D`@@AQwk' );
define( 'SECURE_AUTH_SALT', 'T`u%_L%/1X rD^ =D,h`w}vyrKQ7~|WWCBn)R<wrE6<uaChg~mCtv0d{7/&g/9nk' );
define( 'LOGGED_IN_SALT',   '!1FcB2#PDOC(Uy3^ZKT$*#TMk[Bywqi%cnAf~eo68M&oVap]n?*ke>e/gnj3?42|' );
define( 'NONCE_SALT',       'msauNYH@)r@wRN63s[hiGW[7dpnf8a[S#agsEnMQmUz_>(]6M(/~r{qlQ.eeDv{8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tuhoa_cicg';

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
