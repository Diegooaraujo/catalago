<?php
    require_once './classes/Conexao.php';
    $id = filter_input(INPUT_GET,'id');
    $fk_id = filter_input(INPUT_GET,'fk_id');
    
    if($id){
        $con = new Conexao;
        $con->getConexao();
        $con->delete($id,$fk_id);
        header("location: admin.php");
    }else{
        header("location: admin.php");
    }



?>

