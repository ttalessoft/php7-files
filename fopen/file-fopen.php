<?php


    // abre um arquivo
    $file = fopen("log.txt", "a+");

    // escreve em um arquivo
    fwrite($file, "teste de escrita \t " . date("Y-m-d H:i:s"). "\n");    

    // fecha o arquivo
    fclose($file);

    echo "criou arquivo!";