<?php
 class DatabaseManager 
 {
     protected static function getBDD()
     {
         // connexion bdd
         $sql_host = 'localhost';
         $sql_db = 'legourmand';
         $sql_login = 'legourmand_user';
         $sql_mdp = '8TxWH1psTyoKHdIJ';
         
         $bdd = new PDO('mysql:host='.$sql_host.';dbname='.$sql_db.'', $sql_login, $sql_mdp,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         return $bdd;
     }
     
 }
?>