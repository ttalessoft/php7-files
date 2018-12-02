<?php

    $images = scandir("img");
    $data = array();

    //var_dump($images);

    foreach ($images as $img) {
        
        // in_array() faz uma busca no array
        if (!in_array($img, array(".",".."))) {
            
            $filename = "img" . DIRECTORY_SEPARATOR . $img;

            $info = pathinfo($filename);

            $info['size'] = filesize($filename) . " bytes";

            $info['modified'] = date("d/M/Y H:i:s", filemtime($filename));

            $info['url'] = "http://localhost/php/php7-files/" . $filename; 

            //var_dump($info);

            array_push($data, $info);
        }
    }

    echo json_encode($data);