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
define('DB_NAME', 'S1I77q6gsDm0');

/** MySQL database username */
define('DB_USER', 'S1I77q6gsDm0');

/** MySQL database password */
define('DB_PASSWORD', 'Pantsonfire1!');

/** MySQL hostname */
define('DB_HOST', 'S1I77q6gsDm0.db.11103817.hostedresource.com');

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
define('AUTH_KEY',         'A9a4JE|VnX}Pxww+w6X/i/h$S|_=v}CvJcD?%0-(q=?LKKE;r%]k)`RWq,4.E.VA');
define('SECURE_AUTH_KEY',  'KvS;k&s!&+PU|[`;CDTaD[a!}f+5.{ ?q986L}8qaPw2yUz:^17rPfUGMvH2iPxO');
define('LOGGED_IN_KEY',    'VM<92Z5J(3O.Y>w;#>Lx1ru11-XpX4Bg]ZXh{h@p#2ebz7FEsP%rk7F1..5m$<gS');
define('NONCE_KEY',        '5K=v|2x 7cx_%0@R(1OwV$4[%HAjQaPD%zi|*Uu@Xfv[ue!Rf}bT`0._|Pq|a,dx');
define('AUTH_SALT',        '*#hzK tDX+k-2W-:(Ua=`+l0MF0+/v8?85Fi.`rQx4M_Q}.!p0f+Q:|jdZzUK If');
define('SECURE_AUTH_SALT', 's-+$ZS3-)X,i^-ytIjvAv|!<VNG,gxs8:@27l5DS0jNL$7 ]aem3rt02UtB$S50B');
define('LOGGED_IN_SALT',   'HYD-GV%J!GT~ys-cFD4A:g<?TOxan.e?Ib+-#PoTYjYF{))#ujEF%[wa/bF9|+Za');
define('NONCE_SALT',       'EoDJe+|b-|~Nj~g{05pI9Vd [T-J]Vlpu&N3RBV3e_u%&jI6WZ&X*[+}l=ye`kPn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
