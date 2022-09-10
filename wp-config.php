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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet_wordpress' );

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
define( 'AUTH_KEY',         '~{B,L}bT-JUC3<g-wWy|eFF}d5]KMz,<KbM2E`P2it4[I^g5`M=VIjMm-:oj4bo*' );
define( 'SECURE_AUTH_KEY',  '3:,%Cl<=7G#8+zSF`<v sGMV@0CndT_~x;q{_a+/pPkP>Sgvt88%X7:4^bbV!Xl8' );
define( 'LOGGED_IN_KEY',    '%+ntZVr#E3jq`CM;RJ./I&~]Aj^ilVT]5r4hALJ-O}a6HIb#t`9qes3Vz*6vg-.H' );
define( 'NONCE_KEY',        'Y`Np2~et4FNg+{$U#,7hQ[yf9>tKhUu5e_p1=5fYRDIX)yhMH^4=GCaRO*]]0cYO' );
define( 'AUTH_SALT',        '%tKkx?iuELo(}hy7/88Y!z>f;U|=uZ/RYN6vDa(XZO*WDHa)NF*e`+=F&/Lk30$~' );
define( 'SECURE_AUTH_SALT', 'AW`~k1TGdaD0YQ>CKH>>$|S:y16[F:fV8hGaZ?j$+tJ%#yFV;I,{QWvT ^`.P;vG' );
define( 'LOGGED_IN_SALT',   '@/PrVsOXlt1h]lI,CPEi?y_5&bqIo 3Q6aQ&mP]# 4ufUzxyrrM<VBwn6plzI~cv' );
define( 'NONCE_SALT',       'J#[fa^@)9|-P=4ulBe60(4l4)yMxbXd~;.xd>tah7?gHF=_)tcw(/Hf1;nhzs02>' );

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
