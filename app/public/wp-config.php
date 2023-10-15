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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          't*WIU0L!r*$-<yY#hkY1a-RCKcDkFj6[GQOzfLOM8N`x;7g:uV4j_?Jg)/OY90;/' );
define( 'SECURE_AUTH_KEY',   'JnaUM?9k|8GKE)QMjn:44ZoH_ |XE9FV&YKl|%aTE0pJ;87 Vh}6fju^<Zp_|^-(' );
define( 'LOGGED_IN_KEY',     '!uZL13-IWm9|E55.*zK&S7{%e8QK[^{N*,c^ n,QqO<4C.(~d&El2&ur5XNE-I%*' );
define( 'NONCE_KEY',         'X[63FhBBL]}$FYdH!t<2J-6C6#dt@;Z%1;w.5i&3+g^f_E di{&K25d2pk|a+iD-' );
define( 'AUTH_SALT',         '$C|}MY,j7b@{}saJN.x>-r6ExXic4qWX6HG%3+LxomIO8SWO-)y4su,Fa}_eyw1=' );
define( 'SECURE_AUTH_SALT',  '+o`+szc-1sje64+2_m7pNlZfaG9je^W6s{8UNqJlt!*Vl2sEeq_~b:S~RE[X#B_I' );
define( 'LOGGED_IN_SALT',    'E9@fTkz67eQy%vFk>(]{tp7}r%86A{r5Q3(+eqT.Qd1Xh;.v}uK$uk)Rch}w1_D=' );
define( 'NONCE_SALT',        'dt6LEMS;rX+iWuE[!w{}ERA;C(URR$o+nb]z1^0XVSH6=qla!{e!7QRO2M~MmX~$' );
define( 'WP_CACHE_KEY_SALT', '<pPb^@b,Q_;7HZg~.I`=.EG@A~x&lR2=iNOm(0S4uU/L|nOWhe*IgihGq^V~nWr!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
