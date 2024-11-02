<?php
    require_once '../autoload.php';
    $id = filter_input(INPUT_GET,'id');
    $fk_id = filter_input(INPUT_GET,'fk-id');
    $tabela = filter_input(INPUT_GET,'tabela');
    
    if($id){
        $con = new Conexao;
        $con->getConexao();
        $con->delete($fk_id,$tabela);
        header("location: admin.php");
    }else{
        header("location: admin.php");
    }



?>

