<?php
class Controller 
{
    protected function render(Array $donnes_vue)
    {
        extract($donnes_vue);
        require('View/gabarit.php');
    }
}