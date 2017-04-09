<?php

use Silex\Provider\{
    TwigServiceProvider,
    DoctrineServiceProvider
};
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;

$app->register(new TwigServiceProvider(), require_once __DIR__ . '/views.php');
$app->register(new DoctrineServiceProvider(), require_once __DIR__ . '/database.php');
$app->register(new DoctrineORmServiceProvider(), require_once __DIR__ . '/orm.php');
