<?php
class Router 
{
    public function routerRequete()
    {
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'Home';
        try 
        {
            $this->loadController($action);
        } 
        catch (Exception $e)
        {
            
            $actionController = new ErrorController();

            $actionController->error($e->getMessage());
        }
    }
    
    public function loadController($action)
    {
        if (file_exists('Controller/'.ucfirst($action).'Controller.php'))
        {
            $controllerName = ucfirst($action).'Controller';
            $actionController = new $controllerName();

            $actionController->$action();
        }
        else
        {
            throw new Exception('L\'action '.$action.' est introuvable');
        }
        
    }
}