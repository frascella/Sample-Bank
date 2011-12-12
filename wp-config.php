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
define('DB_NAME', 'sample_bank');

/** MySQL database username */
define('DB_USER', 'hoang.nh');

/** MySQL database password */
define('DB_PASSWORD', 'y8jGZ9vEGnyh9nVP');

/** MySQL hostname */
define('DB_HOST', '10.16.0.60');

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
define('AUTH_KEY',         'O05-.#Tit7&N`YS6=+5jcTK^`K<=<YnVAr|xpQ1G(00HpHXJ6orOQMtZ%+Qv5M+t');
define('SECURE_AUTH_KEY',  'Uq8q6au86;h3f|&|JMbdL.V7PT||b1_2Wxt3K32NY*|M_4Pd]z}6]bgT/.)YYIQq');
define('LOGGED_IN_KEY',    '~By]0@9wBPGhKT+RH~+,op2En3T_A-*c;tR[W(fT=7TiSYzRI|.rgi-1)az|aK%u');
define('NONCE_KEY',        'FbNgvFG,~=j}iI[0Exu{p+NP{%%1|Z CR(EUFFoxM7v0AG83LW1|n2,+1nsb:NTu');
define('AUTH_SALT',        '?uOe:PL`4(plq?5%+[/?|m+Z@A}_I1eg1ChD>@hgW]AJssA~/I|b+!D|t0U7[IQs');
define('SECURE_AUTH_SALT', 'O+?jnS!^hte24hE^i+Tpgg#/-|/L-%sr7-kr=r_=ORmK5H90|tSisbvJCoQN&Afx');
define('LOGGED_IN_SALT',   'JrxQ+lD88KTATrV6AiVR48xZ-n&|Vz:A+W!+rLq2UH0h/l|J+9z~F;r$ ]M8kk*H');
define('NONCE_SALT',       ')A%fb@rA3`3y$LeJgnDMO&+?{d7pG4JZ*LDKh2yo%`>?oj~]BUdZl]AGKX/@Y#A@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sb_';

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
require_once(ABSPATH . 'wp-basicwp.php');