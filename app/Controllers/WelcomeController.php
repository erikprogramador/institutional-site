<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Menu;
use Silex\Application;

class WelcomeController
{
    public function index(Application $app)
    {
        $menus = $app['orm.em']->getRepository(Menu::class)->findBy([]);
        return $app['twig']->render('welcome.twig', compact('menus'));
    }
}
