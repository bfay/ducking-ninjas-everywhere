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
define('DB_NAME', 'rgldev');

/** MySQL database username */
define('DB_USER', 'trent_rgl');

/** MySQL database password */
define('DB_PASSWORD', 'F3nd3rStr@t');

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
define('AUTH_KEY',         'rvI(El9r-W8}8,*_S|I;]D}2HndGlr=0emC~)gV=~z8+gQW_6+:P;XO0#%ekS!mp');
define('SECURE_AUTH_KEY',  '(uMGU|,}bcwDj+/@lR`kfkbrTr%XPfbRR6-RP# PLXqy[(WPD+5gjk@K0]Tb<omF');
define('LOGGED_IN_KEY',    'H=>vamz?5HgKw1W+p_*%y.3d1(UQXcxU{mP>Xg-;zL&XkA{@r-1Ft(0M:tk}0%fl');
define('NONCE_KEY',        '[)rXCa9b0}saII@ybb*dG]yO&Qlw13NJj`.aN#Y!.ms*d,`p?Try?cS(29cL)IH:');
define('AUTH_SALT',        'Q@$@8AbH`&!yG|*-*b|?+(!)NlbKbAFvIfkNknaTN#x)IV6}meIRUFfT|K<DL&wv');
define('SECURE_AUTH_SALT', 'J!5V~w+]DBGzM)B}aQd@eB^$mQ|I)htxkrv(+ov+h%=t1~>7=i?70P[z49W5,0Zb');
define('LOGGED_IN_SALT',   '8YhUWH`r8+unqkQLd5)$abq23cp5>@aTv+6AM;;Zu.vqz|KCIKDcTm=@TEQ>$ )_');
define('NONCE_SALT',       'fzYBb^AEblBbdvV:Hy>`aHc 8w}/nyr-GqHK2X,P-X0#.t0jIe--vBvf7!iq=9B|');

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
