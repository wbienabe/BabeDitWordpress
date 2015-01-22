<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         '+#+lG>-0hjJ.+@2WGr-C@dWwEyt!PFogZ)&?9<5?:IVW}uM9Kv1!&WP:,-j,$x@-');
define('SECURE_AUTH_KEY',  'wZtLdNw88%Ps=m(IJ#GWvBJ_9g1N8W.{G2SSCu/i-|SnxU|7Fy*Fhh0Z<|a+|<iC');
define('LOGGED_IN_KEY',    'kN6UY|2A+bW(Rse4eN,oGoS0aC3-7x2PlvGfM4f+Rn0Z={S~>B<a--6@6h]Y3v8l');
define('NONCE_KEY',        '-bS+pWTO:Q-4qtmpZc0*[][Zb9]6]+$So5W]&^{B9$VCn~:tu%7jq@=*zJ*4??*A');
define('AUTH_SALT',        ';Ld.>RQ|h=Pl{GA>d[ 6>}c7r5XFDK|E)x{s?oX ^PL3k?-/M]6+WL#;pi!HOXb3');
define('SECURE_AUTH_SALT', '{VxCQ%gnx(cvOk6b]#EFLMM3iBS]DYbL[3V:ikv45os%^Ewf{I$xrA[+.I4<V`fE');
define('LOGGED_IN_SALT',   '2w4re9>>k>n%@`,=kgrY=wDc!_t 1R^#I)dW?d~4r{`OHr;v+5zg}|~TN-&E]F)e');
define('NONCE_SALT',       'wLa&xXf0JEo=f<-l&,-}6]{poHT(U{pb16Du:FKex}~J%krIbgXdE#-;+w/e)ngI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
