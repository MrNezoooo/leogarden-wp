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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '.5)Y]yX>o-p$bjJ4&O>Gy<qd~ @FGE$7MeR}^)r/K~d-d:lF{xY5n@GT-Z8_hh5t' );
define( 'SECURE_AUTH_KEY',  'hTGAFe_Ji0D[$>1--|x=3~V|9TJ/%|40cyLh$[s&G*Nh7G6T)ia;L0tGPK>(h}oB' );
define( 'LOGGED_IN_KEY',    '9A)*K8vtTbWz>UmRodp3AVlh[RkgV$2.:X{8J%iN~wcn>iq&TitIAxZwp+jK]/w-' );
define( 'NONCE_KEY',        'tmv%Lf IAhs[23}uAl%d.Sxq4mwe=A`D7E&ifN9F9Olz5eq7)g*N!b@Qu%hk#.Z&' );
define( 'AUTH_SALT',        'U-@c2{g7t}y(0>{^KUDU@Th84)84+l;6}KsW>rXKwb1LxruAPqJOVVJ$;09a~>F/' );
define( 'SECURE_AUTH_SALT', '8~7&ijY6@VFZ&L)Y*./,&rX`aa[)yu%q<,3Yz+zYOXt{rH;QJk&Qmxa%CW#|Q59G' );
define( 'LOGGED_IN_SALT',   'd {F@WIVgPYP-eMLpDS,v)`+&e`PD554M?6Q8hyg(MQmVSOxGu]6`zVU$;iu,3dS' );
define( 'NONCE_SALT',       'VIj*Ntw<;lk_R5FV$^#K?_{si*Hg{2Bb8&tKVlA=jcpIa7IqM`./$?O3yYwg>bgi' );

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
