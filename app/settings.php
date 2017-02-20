<?php

/**
 * Basic settings to Estupendo/Stun application.
 *
 * This file define basic settings for use on the environment.
 *
 * @package Estupendo/Stun
 */

/** Load application dependencies (Composer) */
require_once STUN_PATH . '/vendor/autoload.php';

/** Load application classes namespace */
require_once STUN_PATH . '/app/autoloader.php';
// instantiate the loader
$classLoader = new \Psr4AutoloaderClass;
// register the autoloader
$classLoader->register();
// register the base directories for the namespace prefix
$classLoader->addNamespace('Stun\Core', STUN_PATH . '/app/core');
// $classLoader->addNamespace('Stun\Components', STUN_PATH . '/app/components');

/** Load application packages */
require_once STUN_PATH . '/app/packages/RedBeanPHP-4.3.3/rb.php';

/** Load application core functions */
require_once STUN_PATH . '/app/functions.php';

/** Define SITE URL for use with links, themes and assets */
define('STUN_URL', stunSafePath($_SERVER['PHP_SELF']));

/** Stun basic information */
define('STUN_UPLOADS_LOCAL', STUN_URL . '/content/uploads');


/** Define application THEME PATH */
define('THEME', 'one');
define('STUN_THEME', STUN_PATH . '/content/themes/' . THEME);

/** Define application ADMIN TEMPLATE PATH */
define('STUN_ADMIN_TEMPLATE', STUN_PATH . '/app/admin/template');

/** Stun basic information */
define('STUN_TITLE', 'Stun CMS');
