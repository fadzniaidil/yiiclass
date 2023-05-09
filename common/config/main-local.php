<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yiiclass',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
            // send all mails to a file by default.
            'useFileTransport' => false,
            // You have to set
            //
            // 'useFileTransport' => false,
            //
            // and configure a transport for the mailer to send real emails.
            //
            // SMTP server example:
               'transport' => [
            //        'scheme' => 'smtps',
                   'host' => 'sandbox.smtp.mailtrap.io',
                   'username' => '4502a1ffed268f',
                   'password' => '21c37800cf7ada',
                   'port' => 2525,
                   'dsn' => 'smtp://4502a1ffed268f:21c37800cf7ada@sandbox.smtp.mailtrap.io:2525',
               ],
            //
            // // DSN example:
            //    'transport' => [
            //        'dsn' => 'smtp://4502a1ffed268f:21c37800cf7ada@sandbox.smtp.mailtrap.io:2525',
            //    ],
            //
            // See: https://symfony.com/doc/current/mailer.html#using-built-in-transports
            // Or if you use a 3rd party service, see:
            // https://symfony.com/doc/current/mailer.html#using-a-3rd-party-transport
        ],
    ],
];
