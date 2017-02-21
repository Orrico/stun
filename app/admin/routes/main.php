<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Users as Users;
use \Stun\Core\Posts as Posts;

$app->get('/admin', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    /** Load settings and configuration file if exists. */
    if (!file_exists(STUN_PATH . '/app/config.php')) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/install');
    }

    $mapper = new Users($this->db, 'users');
    $user = $mapper->findOne((int)$_SESSION['admin_id']);

    $adminInfo = stunAdminInfo('Home');

    $response = $this->adminViews->render('index', array('adminInfo' => $adminInfo, 'user' => $user));
    return $response;

});

/** Load application admin routes */
require_once STUN_PATH . '/app/admin/routes/login.php';
require_once STUN_PATH . '/app/admin/routes/posts.php';
require_once STUN_PATH . '/app/admin/routes/pages.php';
require_once STUN_PATH . '/app/admin/routes/users.php';

require_once STUN_PATH . '/app/admin/routes/install.php';
