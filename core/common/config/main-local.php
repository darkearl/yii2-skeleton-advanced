<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2skeleton;unix_socket=/usr/local/ampps/var/mysql.sock',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'urlManager' =>[
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
