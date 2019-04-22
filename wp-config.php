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
define( 'DB_NAME', 'audioprocessing_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D$9E+/m(1)%$n3f:Dj)FO9;v0&TveCqfL#UCg|Z II:90)OJxI3J<)yq+x_~=abv' );
define( 'SECURE_AUTH_KEY',  'A}+JtVBTKr.MrVy>U6/4wQZ7I-S=e34G/A@j.&Q)/^VP*cb.)KqzD9pVUu-Kw.8k' );
define( 'LOGGED_IN_KEY',    'o.tM,1OzluZ,6b;_hr/?U6[X%%s%J.]b5CTmO(>nek;6r<{1m_78 (.{A,0M2.ai' );
define( 'NONCE_KEY',        'xe5$d(Lq5:VE24kNUV$xt !zf`CGQzrS2X7`]G8e2OJcqGwX~})GeMRL<$n*Ey,h' );
define( 'AUTH_SALT',        '}/ss]H@`0&yq:R6ZbK!HtQd~uto&w~[BBco`4shZsvGO&!i/g3+9/PAfE,h>+cbD' );
define( 'SECURE_AUTH_SALT', '#2r|mu}:B#C|mM,#,W[j-35YL7o1B.bFu1]c:m*S>pGKkXS7Cp0_5gH@I0 5l@Ro' );
define( 'LOGGED_IN_SALT',   'td5923<k1wwD-;2)he]|``A<z([^J|$?GU?c@a@@!]$ibv3T+6g-&I3DKafuMI(L' );
define( 'NONCE_SALT',       'K8BWTjdD#v!xg++In+~,[fuI@dVkV<i}Wim-frM}V&jfK_EfvhW{Z^#(Kr{ZaQZY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
