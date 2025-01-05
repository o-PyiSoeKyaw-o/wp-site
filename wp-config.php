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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'k`{)BjWVc7atI%w@rAMVp/Btf=VO@ ]zpZ_V nx.SOf3<|W~`r$)[_`@>mIbKw%2' );
define( 'SECURE_AUTH_KEY',  '] 8g0z^v6+Lj&x-L<<|/bI6BUT5}v: G2NkMqD:q275zF_0c+ec?ur6fr8rG!h)e' );
define( 'LOGGED_IN_KEY',    '2u,^+J!=*wijmh<uBE,xJTC+ePyUYa:%3H?z=|JomPcH &O^1xEw jhiN<Y*IvD6' );
define( 'NONCE_KEY',        'w)!kU2MB4 ?y]cabQ#EwO8?t#T`|+~R~^:QG?4tQZI6KWzo0ZG^<@*.sCV8?w.Fr' );
define( 'AUTH_SALT',        'Y4+ZN{/M/NKNnh0?w[Gxwi1m/OE& R5qJx8y+WSm5NYduejUHg<_W*4&(;a/{[GV' );
define( 'SECURE_AUTH_SALT', '$t$khAU!*KT_Cms$ZD0nY6Zx$i44ljlnN,@.DNErs{Fc5CJ14Hi%/l2;Z[O`ql+^' );
define( 'LOGGED_IN_SALT',   'YW%<0GH q-1-!;=y<n`7C{V/ryJWAi/yzVLR,b+NDCUs|//u^G(jV3R>z_=0]PUM' );
define( 'NONCE_SALT',       '){ fJi~NvJTV)m1?10=V2oIh,h1qf>x8:kwu!,nvfp(*fWYe(Cc`FMj}uYD{<f%O' );

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
