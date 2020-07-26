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
define( 'DB_NAME', 'rbkapopa_wp4' );

/** MySQL database username */
define( 'DB_USER', 'rbkapopa_wp4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q.ZWqVwgisHgDGHoaVD75' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'RwrilJomdhvV6OZv9lh9RPI2yIhh0JqmZjN6KgFzD75PmwTOpB2oOBgqNZ8MQkVV');
define('SECURE_AUTH_KEY',  'FvF7V9Lm7uiEefQ7UcSJLGXebrK4RkXWSLflO8lni5pGqP2HHY5azvdzDLpG69lq');
define('LOGGED_IN_KEY',    'HoZSFIEkVPP3vGjf4rXYfCShs4IMmzrK2qDskcaPHbx7tkSLeZ0NGav90Eb0x347');
define('NONCE_KEY',        'wA3kvOwR71hTUz1ugTguXydvMTJtBOtWFZcd2MgoencoNI5kcxI4Mki2lSdYV5s5');
define('AUTH_SALT',        'sr8vJccYT9oAHTJoQutBtwyqPsgmSaDqoQO2CXMIHp47bN3ZWLVmurJ6ArQWrxVD');
define('SECURE_AUTH_SALT', 'thk6rdWn9dTjhEcqntedQv79baFkG2qEhdVNmAOC9bD33Q6yKxVqpWWdoI0ATZUw');
define('LOGGED_IN_SALT',   '8BGKktzPzG3mUvNiAXifMkNd9oKvP29Q8OxJBNV7QLYJDgMYYaX6WFIiRgzEYLHP');
define('NONCE_SALT',       '4jFLwYa7Q84PYjROPLA25CaUr0hsAz8IzH6Ehhhy53TFbc2K3e0VASkWuBpG9etq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
