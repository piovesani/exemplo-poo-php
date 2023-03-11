<?php
spl_autoload_register(function($class){

    $baseDir = __DIR__.'/'; //se houver pastas nos arquivos de classe concatenar aqui

    $file = $baseDir.str_replace('\\', '/', $class.'.php'); 

    if(file_exists($file)){

        require $file;
    }
    else{
        echo 'falha ao carregar autoload '.$file;
    }
});

?>