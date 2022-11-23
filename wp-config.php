<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'dbs3631816' );

/** MySQL database username */
define( 'DB_USER', 'dbu1540424' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eNjaReDNcLTqIAoSUctT' );

/** MySQL hostname */
define( 'DB_HOST', 'db5004365654.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '-M1VqP E5~d]o+?d>o|?^o,eufyCcgt!308x#*6c^WSy-<UvVQ-hFvn9OimxtTP/' );
define( 'SECURE_AUTH_KEY',   'E%hw>HE.fi)UHA6b0&x=|UIVAv)bxXUL$^6/utQ%?S8=gSpIpsCG>.RhLwly?WNS' );
define( 'LOGGED_IN_KEY',     'ntM?{VB43yn63ouMUi7-/yN5wa#g0GM^yYDYF*g1s;=Yzy!{JofHg,X~zLUS-A#G' );
define( 'NONCE_KEY',         'W9=!d~!|^vbiru^cU))MOVG{UF -bdz[17k(1Us#/#]JL.s%*OR<QSRl;&d_+ms8' );
define( 'AUTH_SALT',         'qz-$NxX Y>xyw({8cGwZzxR:]Vp%^cFgkR{!LLGj/$s`t$9HfF3JkNUf`n5h0iJz' );
define( 'SECURE_AUTH_SALT',  'V;L1+_i]hA+Pi09O~:=TA;p;ck-1|pq{3dD=383c}JmIy^QEYLq?> /P7]ouMVr`' );
define( 'LOGGED_IN_SALT',    'e<Z~}qWu8PT?rW&Ac!wJ}($JvJ{JQ!*n,b8+cgivfNAI9:<Kn~n*X@AG+Wu~h]^j' );
define( 'NONCE_SALT',        'Chf|Sk55:WpE3s`uUKdTDiwE ;r*6v7X=fDP:8ny1m}B.D@F;+p>>43fj#EIrkM_' );
define( 'WP_CACHE_KEY_SALT', '7pCrUzffff5/5.68iJMo`ESN<<(Olwz1lq8lE-6<m*ki!h8*~{TQ~ji g!3Av4|1' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tqEppIVE';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
