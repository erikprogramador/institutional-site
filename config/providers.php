<?php

use Silex\Provider\TwigServiceProvider;

$app->register(new TwigServiceProvider(), require_once __DIR__ . '/views.php');
