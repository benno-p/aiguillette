<?php

//BDD
$DBHOST = "127.0.0.1";
$PORT = "5432";
$DBNAME = "aiguillette";
$LOGIN = "postgres";
$PASS = "conservatoire";

//SERVEUR
$directory_ = "l-aiguillette-mon-canard";
$root_ = "C:\\wamp64\\www\\git\\l-aiguillette-mon-canard\\";
$root_f = "C:\\wamp64\\www\\git\\l-aiguillette-mon-canard";

$dir_from_localhost = str_replace( DIRECTORY_SEPARATOR.'properties.php','', str_replace($_SERVER['DOCUMENT_ROOT'], "" , realpath(__FILE__)) )  ;
$realpath = realpath(__FILE__);
$docroot = str_replace('/', DIRECTORY_SEPARATOR, $_SERVER['DOCUMENT_ROOT']);
$docroot_= str_replace($docroot, "" , str_replace( DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."properties.php", "" , $realpath ));


$dir_ = "majiic";
$users = " users.users ";
$l_admin = " layers.layers_admin ";
$log = " log.logs ";
$AD_admin = "BP";
$AD_admin_pwd = "JR4Love#";


function unaccent($stripAccents){
    return strtolower(strtr($stripAccents,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'));
  }



?>
