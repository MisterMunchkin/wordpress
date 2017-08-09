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
define('DB_NAME', 'slamcom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'X1Zs*|7TVCFFVrX528Ofv,9lH_|x[dV$3cH^WF#@*ADpCZo0R^98EB)]u23ic$CD');
define('SECURE_AUTH_KEY',  '~ZzhI^%1/Mx8)UabUZ%SnV)etJnkyxzBNq=?*J:EoD-~Pb2YjD=/n};sxHaPgC,i');
define('LOGGED_IN_KEY',    '%V%Y_2x+=/1X%t|4c3d:0U5_EBbG^J[fu*z0<YUKH~gA^tg~UcfD[lV],r_K$9m5');
define('NONCE_KEY',        'cr[rL#auq)ny>Jyuyhanw`sp;a)K,pOmGtp/yd).F%^3DAmej3i`awhe:n=&@Tg0');
define('AUTH_SALT',        'C9fB^?cT`B@d!~ADBQ|:H>N{M|eR~(9a+6OYh?_xy{]w1,_TWQV;9Lpu*0/BZYHy');
define('SECURE_AUTH_SALT', '6FL+;pGmz&rhUqDIFJK@?Up[/c<dViV%{s|a;dM$o&FX ?v]KH;EemA.d8mZ mP+');
define('LOGGED_IN_SALT',   'NWRBqLOjo1vZ6kK`m6UZ:D>(x1pyyO*l48v}sl+{slwS9ER_n]%h]a:g9dN(:#qL');
define('NONCE_SALT',       'k}vg>U*`k<_`3Db6&8:$kT!rC*Bm86h<Y[^p6*Vwo&:W4y28Ljuk%X0j8l0P<zJO');

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
