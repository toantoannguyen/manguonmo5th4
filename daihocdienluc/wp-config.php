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
define( 'DB_NAME', 'daihocdienluc' );

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
define( 'AUTH_KEY',         'Fa-Y:56XW@6d&rwq1*QUTXEjV6eY2b61hlQYetK-~L=1FTFKSh5BD;P!pL!t-N5u' );
define( 'SECURE_AUTH_KEY',  'yqDp9>~Z0c6p+xPMeqxt^[36F!dBB~`jin~{WG>PaW*/XUs%:4a99//^g0#]X%[a' );
define( 'LOGGED_IN_KEY',    'GcU9%Yi==[aL&<6C$rBD:OhVhxxDw;K|rBe_BY]2[A/068sE*B^h2$#Kcm3ui$t0' );
define( 'NONCE_KEY',        'A=>6^Ah^[b}LqRfxo(*7}n+}WL]&@uyyN];Gg=HS{v[J[%1KtCG06J~2j&Fl4 Y:' );
define( 'AUTH_SALT',        ' NhRG7PO}#}0/myX!G7LF{&C6C0nS!v-PQkmhV&WtG-g%Js!r5LAOi||,*6ELZRf' );
define( 'SECURE_AUTH_SALT', 'yQ=Jp[v.;e{3{7<|a++ H;-E02OR7G#r#nxPpqiUmZxTt>{w8].<3M,q{Ev3eESp' );
define( 'LOGGED_IN_SALT',   '8V;Dd%-DUi47+[3<4}Sh?Bu,sK:4T{qpjipC|CbGS*e6QI01.n@/S @R%Bhzw)g%' );
define( 'NONCE_SALT',       'vM`k0G iB.xnNBhEo@4Tuvz6X$Am0`4<nI<lcd*U7ue6+kd^zG2o M-Je`T-s$kP' );

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
