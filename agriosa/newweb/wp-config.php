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
define( 'DB_NAME', 'agriosa' );

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
define( 'AUTH_KEY',         '?:P[]OcalZOpP2nvN>C|ix4B0;|u^;0p]VF>h`JDV^K~hRfzniYM5+{,L6iPw7 u' );
define( 'SECURE_AUTH_KEY',  'Agz]@5hMnT!Y+bihj6T[smpG?z] g-F4^efD3;G+CBQH]ZM@/7.K]e,D{B^-JBh(' );
define( 'LOGGED_IN_KEY',    'te^3@y8/01o^3B*j9&9ycr6<9=:#1yw`Ei>pKUkQV@U(<eH]^cj<H:|z_?85sYR8' );
define( 'NONCE_KEY',        '2`w*@xZF6dAz2}Pd[GF@z%4%V#UhFhNS`71z=$5%}M|21VPT|^&^fnJf*e&vi=YP' );
define( 'AUTH_SALT',        ':h;c>1.JHNQ*v<77wtx8t-mJ,$+V: fIh!NQob4]~V9_9a({0P&=)!%s}t^ol(Zh' );
define( 'SECURE_AUTH_SALT', 'tSwBA8DZiS2.B3hAkhpUthoBu}hG.KM}X3%FC_il$tw%%btMeeW6][2bBH)}kjoD' );
define( 'LOGGED_IN_SALT',   '/P.~.;#}Vlo2A%0=7A3-KskY}a=EU:Ab];eWoPNlk2`DCQbiP*pk-~cONSF2{o[u' );
define( 'NONCE_SALT',       'Q!uMD)1RWB/Lz0u-G#($bW&l(JX>+QNa{ck<`>BiD<c2!O<}f0`Ci6JY*VD5+cJH' );

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
