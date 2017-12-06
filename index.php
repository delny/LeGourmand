<?php
/*Start session*/
session_start();

/*Run Application*/
require('App/Application.php');
$myApp = new Application();
$myApp->run();
