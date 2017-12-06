<?php

class ErrorController extends Controller
{
    /**
     * @param $error
     */
    public function error($error)
    {
        $this->renderView('erreur',[
           'error' => $error,
        ]);
    }
}
