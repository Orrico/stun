<?php

/**
 * The base configurations of the Estupendo/Stun.
 *
 * This file is used by the 'config.php' creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to 'config.php' and fill in the values.
 *
 * You can find more information by visiting {@link https://github.com/Estupendo/Stun}
 *
 * @package Estupendo/Stun
 */

return [
    /** MySQL settings - You can get this info from your web host */
    'db' => [
        'dbserver' => 'mysql',
        'dbname' => '',
        'dbprefix' => 'stun_',
        'dbuser' => '',
        'dbpass' => '',
        'dbhost' => 'localhost',
        'dbport' => '3306',
        'charset' => 'utf8mb4'
    ],

    /**
     * Default timezone used by all date/time functions.
     * You can see the List of Supported Timezones by visiting {@link http://php.net/manual/en/timezones.php}
     */
    'timezone' => 'America/Sao_Paulo',

    /** Debugging mode
     *
     * Change this to 'true' to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use true
     * in their development environments.
     */
    'debug' => 'true',

    /** Developers env mode
     *
     * Change this to 'dev' to enable features during development.
     * It is strongly recommended that plugin and theme developers use 'dev'
     * in their development environments.
     */
    'env' => ''
];
