<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joeymcqu_idm250_wp' );

/** MySQL database username */
define( 'DB_USER', 'joeymcqu_idm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SolidSnake1@#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z8JfnENu^}SGDw/YGw{P|F5jFNo`:(6=)rvOe*sB-K3PH@}-YoEHx~@$Lkm7fYxl' );
define( 'SECURE_AUTH_KEY',  '(.@Iuz]V<ZvemR7+:zSUyV#NPiQL@FYMqNw .,jQY [#s#1>|lggydj;gMY~fM{T' );
define( 'LOGGED_IN_KEY',    'qmGa7ZH-(qVP2 a&7U5CD_J%9S=@N+iYr;ZZJ6_}(cde|mr.#O22t~/Y]qma0qwR' );
define( 'NONCE_KEY',        'Qy*ARxAIkRe8T4gw0!44f=CO]mZ70(p,^sF.>h+C|ddfNKP3P7-e)_7H}>j|hQR<' );
define( 'AUTH_SALT',        'L~,?T*y{l$:7M~l{_9=i/x=$^00Dzz1J0~d[fiS:l BN mo>Vjq5GM;i@&Pjr@5n' );
define( 'SECURE_AUTH_SALT', '9%NZK>E/&#@I5 %vO1nqGSreoTUhxh !HdL/q&t.!og[IEV>LXNgTMIX?]+26Y9V' );
define( 'LOGGED_IN_SALT',   'ivv$Awiv6+-65^&[XCICu]2cr[rU3:3_7qozI4] ^Oh_Lq#k$!A-^%{;oczarizl' );
define( 'NONCE_SALT',       '}Ra]4=%e|j>:>8=Zy(v340T(6G<wN*oh=h7YYtc~M1YO|T%X{aghE..3(|@u^EGl' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
