<?php

/**
 * The base configurations of the Estupendo/Stun.
 *
 * This file has the following configurations: MySQL settings, table prefix,
 * Secret Keys, TIMEZONE and debugging mode.
 *
 * You can find more information by visiting {@link https://github.com/Estupendo/Stun}
 *
 * This file is used by the 'config.php' creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to 'config.php' and fill in the values.
 *
 * @package Estupendo/Stun
 */

/** MySQL settings - You can get this info from your web host */
$config['db']['server']    = "mysql";
$config['db']['dbname']    = "stun_test";
$config['db']['prefix']    = "stun_";
$config['db']['user']      = "estupendo";
$config['db']['pass']      = "root";
$config['db']['host']      = "localhost";
$config['db']['port']      = "3306";
$config['db']['charset']   = "utf8mb4";

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the Stun/Admin settings.
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 */
define('AUTH_KEY',         'qx7YXFbqdCzbLLf7');
define('SECURE_AUTH_KEY',  'd5vJi5Fjdinqzdcs');
define('LOGGED_IN_KEY',    'HQiDd8j10Z1TaKFl');

/**
 * Default timezone used by all date/time functions.
 *
 * You can see the List of Supported Timezones by visiting {@link http://php.net/manual/en/timezones.php}
 */
date_default_timezone_set('America/Sao_Paulo');

/** Debugging mode
 *
 * Change this to 'true' to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use 'STUN_DEBUG = true'
 * in their development environments.
 */
define('STUN_DEBUG', true);

/** Developers env mode
 *
 * Change this to 'dev' to enable features during development.
 * It is strongly recommended that plugin and theme developers use 'STUN_ENV = dev'
 * in their development environments.
 */
define('STUN_ENV', 'dev');
