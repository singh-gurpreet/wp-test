<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '<!ww.Utv9E}M/I,c[Hl([!TD,a^UG*guO/&34S(IO^C+wnr1}z/!Z^HEkSG~TZ7H');
define('SECURE_AUTH_KEY',  'sN_N=]rVy||[&BF7z[nS)%P@-TE08bc.Mos+X77X$tYfovH7I[`U|e|TR_}Na&_L');
define('LOGGED_IN_KEY',    ')b}M~_@[iM90}W5)f/F0=?CozNn3etC~(|o~6)IwZ3)oIOB+JW+BD(aV}/j)Q_4}');
define('NONCE_KEY',        'R05=^gz1;F2V=)`p8k5CC(0qXT! IQI<[7 WvgZwQM^bP5LHoB%(0mA#EfhvDXCE');
define('AUTH_SALT',        'R20xyRK%tfnD%*b)n8JQt$=(r|2#FTz/iuv9VY=ZSz{{zrlLs)YR67Blk}l.7p0x');
define('SECURE_AUTH_SALT', '7kRLT<DEbBiEdC2yxNwmxVv@u56oCR>-V[ezYh$.%Z#nm&p2eUZ1S};/M{#;,0Vh');
define('LOGGED_IN_SALT',   '??A>YW2W]^=r{Ild|0fD>Vz$J15=zG&.;:xPCW^UVAJy:o,LE<`N6W.fKH1ScKBZ');
define('NONCE_SALT',       '0-?Wu[]vLHiyq:WF-O:.=>30w0S- :]q1DDV/.:^{Nyo*i(!3BDQT1q)U UrvgHA');

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

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
