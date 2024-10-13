<?php



if(isset ($_POST['nome'])){
    $tabela = addslashes($_POST['tabela']);
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $img = ($_FILES['img']);
    $nome_img = addslashes($_FILES['img']['name']);
    $genero = addslashes($_POST['genero']);

    $os = addslashes($_POST['os']);
    $processador = addslashes($_POST['processador']);
    $placa_video = addslashes($_POST['placa']);
    $memoria = addslashes($_POST['memoria']);
    $armazenamento = addslashes($_POST['armazenamento']);


    if($tabela == 'nitendo'){
        require_once'../classes/Nitendo.php';
        $conn = new Nitendo;
        $conn->getConexao();
        $fk_id = $conn->cadastrarRequisitosNitendo($os,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_nitendo/'.$nome_img);
        $conn->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");

    }
    elseif($tabela == 'playstation'){
        require_once '../classes/Conexao.php';
        $stmt = new Conexao;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitos($os,$processador,$placa_video,$memoria,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_playstation'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");
    }elseif($tabela == 'xbox'){
        require_once '../classes/Xbox.php';
        $stmt = new Xbox;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosXbox($os,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_xbox/'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header('Location:admin.php');
    }elseif($tabela == 'pc'){
        require_once '../classes/Pc.php';
        $stmt = new Pc;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosPc($os,$processador,$placa_video,$memoria,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_pc/'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");
    }
    
    

    
    
}else{
    
}



//array com esxtensões permitidas
// $_UP['exntensões'] = array('png','jpg','jpeg')
?>

?>