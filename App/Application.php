<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 06/12/2017
 * Time: 14:02
 */

class Application
{
    public function run()
    {
        //autoloader
        require('App/Autoloader.php');
        Autoloader::register();

        //routeur
        $router = new Router();
        $router->routerRequete();
    }
}
