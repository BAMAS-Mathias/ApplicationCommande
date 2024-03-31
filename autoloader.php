<?php
function my_autoload(string $class): void {
    $class_path = str_replace( '\\', '/', $class);
    $class_path = explode('/',$class_path);
    $newClass_path = "";
    $className = "";

    foreach ($class_path as $section){
        if($section != $class_path[count($class_path) - 1]){
            $newClass_path .= strtolower($section) . '/';
        }else{
            $className = $section;
        }
    }

    /* Le fichier de la classe commence par une majuscule */
    if(file_exists('./' . $newClass_path . $className . '.php')){
        require_once  './' . $newClass_path . $className . '.php';
    }

}

spl_autoload_register('my_autoload');