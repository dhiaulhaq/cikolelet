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
define( 'DB_NAME', 'cikolelet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qvaK.*n&<Rx&]yy+rA+WVY20_S404ylUa:R;y}byLtaU,UwQU)mm$~,P!!qt1etk' );
define( 'SECURE_AUTH_KEY',  'Wr;@3k2ZEA!M-hR[s^a20:yt-P<kq2Phc?dim>x/|,JsVOxqvXqAfj~aN$ EjJ^q' );
define( 'LOGGED_IN_KEY',    'UXQ:,q%m`n[`A8JI-M{B*@_F/mQ^e.Fp3_UW1]fx)+=]o@qbDY_OvvxLGPwTcq)j' );
define( 'NONCE_KEY',        ':p-];#D3`.}KL@1LS:xgB#P6J0F#^(g|NgB,#:?|,_(8?9f a]Z/&<_](ab1 kLp' );
define( 'AUTH_SALT',        'OhJn3/wr,rI@*TG9~v&wWmgV64QmGa*mA+s^P7=p`~(__GH<AY]c/u}D1j0:kCXh' );
define( 'SECURE_AUTH_SALT', '#BtU oqJv$)gUH-uVVM2dE8DdHZTuI9t]=.E|~DY%L*oz$z8qaB5Oz65%b/$IWM+' );
define( 'LOGGED_IN_SALT',   '/{dqcL?{s)0y=HE|}qP<jtJ|>B_c>e~Xo%s9.l}>LBqOpE5$]niM.SiQ-MdlQMem' );
define( 'NONCE_SALT',       'g`]c6{Eb]N+uh~RU`roP!~FU-@f6A1-/L{y>H9N30L-IKP47G:zI>[H=&jQzXgx0' );

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
