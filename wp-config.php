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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'azerothcore_cms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hkz>rY[4i~<B]?gqa-#?yl4cGh(B3@WabM{@^.r#]lcnO6P@dTg&$]7,0dR6Xn f');
define('SECURE_AUTH_KEY',  '7fnjSk@L}2y%Vmd1nrQwVb4~0ZEJH.l7#2`@ItV8a?0bDM0wSG;*!a-kn<vhZ{M0');
define('LOGGED_IN_KEY',    'ZE]N#?3FAo1NAMw-Dw<?*HYCRs/pQYq%M^yqsFdP>>xv(CZ@.)vkf#I<z:*,GS2o');
define('NONCE_KEY',        'O:C3c(T_T}do=5]^Eh LQUW|`u>+)wI>KXvn`SB!(#Kr->0<pt^`a|3#:>]E2]BV');
define('AUTH_SALT',        'm(-<=nO,k>tus{ah^2=7wjRznoN0V})^E1uJny#}O/dJcT8vhGtR&aKW]hKW,@c!');
define('SECURE_AUTH_SALT', ' X^En;v W?Rwffm>60.;j r/((fbO#]$7.a%a BxBvtezD_k|U0$7iZX;,NE2eT-');
define('LOGGED_IN_SALT',   'N^}[?[Ult/O$ZCpf{}S#Bm6QE{USt<Mqe{Z&Q3^h:yp1d3S^33w`g]/2b%^Qc)^c');
define('NONCE_SALT',       'HQiFI{uD.+g)B2T&(.Evj^4o0L-b.2j$cA`S8Mtt)zWuUH|*WG}g}Q BjK_o)*z2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
