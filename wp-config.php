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
define('DB_NAME', 'acapytra_WPRJF');

/** MySQL database username */
define('DB_USER', 'acapytra_WPRJF');

/** MySQL database password */
define('DB_PASSWORD', 'wURULu38lo7l4iGpV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '060ef0b8bd2468000e771447aabf7d8cb0f7dd60da4f5a1b60f16b917f290951');
define('SECURE_AUTH_KEY', '18cb6a8b48c4c5fb61970bb2c295eb4099a2b09e68dca9c3d9da23f83ab6e87b');
define('LOGGED_IN_KEY', '7539949843964d926eb4c88de80552612d58423b63285eb58d1ba66101a8e20d');
define('NONCE_KEY', '1c2cab5dc060740e590d92031970c689516fa9cd0ec1d96eb274af63e263fade');
define('AUTH_SALT', 'c356288b1c43ef53351b8a64b171277a302f77ff7a6e477e6e2f0f5c66efabaa');
define('SECURE_AUTH_SALT', '28ad6f289a0951713db8d6c8bdea86ef4c7731f0be44f6fd8087814a66a004da');
define('LOGGED_IN_SALT', '00890b461d4510e6d5e2eb0f756b42bd1252f271e3c7e0754fad9210bdb9c603');
define('NONCE_SALT', 'da67d3bf7b97b164fa229b5e0005454cbdee2b4e064087894c86bc36e66b96a1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_RJF_';

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


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
