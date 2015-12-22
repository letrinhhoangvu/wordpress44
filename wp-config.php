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
define('DB_NAME', 'wordpress44');

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
define('AUTH_KEY',         'N|GT!;VDoqAI2I:y@ld>(::sb2q*X9[t]YYulL7V[`Pv% { {msE:q|3&x3}pD}*');
define('SECURE_AUTH_KEY',  '?w-)Lu<+O+1M4+jcd6YY*-Zfkf+}CH!wmVz$(TZxVa_q:=Rd0}?sz$>4 ^nXC|4m');
define('LOGGED_IN_KEY',    'IglHp@l-l=>**[vdEK{^&K<fA(`l0Qksn$a7I-!JF[{KcvHzJDT,@+]7-|+s&p9+');
define('NONCE_KEY',        'vU*| j+{_$c;%Ka^4*[41l/oGQVO.hZ[}8dme<]Xl@R~xVa{}i{[eek/0D?D7)o,');
define('AUTH_SALT',        'qL$9NaD1u6}<IizZKoJh8]1b-BgwyqK)J#c9DT[DRc5JI^Le&SG;cm@v5jQMatY*');
define('SECURE_AUTH_SALT', '.?tLM<N-EN:V$T@xX4({nyA#:WozUwV3T^1s}HQw8[%SBGk*A+o#r)tj:$FeC2[D');
define('LOGGED_IN_SALT',   'kK^cnX`d7PC18,!vbYK;]]MD1fjrZkUmu*9uj?Y+g43-Zt5 vGfiqZ/n/>LVp^mX');
define('NONCE_SALT',       'nAM{mSN|U]#a)r4uWyVAwgS.QLt0UtG6w5|dx#E^+S6!irC)BdFj@%ai:t{)2_bO');

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

