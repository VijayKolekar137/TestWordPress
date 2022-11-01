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
define( 'DB_NAME', 'web' );

/** Database username */
define( 'DB_USER', 'vijay' );

/** Database password */
define( 'DB_PASSWORD', 'pass246' );

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
define( 'AUTH_KEY',         '{Xn~W|eok`$=nI[,_]T`wLFu6jN:*I={Ouz=!/jqd+HVo4!|qfOEEb$8NBv]>)g5' );
define( 'SECURE_AUTH_KEY',  '7v,%}]I{qGE0G5A`W-l5OkFO%I8i:SFW?f|E8=2XS%.NVYw=tw4~^cZ1|{d-qh]6' );
define( 'LOGGED_IN_KEY',    'IJ%[cmm}_0g;mK674HuPKyBCG7d;umFwNSV<e:c(Hh.jJR?w57(OA,zu!f:Nn)tY' );
define( 'NONCE_KEY',        'Jg>l[~M1Qb#DONg3BxqlLtxfql]c!sGiA:rj|(>r>eX5_#7<@{agCH1pjvy;.%6b' );
define( 'AUTH_SALT',        '4mz3Fd#9,).$82s=.56P(yUO@BfK Wf3J4,-/qt%}O73tQz,(E7dBH`d9f2{jlCA' );
define( 'SECURE_AUTH_SALT', 'b:^9$&`OBf3;}K7Pr!O6[&U_I=)Z~[O#ep^i+ee/Pwp {TcN+f:Xx -]w5uFA:)~' );
define( 'LOGGED_IN_SALT',   '?!CMgob{-|cdIyo5_wM6{dO$BGT+pq_4cv+eKn%-TCO2fo.gcj.E(X{?2v4)Oku[' );
define( 'NONCE_SALT',       ' Wr0?Wh:##OyL)AIvn`#Z25=N+}0Y^OCKB=yW}x`=DsQs|C7&f(Kw*/AQ$4M[MpU' );

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
