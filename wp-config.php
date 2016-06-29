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
define('DB_NAME', 'pcb');

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
define('AUTH_KEY',         ';t!qeRyU<-iDIQ5}V_^m|iUR.r]T6kZUWkn?K5 @o:6I!!)C<rQyN#]~l}14|9eX');
define('SECURE_AUTH_KEY',  '|}mDZ6R9.v0to#0l]p2JfzI>l-6;*5>S6cpVtdOv]^L %f!J0n9O=SK/*K]H1p^D');
define('LOGGED_IN_KEY',    'l(. 3z8#I{h[cX-AnxS6hfSf %6c>AjJT*@5.VePb@9Hpk2YFm0dXT`<X0LtAZ#@');
define('NONCE_KEY',        'MW5kG+fg/ot7Jo0&Z:licAdh!Za;Bb70XtHlG$U7p.e9q D.1K}17>YZAf)=qfFj');
define('AUTH_SALT',        'Z+I~{~sOX4V@.c6f@X5o`YJql+C4,<>gq+>2.pSOxImf_;CQ8XE!Rb/`M1Ve:1Y!');
define('SECURE_AUTH_SALT', 'vuf(*rZX<$g)BZJO74>H`YL]~%ZNr&:P%/w`:l~L!;~2E+mDFM1XdBDDq+oOCW1C');
define('LOGGED_IN_SALT',   'NaZR2zy9;gw9f/pU:59G2)RhgP|i7k7!2%:pGgw9`<PP-79eYW_1duMrXq8$gK<6');
define('NONCE_SALT',       'r9f$tfHdgC9r:)rWKO7+B:7d}H&^Jk3o?Q&}a U^J^ds3R]{S16;JG@.c~0FIeyD');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
