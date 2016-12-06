<?php
$app['log.level'] = Monolog\Logger::ERROR;
$app['api.version'] = "v1";
$app['api.endpoint'] = "/api";

/**
 * SQLite database file
 */
//$app['db.options'] = array(
//    'driver' => 'pdo_sqlite',
//    'path' => realpath(ROOT_PATH . '/app.db'),
//);

/**
 * MongoDb
 */
$app['db.options'] = array(
    'server' => 'mongodb://localhost:27017',
    'options' => [],
    'driverOptions' => [],
);

/**
 * MySQL
 */
//$app['db.options'] = array(
//  "driver" => "pdo_mysql",
//  "user" => "root",
//  "password" => "root",
//  "dbname" => "prod_db",
//  "host" => "prod_host",
//);
