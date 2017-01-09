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

/** Load application packages */
require_once STUN_PATH . '/app/packages/RedBeanPHP-4.3.3/rb.php';

/** Define application THEME PATH */
define('THEME', 'one');
define('STUN_THEME', STUN_PATH . '/content/themes/' . THEME);

/** Define application ADMIN TEMPLATE PATH */
define('STUN_ADMIN_TEMPLATE', STUN_PATH . '/app/admin/template');

/** Stun basic information */
define('STUN_TITLE', 'Stun CMS');

/** Load application core functions */
require_once STUN_PATH . '/app/settings/functions.php';

/** Define SITE URL for use with links, themes and assets */
define('STUN_URL', stunSafePath($_SERVER['PHP_SELF']));

/** Stun basic information */
define('STUN_UPLOADS_LOCAL', STUN_URL . '/content/uploads');
