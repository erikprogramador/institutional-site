<?php

use App\Models\Menu;
use App\Repositories\MenuRepository;

$app['MenuRepository'] = function ($app) {
    return new MenuRepository($app['orm.em'], Menu::class);
};
