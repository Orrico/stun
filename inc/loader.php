<?php

/**
 * Loader to Estupendo/Stun application.
 *
 * This file verify if 'inc/config.php' exist, if not, load 'inc/install.php'.
 *
 * @package Estupendo/Stun
 */

/** Load settings and configuration file if exists. */
if (file_exists(STUN_PATH . '/inc/config.php')) {
    require_once STUN_PATH . '/inc/config.php';
    require_once STUN_PATH . '/app/settings/bootstrap.php';
}
else {
    require_once STUN_PATH . '/inc/install.php';
}
