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

/** Site main route */
$app->get('/admin', function (Request $request, Response $response) {
    //$this->logger->addInfo('index/');

    $adminInfo = stunAdminInfo();

    $response = $this->adminViews->render('index', array('adminInfo' => $adminInfo));
    return $response;
});
