<?php

function my_autoloader($className) {

    $array_paths = [
        '/models/',
        '/components/'
    ];


    foreach ($array_paths as  $path) {
      $path = ROOT . $path . $className . '.php';
      if(is_file($path))
        include_once($path);
    }

}

spl_autoload_register('my_autoloader');