<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Stun\Core\Posts as Posts;
use \Stun\Core\Users as Users;

$app->get('/admin/install', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    $adminInfo = stunAdminInfo('Installer');

    $response = $this->adminViews->render('install', array('adminInfo' => $adminInfo));
    return $response;

});

$app->post('/admin/install', function (Request $request, Response $response) {
    //$this->logger->addInfo('some information');

    $form = $request->getParsedBody();

    print_r($form);

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

});
