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
define( 'DB_NAME', 'smc' );

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
define( 'AUTH_KEY',         'xoI~r;irGWB>Xv~p6HL4_|lSgry%8f-xNhN*DhyIW~MK$0kbzN/!`1@+8U,;~Y~q' );
define( 'SECURE_AUTH_KEY',  'Z_wV2%tDGySZ?8nlvgx$GvJ1*btj>]6*9Fq9tS-d1=X=fN0s0u643S?8WoJGa)6[' );
define( 'LOGGED_IN_KEY',    'd<r y-rKQByC9@./Co>!hkZP2dmp6lc[ub+l*Hv1K>xjO(I*),?3razhx<g>]nG%' );
define( 'NONCE_KEY',        '.OY!;C<Y+%b.FU3&}{sV,UyF:6PvQq5472T~V_gpgG,)<-`g(iq`:w/}kx{Hg-]T' );
define( 'AUTH_SALT',        '0y1eN9[DQU{J~|ZXAts{xq~TwCRB]Xke}m`ANOP:V:J}YqxTGrk?l}GP?7Ury[*j' );
define( 'SECURE_AUTH_SALT', 'I[A+EF<ed0k6TIu 2T`^[TO> O`%6kS&`9(IAEG?U*@h^&~eqhYe-mc E.gf~lR>' );
define( 'LOGGED_IN_SALT',   'e~=m)c8V527c[luX(9nK!bUE$yR1 |sI6k=TR?Hjq(V![4t~kozVITE&_,UBWs6@' );
define( 'NONCE_SALT',       '.wIk-?I335rSoZ/ON(1kM=q.J.4lc`}}>00hkDos9evE8Z:)=S@8 uZTd,1 =h1)' );

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
