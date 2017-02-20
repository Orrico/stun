<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Users as Users;

$app->get('/admin/users', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    // if (!$_SESSION['admin_login']) {
    //     return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    // }

    $mapper = new Users($this->db, 'users');
    $users = $mapper->findAll();

    $adminInfo = stunAdminInfo('Usuários');

    $response = $this->adminViews->render('users', array('users' => $users, 'adminInfo' => $adminInfo));
    return $response;
});

$app->post('/admin/users/cadastrar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    if (!empty($_FILES['image']['name'])) {
        $uploadedImage = stunUploadLocal($_FILES['image'], '.png', 'users');
    }
    else {
        $uploadedImage = null;
    }

    $user = new Users($this->db, 'users');
    $user->name         = $form['name'];
    $user->email        = $form['email'];
    $user->pass         = $form['pass'];
    $user->bio          = $form['bio'];
    $user->image        = $uploadedImage;
    $user->createdBy    = $_SESSION['name'];
    $user->createdDate  = date('Y-m-d H:i:s');
    $user->editedBy     = null;
    $user->editedDate   = null;
    $user->role         = $form['role'];
    $user->status       = 'Ativo';
    $user->store();

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/users');
});

$app->get('/admin/users/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Users($this->db, 'users');
    $user = $mapper->findOne((int)$args['id']);

    $adminInfo = stunAdminInfo('Editar Usuário');

    $response = $this->adminViews->render('users-edit', array('user' => $user, 'adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/users/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    if (!empty($_FILES['image']['name'])) {
        $uploadedImage = stunUploadLocal($_FILES['image'], '.png', 'users');
    }
    else {
        $uploadedImage = null;
    }

    $mapper = new Users($this->db, 'users');
    $user = $mapper->load((int)$args['id']);
    $user->name         = $form['name'];
    $user->email        = $form['email'];
    if (!empty($form['pass'])) {
        $user->pass     = $form['pass'];
    }
    if ($uploadedImage != null) {
        $user->image    = $uploadedImage;
    }
    $user->bio          = $form['bio'];
    $user->editedBy     = $_SESSION['name'];
    $user->editedDate   = date('Y-m-d H:i:s');
    $user->role         = $form['role'];
    \R::store($user);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/users/editar/' . (int)$args['id']);

});

$app->get('/admin/users/apagar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Users($this->db, 'users');
    $user = $mapper->load((int)$args['id']);
    \R::trash($user);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/users');

});

$app->get('/admin/users/resetar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Users($this->db, 'users');
    $query = $mapper->reset();

});
