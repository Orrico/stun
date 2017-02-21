<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Users as Users;
use \Stun\Core\Info as Info;

$app->get('/admin/install', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    /** Load settings and configuration file if exists. */
    if (file_exists(STUN_PATH . '/app/config.php')) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin');
    }

    $adminInfo = stunAdminInfo('Installer');

    $response = $this->adminViews->render('install', array('adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/install', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    /** Load settings and configuration file if exists. */
    if (file_exists(STUN_PATH . '/app/config.php')) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin');
    }

    $form = $request->getParsedBody();

    $config = include STUN_PATH . '/app/config-sample.php';
    $config['db']['dbname'] = $form['dbname'];
    $config['db']['dbuser'] = $form['dbuser'];
    $config['db']['dbpass'] = $form['dbpass'];
    if (!empty($form['dbhost'])) {
        $config['db']['dbhost'] = $form['dbhost'];
    }
    if (!empty($form['dbprefix'])) {
        $config['db']['dbprefix'] = $form['dbprefix'];
    }
    if (!empty($form['dbport'])) {
        $config['db']['dbport'] = $form['dbport'];
    }

    $configFile = '<?php

/**
 * The base configurations of the Estupendo/Stun.
 *
 * @package Estupendo/Stun
 */

return [
    /** MySQL settings - You can get this info from your web host */
    \'db\' => [
        \'dbserver\'    => \'' . $config['db']['dbserver'] . '\',
        \'dbname\'      => \'' . $config['db']['dbname'] . '\',
        \'dbprefix\'    => \'' . $config['db']['dbprefix'] . '\',
        \'dbuser\'      => \'' . $config['db']['dbuser'] . '\',
        \'dbpass\'      => \'' . $config['db']['dbpass'] . '\',
        \'dbhost\'      => \'' . $config['db']['dbhost'] . '\',
        \'dbport\'      => \'' . $config['db']['dbport'] . '\',
        \'charset\'     => \'' . $config['db']['charset'] . '\'
    ],

    /**
     * Default timezone used by all date/time functions.
     * You can see the List of Supported Timezones by visiting {@link http://php.net/manual/en/timezones.php}
     */
    \'timezone\' => \'' . $config['timezone'] . '\',

    /** Debugging mode
     *
     * Change this to \'true\' to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use true
     * in their development environments.
     */
    \'debug\' => ' . $config['debug'] . ',

    /** Developers env mode
     *
     * Change this to \'dev\' to enable features during development.
     * It is strongly recommended that plugin and theme developers use \'dev\'
     * in their development environments.
     */
    \'env\' => \'' . $config['env'] . '\'
];
    ';

    file_put_contents(STUN_PATH . '/app/config.php', $configFile);

    if (file_exists(STUN_PATH . '/app/config.php')) {
        return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/install-setup');
    }

});

$app->get('/admin/install-setup', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    $adminInfo = stunAdminInfo('Installer');

    // function stunCheckInstallation() {}

    $response = $this->adminViews->render('signin', array('adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/install-setup', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    $form = $request->getParsedBody();

    $user = new Users($this->db, 'users');
    $user->email = $form['email'];
    $user->pass = sha1($form['pass']);
    $user->createdDate = date('Y-m-d H:i:s');
    $user->role = 'master';
    $user->status = 1;
    $user->store();

    return $response->withStatus(302)->withHeader('Location', STUN_URL . '/admin/login');

});
