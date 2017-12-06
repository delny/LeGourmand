<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 06/12/2017
 * Time: 13:46
 */

class View
{
    /**
     * @param $viewName
     * @param $params
     */
    public function createView($viewName,$params)
    {
        $viewFile = 'View/vue'.ucfirst($viewName).'.php';
        extract($params);
        if(file($viewFile)){
            require ($viewFile);
        } else {
            $error = 'La vue '.$viewName.' n\'est pas disponible';
            require ('View/vueErreur.php');
        }
        require ('View/gabarit.php');
    }
}