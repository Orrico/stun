<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Posts as Posts;

$app->get('/admin/posts', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Posts($this->db, 'posts');
    $posts = $mapper->findAll();

    $adminInfo = stunAdminInfo('Posts');

    $response = $this->adminViews->render('posts', array('posts' => $posts, 'adminInfo' => $adminInfo));
    return $response;
});

$app->post('/admin/posts/publicar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    $post = new Posts($this->db, 'posts');
    $post->title = $form['title'];
    $post->slug = stunSlugify($form['title']);
    $post->content = $form['text'];
    $post->type = 'post';
    $post->createdBy = $_SESSION['name'];
    $post->createdDate = date('Y-m-d H:i:s');
    $post->status = 'published';
    $post->store();

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/posts');
});

$app->get('/admin/posts/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Posts($this->db, 'posts');
    $post = $mapper->findOne((int)$args['id']);

    $adminInfo = stunAdminInfo('Editar Nota');

    $response = $this->adminViews->render('posts-edit', array('post' => $post, 'adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/posts/editar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $form = $request->getParsedBody();

    $mapper = new Posts($this->db, 'posts');
    $post = $mapper->load((int)$args['id']);
    $post->title        = $form['title'];
    $post->slug         = stunSlugify($form['title']);
    $post->content      = $form['text'];
    $post->editedBy     = $_SESSION['name'];
    $post->editedDate   = date('Y-m-d H:i:s');
    \R::store($post);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/posts/editar/' . (int)$args['id']);

});

$app->get('/admin/posts/apagar/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Posts($this->db, 'posts');
    $post = $mapper->load((int)$args['id']);
    \R::trash($post);

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/posts');

});

$app->get('/admin/posts/resetar', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    if (!$_SESSION['admin_login']) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');
    }

    $mapper = new Posts($this->db, 'posts');
    $query = $mapper->reset();

});
