<?php
    require_once 'Conexao.php';
    $id = filter_input(INPUT_GET,'id');
    if($id){
        $con = new Conexao;
        $con->getConexao();
        $con->delete($id);
        header("location: admin.php");
    }else{
        header("location: admin.php");
    }



?>

