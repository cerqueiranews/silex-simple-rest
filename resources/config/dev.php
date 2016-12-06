<?php
require __DIR__ . '/prod.php';
$app['debug'] = true;
$app['log.level'] = Monolog\Logger::DEBUG;
$app['db.options'] = array(
    'server' => 'mongodb://localhost:27017',
    'options' => [],
    'driverOptions' => [],
);
