<?php
include_once('Conexao.php');
$stmt = new Conexao;
;

if(isset ($_POST['nome'])){
    $tabela = addslashes($_POST['tabela']);
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $img = ($_FILES['img']);
    $nome_img = addslashes($_FILES['img']['name']);
    print_r($nome_img);
    
    

    move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img'.$nome_img);
    $stmt->getConexao();
    $stmt->cadastrarJogo($nome,$descricao,$tabela,$nome_img);
    
}else{
    
}



//array com esxtensões permitidas
$_UP['exntensões'] = array('png','jpg','jpeg')
?>

?>