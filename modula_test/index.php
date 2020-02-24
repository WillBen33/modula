<?php

// On démarre la session
session_start();
//var_dump($_SESSION);

use Controllers\IndexController;

require_once ("vendor/autoload.php");

try {
    // Appel du contrôleur par défaut
    $class = "Controllers\\" . (isset($_GET['c']) ? ucfirst($_GET['c']) . 'Controller' : 'IndexController');
    $target = isset($_GET['t']) ? $_GET['t'] : "index";
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $getParams = isset($_GET['params']) ? $_GET['params'] : null;
    $postParams = isset($_POST['params']) ? $_POST['params'] : null;
    $params = [
        "get"  => $getParams,
        "post" => $postParams
    ];

    // Lors d'un appel de Class, on l'affiche si elle existe
    if (class_exists($class, true)) {
        $class = new $class();
        if (in_array($target, get_class_methods($class))) {
            call_user_func_array([$class, $target], $params);
        } else {
            call_user_func([$class, "index"]);
        }
        
    // Sinon on renvoie une erreur
    } else {
        require('views/error404.php');
    }

} catch (\Exception $exception) {
    require('views/error500.php');
}