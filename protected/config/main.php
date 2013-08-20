<?php

return array(
    'name'=>'helloyii',
    'defaultController'=>'main',
    'components'=>array(
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=user24669_yii',
            'emulatePrepare' => true,
            'username' => 'user24669_yii',
            'password' => 'RhenjqGfhjkm1',
            'charset' => 'utf8',
            'tablePrefix' => 'helloyii_',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'rules'=>array(
                'login' => 'user/login',
                'register' => 'user/register',
                'main'=>'main/main',
                'get_companies' => 'main/get_companies',
            ),
        ),
    ),
);
