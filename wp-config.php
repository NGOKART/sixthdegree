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
define( 'DB_NAME', 'sixthdegree_db' );

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
define( 'AUTH_KEY',         'lrY>[3%:N<N|7l`V,P?Gr#)a7_`:(2{PYlFs6Z-5Jd5wE+w&PA%l_$!XLk.P4(v&' );
define( 'SECURE_AUTH_KEY',  'Faxb=Uq~$ Q8VOlWC)V|Q>>NpagG1zV.+F3bU$gigLgh.l.Y9K{j:08QE4iLsvew' );
define( 'LOGGED_IN_KEY',    'i@/wn^Hqi]q%2S80L|2Q, 6.q+KaBSz-A~Pg{/S`<3(NpLYwdZ0*aLkZ%rAhaW@M' );
define( 'NONCE_KEY',        'ISN1kR*XG^u[<3wO^>*lL7<!@(snWWhuqIrjwkZnhSo;?_w}yjo>VjJ1`Pmxh7o0' );
define( 'AUTH_SALT',        'o,%$.O{ld2~tZb}F&nRGCmkst&@yn:m5z5<mLzX9GeJF:a]X0U&scI4*0&la*m)}' );
define( 'SECURE_AUTH_SALT', '1J%hsuB9-X^r(h:80|9(f;7sEm}:DnvhdmM/y-bz3}Iu+0Gr-XpaJd{cg^ONt. ^' );
define( 'LOGGED_IN_SALT',   'zlp{fX,(Gdu{9c]OE~ kGfq,gV]*hbVo%9c+?Kv.v{t-s*6%TOmdtk5hqfV^F)XV' );
define( 'NONCE_SALT',       'Q7B2!&SOEm5n+G_d]#6U>/!u<(Z&,:_R3$Qci5~T D2O.V7|LD:6A<AD{V^=7@.:' );

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