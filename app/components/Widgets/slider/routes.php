<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Modules\Posts as Posts;

$app->get('/noticias', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    $mapper = new Posts($this->db, 'posts');
    $posts = $mapper->findAll(20);

    $siteInfo = stunSiteInfo('Notícias');

    $response = $this->views->render('posts', array('posts' => $posts, 'siteInfo' => $siteInfo));
    return $response;

});

$app->get('/noticias/{id:[0-9]+}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    $query = new Posts($this->db, 'posts');
    $post = $query->findOne((int)$args['id']);

    $siteInfo = stunSiteInfo($post['title']);

    $response = $this->views->render('post-single', array('post' => $post, 'siteInfo' => $siteInfo));
    return $response;
});

$app->get('/noticias/{slug}', function (Request $request, Response $response, $args) {
    //$this->logger->addInfo('index/');

    $query = new Posts($this->db, 'posts');
    $post = $query->findOne($args['slug'], 'slug');

    $siteInfo = stunSiteInfo($post['title']);

    $response = $this->views->render('post-single', array('post' => $post, 'siteInfo' => $siteInfo));
    return $response;
});
