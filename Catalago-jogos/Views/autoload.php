
<?php
    spl_autoload_register(function($nome_arquivo){
        if(file_exists('Catalago-jogos/Controllers/'.$nome_arquivo.'.php')){
            require'Catalago-jogos/Controllers/'.$nome_arquivo.'.php';
        }elseif (file_exists('Catalago-jogos/Models/'.$nome_arquivo.'.php')){
            require'Catalago-jogos/Models/'.$nome_arquivo.'.php';
        }elseif (file_exists('Core/'.$nome_arquivo.'.php')){
            require'Catalago-jogos/Core/'.$nome_arquivo.'.php';
        }
    })


?>