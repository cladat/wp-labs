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
define( 'DB_NAME', 'wp-labs1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?*=&4f6#R4GU-oo7T=MlRB.<8<>Ex3M( pSZP4ziL@%fjH{(Lo-Qwto41EKT!q,>' );
define( 'SECURE_AUTH_KEY',  'ocCnv}DUO)?fTzVaXb51<zN7{{r9Wp;c=*@r2?n=j4F;I5XmZ~%vArEg$saHq|N6' );
define( 'LOGGED_IN_KEY',    'idI?bAp2(#:J>hw;cctfA>u~9ETLKX7+:@|k<Nf)}lvP__hqqk?{1AT__c~QU#yr' );
define( 'NONCE_KEY',        'OT(5X?t{4y*`w/jVZJDyFcR`6_qJQKuXozn3*1?FEbJSkrId mZADqOaC I&YP3T' );
define( 'AUTH_SALT',        '*qH/>EGw6^~NmFi%A.{;Jn+S9^biEV%4xUxA,eWq>k/Kl|<Ig)c<&~{`YF.zl*9V' );
define( 'SECURE_AUTH_SALT', '0b@jh6vQj;1/s_sH:%MHfY$jQUWG[z=Dx]y+mi*EQ}8/P|u`Asj3ZHL5AqR(ZI=4' );
define( 'LOGGED_IN_SALT',   'PF8<hyfkB6@tvJYnW]$uS:IWOT)Y.F_ tFIZDZN55<wr5LhmYzQQ+Y^u|AO c|)4' );
define( 'NONCE_SALT',       '?E^dzdFDl$c;8t0}=85tWHrb#@Y4hGuC>7o<Q&*E4$`el~h_9a$Z%p~y,6?ZUu*g' );

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
