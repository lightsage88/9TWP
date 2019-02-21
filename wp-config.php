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
define('DB_NAME', 'nineTwilights');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY', 'e(nLeyHt?BfNHLDuf)IRC_wI&tV*%?BO}eE}bJTEr_mk+-=Ya+BRhs]k;Z|qwYcg>&sm^;a@Ocix(S}QxK[(oLOx}Q{Vc?rJmIXx(/TsqzJllN_ZhJq;?>!YPlv*ikZu');
define('SECURE_AUTH_KEY', '!Xj^tZYh-zk;lDw@O!C!&q|r_I;ZQ!pn+fmeV}{CQpj{=CSUwtWbPaunbn}[wu@z*|*lak=fmibL]YKvD>AlU*w=n&o=>+Mi}}aS&;@R<JU+I}d;jTJsM@qU<)psZQNv');
define('LOGGED_IN_KEY', 'PBO;ACphI[@CQQ]EU$BgVmLIr)bqkGAk@rG^o;<JIp&Ftc@syDk{mkQSf/{)ya>+AvrDrr_gME!@%io*!z-SYYhTVHm(H$XSQ@b_?=XQ/-)>IIZGF?+-UjFM+sUY*}cw');
define('NONCE_KEY', '>=(bGZQ!%jxw=ox@!_phNHrtdR@$%M(tb>/J_Z[y{!N}+-O=T[gu-S](H-V-hsdUT>ZfB[-k$)]a/umOrBUeSwIAe-q]FLu<[L}Oey;_r<vcl;;oLfFg>[Pa?plXTS-*');
define('AUTH_SALT', 'v[I<iXJ=(Nury&_LTF?@O=(A=kCBDX=X@v@p@=uWM[xIrqM+gUwAxF^GC-al<|FfYkeA>{Y*-?|C|Mtpta<l[[XIp-M)d+mvYKJpyZ@}aFHWvsGWlpb(X)Eb@JS>clrj');
define('SECURE_AUTH_SALT', ';(hoix=s*^He[%AF!u^AjLy*uijb(&ea=bRPlzoHVc&O]wt%Pco{;a=h*KM+C(KOGB$[J-VrRIP%IxvLQuZ)-U+V-<n^Ax;zdhtrQa!EKPOcIqZ=);hjYLKMx@@JOaW)');
define('LOGGED_IN_SALT', '<&aRPf^)]j&;aIvLuFRydHYGRsH@k-Cy-)/eEOcDp=V*-eKJ&/L{]zv$pne_Q>%|)uW+OwA^OiB]JVRm}H-kPQtAt}PT/]Z]kEyc;TM-^ffY@_YsU_t>|lTxo;vZLVBn');
define('NONCE_SALT', ')gKR}FwZT-BnnN@NPSAh^LnvYXbfxebPSi;paDQ=)CD;$b&TR+$uM?RqhLY&uM)Yk)Hg>c-_c{-{}=hC<O<){YrkxU+g;yNHWEyuj)iV;B?_cuA)hWaK[<L[tfO$td-%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mony_';

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
define('SAVEQUERIES', true);
/*TODO: Turn these off when deploying!! */
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
