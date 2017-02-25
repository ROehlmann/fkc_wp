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
define('DB_NAME', 'db669844067');

/** MySQL database username */
define('DB_USER', 'dbo669844067');

/** MySQL database password */
define('DB_PASSWORD', 'hYF3aWKmEy');

/** MySQL hostname */
define('DB_HOST', 'db669844067.db.1and1.com');

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
define('AUTH_KEY',         'uUT+lCe *^H|nSodvm5T#9o>>*FOCQ@Q,z?yv4}LqU7Odi,G=5.,O+[bHcc!nH_R');
define('SECURE_AUTH_KEY',  'E1jiV{V462|T&!z3#gUx_a`C vBtO.%.WQJ%UGs((W1}+e_u0:&.PL_pM$Xc3~|E');
define('LOGGED_IN_KEY',    'b,>}RWA83ex[tP6J]~=1>2/*[OP.yF*(7T`T.qy${F(p5(~UO;t#gT{*(xoe@T|~');
define('NONCE_KEY',        'no)N<BTA]^k$?;>)M)7-A2p9N[VjE7Kw}SCb-ke<5XGSjY&0!G2%B32t$GY_OlR/');
define('AUTH_SALT',        '5tcR,;zS<pun9TK1]T6qh~_vKLHM9UQrX(Sqa*9+4TA)+#R=DoY[%::W+_rw-4|%');
define('SECURE_AUTH_SALT', 'P&t*2qtwE}Tt/WF5bJl%HZ;Y@Q|O%7c#19b-g9vi^x<(*6T|a+o_ANA=gN7fGwdk');
define('LOGGED_IN_SALT',   'I|B~+w@6?P7tRQd5F]oc=<kj p/$iCh!rTp2Ql.Mk=A4`gy}{Qc`#Gz$O6Yl63>k');
define('NONCE_SALT',       'QE6 FJcwt+nZo[WM9)|>jpXn}oG=;hBXb]-(5(.-=kAv-mb4H.7L~MzN?ZEu]~uL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fkc_';

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
