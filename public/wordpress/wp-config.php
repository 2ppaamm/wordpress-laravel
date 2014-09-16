<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allgifted');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tesQt .!}$+NE/o/`|*iVRFp_tjr<wQ>=*xx&?h6k6iIgvpw-rIBoQm>y+XVHKx}');
define('SECURE_AUTH_KEY',  '_}{=-Ud(_t^4|_<LSwTwEInm]k7G{y*|T@P[}!zGV[I*gpL;U-}~|9+Qd]F!|:O{');
define('LOGGED_IN_KEY',    '@=%_M7q`pr=/,/E?yLOjT%/Ix-!-#fB00^(k05:GmH&ca-tG~kKO0wl^f$Gep~:l');
define('NONCE_KEY',        'j&Z=kkY+pqVo%S><N B*.<Yy$QXqBp;zEUP(-Qgi@5TAjQyR3yT[~Ww?A<n*|oli');
define('AUTH_SALT',        '9JpmF-4w_>!]5dyy9UaPuebC8>y^,g)`{p.$1>l=.Bi4Gs grP^[gC|/!Bc328Au');
define('SECURE_AUTH_SALT', 'io_-]x?WG-~KLV8Q/!+;0$M`6vEj4+m|d%[iMn8)<|g%G,J$C<`bci iv;r}?a!F');
define('LOGGED_IN_SALT',   '}DAM3S2kvIW3?|dt.dvFrQ8fur |m+Wo+X|TFa3D7SN/g v^,]GSR/+mI,7EZ?h4');
define('NONCE_SALT',       '{4.-.R#Q! +0z)+|:Cj+WOqKY|FFPcMNWN8f|- #bGv-CsfRAUp~o48E4{Oi5u$E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
