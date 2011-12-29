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
define('DB_NAME', 'mywebcom_wordpress');

/** MySQL database username */
define('DB_USER', 'mywebcom');

/** MySQL database password */
define('DB_PASSWORD', 'Q18jHKAIhktbCe');

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
define('AUTH_KEY',         '=K?!GuBfNs+D6]9uNH8TemmN/MH<|(fTW^ha&-:+dC3Q35+/W(Hgz_pXgH!cK%.H');
define('SECURE_AUTH_KEY',  'WT4K+~KhWjA(b[Yuz5|d7G<j@w_g|/$C-*,~AY+((bEAX~`Ed-0JA+T(ElmQBrEG');
define('LOGGED_IN_KEY',    'Lng2xqw~+RU]SO-S(QC Mn}Zv{bj0D~6-?_fS!/[=*FZ@e@_r]?@jq)qh~bp^-yn');
define('NONCE_KEY',        'K74dY1K 3s4`8b,Xwe5QTT.b046B-~x[*zwZ@RqYI-qAEfz^i>OB).y}:c!7Ox7c');
define('AUTH_SALT',        'xCkt+$E1;Y3?eMb=]ifTL#Aj004CM?V|Ex47_v4PIK:gIzNP~DiC}~A7ZD>NH|.A');
define('SECURE_AUTH_SALT', 'yK>}p|9A!3!n+r9*%~>$hpesVTMP{~&voR+v^hnL/_!?DV#O;FFmtPFh{}IHhJXX');
define('LOGGED_IN_SALT',   '`-t:<dEH1 V%93p:?OERb*8Hk]*M~0$+_3}%_+r#1YjC:nf/~ +-+UySXIOp96v#');
define('NONCE_SALT',       ';C~-p Nv=<b4bW9oJpTp6Kl?x#1y+Z?xm bKmTp`wPO+n!|!h[8;%Cft_/l,Ws:`');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
