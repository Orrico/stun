<?php

/**
 * Basic routes to Estupendo/Stun application.
 *
 * This file define basic routes for use on the environment.
 *
 * @package Estupendo/Stun
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Posts as Posts;

/** Trailing '/' in route patterns */
$app->add(function (Request $request, Response $response, callable $next) {
    $uri = $request->getUri();
    $path = $uri->getPath();
    if ($path != '/' && substr($path, -1) == '/') {
        // permanently redirect paths with a trailing slash
        // to their non-trailing counterpart
        $uri = $uri->withPath(substr($path, 0, -1));
        return $response->withRedirect((string)$uri, 301);
    }
    return $next($request, $response);
});

/** Site main route */
$app->get('/', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    // $mapper = new Posts($this->db, 'posts');
    // $posts = $mapper->findAll(20);

    $siteInfo = stunSiteInfo();

    print_r($_ENV);

    $response = $this->views->render('index', array('siteInfo' => $siteInfo));
    return $response;
});

/** Load application admin routes */
require_once STUN_PATH . '/app/admin/routes/main.php';
