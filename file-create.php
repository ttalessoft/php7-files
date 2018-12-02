<?php

    $name = "images";

    if (!is_dir($name)) {

        // cria uma pasta
        mkdir($name);

        echo "O diretório: ". $name . " foi criado!";

    }else{
        
        // remove um diretório
        rmdir($name);
        
        echo "O diretório: " . $name . " já existe! E foi removido!";
    }