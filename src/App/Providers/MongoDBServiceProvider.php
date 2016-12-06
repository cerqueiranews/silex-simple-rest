<?php

namespace App\Providers;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use MongoDB\Client;

class MongoDBServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['db'] = function ($app) {
            $config = [
                'server' => 'mongodb://localhost:27017',
                'options' => [],
                'driverOptions' => [],
            ];

            if (!isset($app['db.config'])) {
                $app['db.config'] = [];
            }

            foreach ($config as $k => $v) {
                if (isset($app['db.config'][$k])) {
                    $config[$k] = $app['db.config'][$k];
                }
            }

            $app['db.config'] = $config;

            $client = new Client(
                $app['db.config']['server'],
                $app['db.config']['options'],
                $app['db.config']['driverOptions']
            );

            return $client;
        };
    }
}
