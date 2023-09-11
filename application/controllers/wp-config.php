<?php
define( 'WP_CACHE', true );

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

define( 'DB_NAME', 'wwwuniss_ppgfkip23' );



/** Database username */

define( 'DB_USER', 'wwwuniss_ppgfkip23' );



/** Database password */

define( 'DB_PASSWORD', 'ppgfkip23fghj' );



/** Database hostname */

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

define( 'AUTH_KEY',         'mt[^&/36`+e[d;N(P>z6p%Ce(jLf+xZ2hQq56D::>;jx!(3.uN `oXMVh$B?P3Dx' );

define( 'SECURE_AUTH_KEY',  'NW~0po2-K1*Jr^A:yF@o9c|`wp3Uj`N*&rbGm* K[Xv;%4;p ]Z!p$)i4aa^?CJ$' );

define( 'LOGGED_IN_KEY',    '6A|/]u*5jCP/dV9ti@hW@&`(7P[-z;p/hz;&k/DMXjr2hKyM1$J8PZ2GQRy;.L;o' );

define( 'NONCE_KEY',        '3,v7hv|A/8$(f 2#)s-N8PIDF7X[Lyw=[Vo{6Z?=3BW=6WGY{RPD[4)!.:bR8LQC' );

define( 'AUTH_SALT',        'kaUzVE>Ke?/Me/eC[hm7C6J&J|u9Xt!pe {KowBY1w5c{uA<VjS{_4s**y=6t;Yr' );

define( 'SECURE_AUTH_SALT', 'c^^^QM*ft%teqY3^i@31jIpbT,FeeQwuYJC}.K1tv^+vIWUoCEaz-Nlx}3GUzxk2' );

define( 'LOGGED_IN_SALT',   '(ELr1+NsP@=SOVM|t-dQaD<k%9k7|W#P57<?1kn)YfBKV,v_i2F4aTYd/C]@Cp~2' );

define( 'NONCE_SALT',       'w0l@(HK:44n=8fG),_i]Ear;{;ogx976[gXh*Vzp5:+8@kH()RY25yFB ]-$!FU8' );



/**#@-*/



/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wppg23_';



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
define('WP_MEMORY_LIMIT', '2048M');


/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

