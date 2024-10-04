
<?php
    spl_autoload_register(function($nome_arquivo){
        if(file_exists('../classes/'.$nome_arquivo.'.php')){
            require'../classes/'.$nome_arquivo.'.php';
        }elseif (file_exists('./classes/'.$nome_arquivo.'.php')){
             require'./classes/'.$nome_arquivo.'.php';
         }//selseif (file_exists('Core/'.$nome_arquivo.'.php')){
        //     require'Catalago-jogos/Core/'.$nome_arquivo.'.php';
        // }
    })


?>