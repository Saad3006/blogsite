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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogsite' );

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
define( 'AUTH_KEY',         'EMcg;>gkVmo%avNy;`1V8D+K=|2;24}o2$),Z3{ml/h(@/]~U8E*b.!Ej%{r1FjV' );
define( 'SECURE_AUTH_KEY',  'rpZ9{W8v}yR`tr+bj+mC4OO?L[0+|@./](4QVYrrSmXQHvc#^4Ea(:U!C ]y]e`#' );
define( 'LOGGED_IN_KEY',    'S{XJwVfB:]qZaAV`,^gx1PbPY!?,c~iIBK/:&?L<KZmJ0@X7bRMbh@sjstB]NXk(' );
define( 'NONCE_KEY',        'x2R fD77fRMf|n[&Le2&eNbwPI8{x_,4DJ;bL)|vbIelTYtPJMAUaeVT@.*R8_D7' );
define( 'AUTH_SALT',        'B6c>=2E5$M`H*Wp3Z_TRG7a`]$CfAP+=hs83iS w:Ud%K? /@zgPWR8_f5lpaiyb' );
define( 'SECURE_AUTH_SALT', 'Qv</^BCI5x2nX|gNz7w|}_W:9a)mY@g-X4,!StH7#YEyY+nJ{PIb6<VzdNcfM^0,' );
define( 'LOGGED_IN_SALT',   'Ug2UrOEkLO)dv)@ONV3a2E[*unVnL9.gl*MC .e;Wa[pnE*b~H)|mro%8[@ K_g~' );
define( 'NONCE_SALT',       'B$>aEn245fk^;y-YTaZB-jXTJQ/J9${GPj%t{1G5;0u-/_iUTQQ2,+gmkZotZO5+' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
