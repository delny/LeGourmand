<?php
class Autoloader 
{
    public static function register()
    {
        spl_autoload_register('self::chargerClasse');
    }
    
    public static function chargerClasse($classe)
    {
        if (preg_match('#Controller$#',$classe))
        {
            if(file_exists('Controller/'.$classe.'.php'))
            {
                require('Controller/'.$classe.'.php');
            }
        }
        elseif (preg_match('#Manager$#',$classe))
        {
            if(file_exists('Model/Manager/'.$classe.'.php'))
            {
                require('Model/Manager/'.$classe.'.php');
            }
        }
        elseif (preg_match('#Router#',$classe))
        {
            if(file_exists('Model/Router/'.$classe.'.php'))
            {
                require('Model/Router/'.$classe.'.php');
            }
        }
        else
        {
            if(file_exists('Model/Entity/'.$classe.'.php'))
            {
                require('Model/Entity/'.$classe.'.php');
            }
        }
    }
}