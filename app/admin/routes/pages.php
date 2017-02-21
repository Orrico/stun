<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Pages as Pages;

$app->get('/admin/pages', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Pages($this->db, 'pages');
    $pages = $mapper->findAll();

    $adminInfo = stunAdminInfo('Páginas');

    $response = $this->adminViews->render('pages', array('pages' => $pages, 'adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/pages/adicionar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    empty($_FILES['image']['name']) ? $uploadedImage = null : $uploadedImage = stunUploadLocal($_FILES['image'], '.png', 'pages');

    $page = new Pages($this->db, 'pages');
    $page->title        = $form['title'];
    $page->slug         = stunSlugify($form['title']);
    $page->content      = $form['text'];
    $page->image        = $uploadedImage;
    $page->createdBy    = $_SESSION['name'];
    $page->createdDate  = date('Y-m-d H:i:s');
    $page->editedBy     = null;
    $page->editedDate   = null;
    $page->accesses     = 0;
    $page->store();

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/pages');
});

$app->get('/admin/pages/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Pages($this->db, 'pages');
    $page = $mapper->findOne((int)$args['id']);

    $adminInfo = stunAdminInfo('Editar Página');

    $response = $this->adminViews->render('pages-edit', array('page' => $page, 'adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/pages/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    empty($_FILES['image']['name']) ? $uploadedImage = null : $uploadedImage = stunUploadLocal($_FILES['image'], '.png', 'pages');

    $mapper = new Pages($this->db, 'pages');
    $page = $mapper->load((int)$args['id']);
    $page->title        = $form['title'];
    $page->slug         = stunSlugify($form['title']);
    $page->content      = $form['text'];
    if ($uploadedImage != null) {
        $page->image    = $uploadedImage;
    }
    $page->editedBy     = $_SESSION['name'];
    $page->editedDate   = date('Y-m-d H:i:s');
    \R::store($page);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/pages/editar/' . (int)$args['id']);

});

$app->get('/admin/pages/apagar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Pages($this->db, 'pages');
    $page = $mapper->load((int)$args['id']);
    \R::trash($page);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/pages');

});

$app->get('/admin/pages/resetar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Pages($this->db, 'pages');
    $query = $mapper->reset();

});
