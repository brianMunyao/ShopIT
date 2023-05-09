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
define( 'DB_NAME', 'shopit' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '+}h4USVW,Bt2tQS_kiNmukQG( d7ZkTDEh$oLg@]c,Mu23}{s9,KZ(PgX1j`H|=|' );
define( 'SECURE_AUTH_KEY',  ',9amE-aZ&[<#{w9C:|MC|0ljyZx)aB/OBn;f*&g-Q#l-}HI*qNTTJpm!hzM|f2|@' );
define( 'LOGGED_IN_KEY',    '@5,m.TOr 8_]Lonl}8@n8lI40E63cx2?JLBKPtu}@|,g2oSWJgjCl$&b<BEE&{{,' );
define( 'NONCE_KEY',        'H`VuoaT$|?4+p|G05%7Q[*sZ5]U@myIfrxer1Q jq$h`jt-nz<%pITt_`QagWgJg' );
define( 'AUTH_SALT',        'S|,F4Gim+I!XjjEm%O[7_L-Lqh5D.!{[MGl7uz,1 [UV,;E^vGwZoh*v6C`d[Qh)' );
define( 'SECURE_AUTH_SALT', '[~HC_?wu(59%J|D6zFwl(yWM&Yw(Q[HgLkFJEqt@G}T$U:dX7dIo#9Lk|~mu{:D%' );
define( 'LOGGED_IN_SALT',   'a)E9ihNsUiP73<@11#CwpHu:p>UVrin5c)wiv3|dH!}5R!&(u~LmaF,UR)F:)3 k' );
define( 'NONCE_SALT',       'Lh==)[>#&-/qR4T^*M>LQFsq0Ko.m8Zw`gS-F5> @@q_&!-6!?3-l1u/c1?a.cBO' );

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
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
