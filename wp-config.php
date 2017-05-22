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
define('DB_NAME', 'marksite2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ':fZL%M ]K.kC)}U|i3 bISWDt>s{mx_EtjFJ2-9ho$ReX6xC>e&n:uB1Dux/.!4~');
define('SECURE_AUTH_KEY',  'h*Q=a( ~1q2 d}:c6DB[/o> JXe@+09UJ=@d$Yw}a+G33cs(qD0#GFVbM CF3H3>');
define('LOGGED_IN_KEY',    ';7$lq4h>Ur5ZBB]iF|n8:*,e_7r$)nQ1E>WeTihjFu^M8|6+$=2PwG3]#/BFxKE{');
define('NONCE_KEY',        'Y.!f^>SP[mW hO<hp*zvR|n_iy,n*.W=p0e-PK?Z722n{Wh~;uX<^)<4lFzyG.5%');
define('AUTH_SALT',        ';UcTp7~#(h|zEBp=s<n)D_`X<pgxqy]c2T#I@Z~l)+*m<7-?Onw5HZ;NIcA;DviO');
define('SECURE_AUTH_SALT', '!`s+l(;YOzXUM<qE9S$;D%r!^&_{eJv-Rv.:2?7VAWZ@,k)Kq_kEB#7{*==v/?Hk');
define('LOGGED_IN_SALT',   'A<l*EsD}KT.lLIQ9%&;#URMe($est+m3o*dvaRH{Z]M]+A)_VF~M+z^+J8f,K%JO');
define('NONCE_SALT',       'Lj5iW%[7BHND|-%1n0+ni[tO2+qR.::ej0L2zJg. ~kk}fGWZjufe5bk7}.%mlSX');

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
