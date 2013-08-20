<?php

return array(
    'name' => 'helloyii',
    'defaultController' => 'main',
    'homeUrl' => 'main/index',

    'import' => array(
        'application.components.*',
        'application.models.*',
    ),

    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=user24669_yii',
            'emulatePrepare' => true, // needed by some MySQL installations
            'username' => 'user24669_yii',
            'password' => 'RhenjqGfhjkm1',
            'charset' => 'utf8',
            'tablePrefix' => 'helloyii_',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules'=>array(
                'register' => 'user/register',
                'login' => 'user/login',
                'logout' => 'user/logout',
                'main' => 'main/main',
                'get_companies' => 'main/get_companies',
            ),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => 'login',
        ),
    ),
);
