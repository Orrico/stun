<?php

session_start();

/**
 * Front to Estupendo/Stun application.
 *
 * This file only define STUN_PATH as the root directory path for Stun Application
 * and load 'inc/loader.php' which tells Stun to load the environment.
 *
 * @package Estupendo/Stun
 */

/** Set internal character encoding to UTF-8 */
mb_internal_encoding('UTF-8');

/** Set http output character encoding to UTF-8 */
mb_http_output('UTF-8');

define('STUN_PATH', __DIR__);

require_once STUN_PATH . '/app/settings/loader.php';
