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
define('DB_NAME', 'store02');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'WYN}/l7S2$>xkY*8L,S+G{}&|EcZq>5R lkUxiV`+b|W`Pg@ii]%@pr}bWl>-R6g');
define('SECURE_AUTH_KEY',  'WcCQDDR87+T,sbQig>Xt%s+zQJiF^,iQfhCdDQwXNn` @BP]l:{rHkw*dG,.7{[+');
define('LOGGED_IN_KEY',    '[]$ g??j6Cpo]0y#=RdAOZqwct_oBb}4.H-MuQQ=ivqk=hK3E>HlRmZm[zDq(->,');
define('NONCE_KEY',        '#:4~v6U35=PjU6q>DaJ:8@&.cnP.y@O{^G6}.1s&3{fkk6]Wh(v`10D_ro{AKFe,');
define('AUTH_SALT',        'l/WoDe/_/&HKUc&cOkb2vZ{>uy&!mf|<@kl>/oYzJs2*j9Yl}vf(=X,pNdkW>?7A');
define('SECURE_AUTH_SALT', 'ndn3I<,E0pEE+a`$k$wKly^e]iKzyJ9v^XgkMp%7IgYH32 Jv~X-CQfh2oyKylLD');
define('LOGGED_IN_SALT',   '3B]D{cUgt9q+TEf[*qo&p(Fcz,:2@2{H]#Kwse0/kp&:NFt8[e|kymv1Efv`>g]}');
define('NONCE_SALT',       'i,h&<7fUN1#P0%Tn/o!YFVMPttXK}N({&!0$UW>ofw~.eq1&7THqRMaWq{0V?#z(');

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
