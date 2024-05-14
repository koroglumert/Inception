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
define( 'DB_USER', 'mkoroglu' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '*+ t?P-$|60uu-=K_<B3Y42hz $vf-dEy!CNT%AmhwvAmAF1v[{7qc=?3-*&wq9H');
define('SECURE_AUTH_KEY',  '-iY~q$Ew|G2jH7nqrrLzr^2vlD>g!-jj[S;}%jA:[SS?oe>$4gyM,=l<f}+Li:!B');
define('LOGGED_IN_KEY',    '*)UZy<_.,PS<;0mk=jZ)y&|CO`E?cs:$.UHHiLMO#HlstLJ3@k9b|-5tpKpKz 88');
define('NONCE_KEY',        '|^-$m]$8>]Yy&(.=!(?0J5lTyZxOCAs-YN*m4e3oHo-o0%Axu@2wY|M:~{`3${O4');
define('AUTH_SALT',        'zWX,{=1]=f30]-ONPo%1H}k|; KpM2_kL~cTCTy>d~vmJ-lHO=k-dm1k3ay-%N=~');
define('SECURE_AUTH_SALT', '{^n<^,gI|RC)(RojBzB6#B!+R`JjM&OgN+yq_~rGby/VC^fw8&tYSq16[@j/MU_r');
define('LOGGED_IN_SALT',   'N!>+u|Yu+Ncrq#C)Y&=H(!5Tj:#~~I#vFy64pZbt@){u-pO5@6umHy]E.QcwddU`');
define('NONCE_SALT',       '#]D>@I4*Wr_WrH:L#$C&ep)QtFflkM+AIQM-bq~E.oDrE]bq=>A1mS`!`j6GVC+#');

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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';