<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Users as Users;

$app->get('/admin/login', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    $adminInfo = stunAdminInfo('Login');

    $response = $this->adminViews->render('login', array('adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/login', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');
    $form = $request->getParsedBody();

    $mapper = new Users($this->db, 'users');
    $user = $mapper->findOne($form['email'], 'email');

    if (($user != null) && ($user['pass'] === sha1($form['pass']))) {
        $_SESSION['admin_id']       = $user->id;
        $_SESSION['name']           = $user->name;
        $_SESSION['role']           = $user->nivel;
        $_SESSION['admin_login']    = true;
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin');
    }
    else {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }
});

$app->get('/admin/logout', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    session_unset();

    if (session_destroy()) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }
    else {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin');
    }
});
