<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'nomadsun' );

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
define( 'AUTH_KEY',         'E~$.&Zpdw8BqKu2m*|CM<j~]uXt,<0?BH0Od(A+{t74z0YEm}_P@{3Xz?9!`C9iP' );
define( 'SECURE_AUTH_KEY',  '{=k_-=5^}IgzRqi!~t3OdA4>F/6+3+/++4|!9SfV{%f:2w^AJm/14V54S>Ju*SpO' );
define( 'LOGGED_IN_KEY',    'jz89|ouMexHM]:%=Iv/=V4EdQ8jZIvxoB]nWHCjQw5Q_1|`wdD/<2#A| @_UZEzg' );
define( 'NONCE_KEY',        '>+b~RwE>=YO-[y&L,@ZU8xRiHTO5A?P=+v4r#IeCKnBhKX~M6`l!-q3UK~,;jnm(' );
define( 'AUTH_SALT',        'cZy).;&iF/RGdTbFzz;z/|STKe#2Zai6)AO:Y9`;0$;4(K/lJi;9P]pPHA&vRwkp' );
define( 'SECURE_AUTH_SALT', '.JCqh;PIB(WA{&rbZgAKW3cI5Ke:>pCek;*V4|TE[/WHCRw*(W9gbk3m)Gybi2ru' );
define( 'LOGGED_IN_SALT',   'RX~RC|<,6~]5[2lr0LxC<W6o5p-4/JIQitF1r~hc5Qa-n{pfn#n1}djSow^^EKD`' );
define( 'NONCE_SALT',       ':-6B_LnyBS{wO*?a*-EBELhCj`J;9~[)ipHzLn?:.{c}iOluK#B@eiV^Zg=Bkh#/' );

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
