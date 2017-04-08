<?php
declare(strict_types=1);

namespace App\Controllers;

use Silex\Application;

class WelcomeController
{
    public function index(Application $app)
    {
        return $app['twig']->render('welcome.twig');
    }
}
