<?php
return array(
    'debug' => false,
    'cache' => 'filesystem',
    'locale' => 'en',
    'baseurl' => 'http://localhost',
    'server' => array(
        'type' => 'ajax',
        'host' => 'localhost',
        'port' => 1337,
        'interval' => 2000,
    ),
    'database' => 'mysql',
    'mysql' =>
        array(
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'elfchat',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
    'sqlite' =>
        array(
            'driver' => 'pdo_sqlite',
            'user' => '',
            'password' => '',
            'path' => '',
        ),
    'postgres' =>
        array(
            'driver' => 'pdo_pgsql',
            'host' => 'localhost',
            'dbname' => 'elfchat',
            'user' => 'root',
            'password' => '',
        ),

    'remember_me' => array(
            'token' => sha1(uniqid()),
        ),
);

 