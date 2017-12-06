<?php
class Autoloader 
{
    /**
     * register function loadClass as __autoload() implementation
     */
    public static function register()
    {
        spl_autoload_register('self::chargerClasse');
    }

    /**
     * @param $class
     */
    public static function chargerClasse($class)
    {
        /*Require the good file based on the name of the class*/
        if(file_exists('../'.$class.'.php')) {
            require ('../'.$class.'.php');
        } elseif (file_exists('App/'.$class.'.php')){
            require ('App/'.$class.'.php');
        } elseif(file_exists('Controller/'.$class.'.php')){
            require ('Controller/'.$class.'.php');
        } elseif (file_exists('Model/Manager/'.$class.'.php')){
            require ('Model/Manager/'.$class.'.php');
        } elseif (file_exists('View/'.$class.'.php')){
            require('View/'.$class.'.php');
        } elseif (file_exists('Model/Entity/'.$class.'.php')){
            require ('Model/Entity/'.$class.'.php');
        }
    }
}