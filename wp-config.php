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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '#RI6_r)#cqVpCqYT/5Vz5TE0Ow<:Gf:B1n~oQ1qIKMm~4_aIe}ox$kLiAaDqLVm6' );
define( 'SECURE_AUTH_KEY',  'ql:D_m$CVSz$ET[inC1Cvw(@7?M*{EJ~c0Ytdo`&8hJoHb!}zC[THUZKtfI(^y5t' );
define( 'LOGGED_IN_KEY',    '~QaVu7062Exs*{qxf?!?>wV@.li1bT_qGtEAbe:1><M#`+Dqc5pqWc2*$CRX+CYW' );
define( 'NONCE_KEY',        'ZAgcixHy%^x6m9zn?Ol_!sWARYS@GEp1*Nr|:aA+Tv{ErC@0Bm[x<B3AK]F!4#GU' );
define( 'AUTH_SALT',        '~PT|hEdFyzDmq8M6$K)R#h`!o=nDI/2@yQg6B,o4YpIP5:Yp,[W2q8BziZC4_{L!' );
define( 'SECURE_AUTH_SALT', '0s#B&,%4M7h?D=/U~1)%i<}3keJnD)r#9(H?#SF1CCGuk.v+aOe;U#[7}x#Z6&Ac' );
define( 'LOGGED_IN_SALT',   'Nq$Lk/~qx>d_8k[$QJ}i$H>QIlp cW1h#Y>(z6O&$DO{kjumlYR9FxuNUj`bWi(u' );
define( 'NONCE_SALT',       'Y$>kIPD+EGuUve#JPI2*TXp-1L}H0e_b9|;+mn7PZNLKyDDAwI(%~YraK5WhF@=$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p';

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
