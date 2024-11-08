<?php

class Pc{
    private $instancia;

public function __construct()
{
    

}
public function getJogosPc(){
    $dados = array();
    $stmt = $this->instancia->query('SELECT * FROM pc join requisitos_recomendados_pc ON pc.fk_id = requisitos_recomendados_pc.id ORDER BY fk_id DESC');

    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $jogojosn=json_encode($dados);
    // $arq = fopen("dadosjg.json",'w+');
    // fwrite($arq,$jogojosn);
    // fclose($arq);
    return $dados;
   
}
public function getConexao()
{
    $dbname = 'dbjogos';
    $host = '127.0.0.1';
    $user = "root";
    $pas = '';
    try{
        $this->instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$pas);
    }catch(PDOException $e){
        echo "erro".$e->getMessage();
    }
    
}
    public function cadastrarRequisitosPc($os,$processador,$placa_video,$memoria,$armazenamento){
    $stmt = $this->instancia->prepare('INSERT INTO requisitos_recomendados_pc (OS,processador,placa_video,memoria,armazenamento) VALUES (:os,:processador,:placa_video,:memoria,:armazenamento)');
    $stmt->bindValue(':os',$os);
    $stmt->bindValue(':processador',$processador);
    $stmt->bindValue(':placa_video',$placa_video);
    $stmt->bindValue(':memoria',$memoria);
    $stmt->bindValue(':armazenamento',$armazenamento);
    $stmt->execute();
    $fk_id = $this->instancia->lastInsertId();
    return $fk_id;

}
public function cadastrarJogo($nome, $descr, $img,$genero,$fk_id ){
    $stmt = $this->instancia->prepare("INSERT INTO pc (nome, descricao,nome_imagem,fk_id,genero ) values (:nome, :descr, :img,:fk_id,:genero)");
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':descr',$descr);
    $stmt->bindValue(':img',$img);
    $stmt->bindValue(':fk_id',$fk_id);
    $stmt->bindValue(':genero',$genero);
        // $stmt->bindValue(':img',$img);
    $stmt->execute();
   
    
    
}
public function editarJogoPc($id){
    $stmt = $this->instancia->prepare('SELECT p.nome,p.descricao,p.nome_imagem,p.genero,p.id,p.fk_id,r.OS,r.processador,r.placa_video,r.memoria,r.armazenamento FROM pc as p join requisitos_recomendados_pc as r ON p.fk_id = r.id where fk_id = :id');
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $dados = $stmt->fetch();
        return $dados;
    }else{
        header('location: admin.php');
    }
}
public function updateJogosPc($id,$nome,$desc,$img,$genero){
    if($nome == ''&& $desc == '' && $genero == ''){
        header('location: admin.php');
    }else if($nome == '' && $desc !='' && $genero !=''){
        $stmt = $this->instancia->prepare('UPDATE pc SET descricao = :descricao, nome_imagem = :img, genero = :genero WHERE fk_id = :id');
        $stmt->bindValue('descricao',$desc);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':genero',$genero);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }else if($desc != "" && $nome==''  && $genero ==''){
        $stmt = $this->instancia->prepare('UPDATE pc SET  descricao = :descricao,nome_imagem = :img WHERE fk_id = :id');
        $stmt->bindValue('descricao',$desc);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }else if($genero != '' && $nome =='' && $desc == ""){
        $stmt = $this->instancia->prepare('UPDATE pc SET nome_imagem = :img,genero = :genero WHERE fk_id = :id');
        
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':genero',$genero);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }
    else if($nome !='' && $desc == '' && $genero ==''){
        $stmt = $this->instancia->prepare('UPDATE pc SET nome = :nome,  nome_imagem = :img WHERE fk_id = :id');
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }

    else if($nome !='' && $desc != '' && $genero !=''){
        $stmt = $this->instancia->prepare('UPDATE pc SET nome = :nome, descricao = :descricao, nome_imagem = :img, genero = :genero WHERE fk_id = :id');
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue('descricao',$desc);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':genero',$genero);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }


    // $stmt = $this->instancia->prepare('UPDATE pc SET nome = :nome, descricao = :descricao, nome_imagem = :img WHERE fk_id = :id');
    
    //header('location:admin.php');
    
} public function updateRequisitosPc($os,$processador,$placa_video,$memoria,$armazenamento,$id){
    if($os == "" && $processador !=''&& $placa_video != '' && $memoria != '' && $armazenamento != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET  processador =:processador ,placa_video =:placa_video,memoria = :memoria,armazenamento=:armazenamento WHERE id = :id');
       
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

    }else if($processador == ""&& $os !='' && $placa_video != '' && $memoria != '' && $armazenamento != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os ,placa_video =:placa_video,memoria = :memoria,armazenamento=:armazenamento WHERE id = :id');

        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

    }
    else if($placa_video == "" && $memoria != '' && $armazenamento != ''&& $processador != ""&& $os != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os, processador =:processador ,memoria = :memoria,armazenamento=:armazenamento WHERE id = :id');

        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

    } else if($memoria == "" && $placa_video != '' && $armazenamento != ''&& $processador != ""&& $os != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os, processador =:processador ,placa_video =:placa_video,armazenamento=:armazenamento WHERE id = :id');

        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

    }else if($armazenamento == "" && $placa_video != '' && $memoria != ''&& $processador != ""&& $os != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os, processador =:processador ,placa_video =:placa_video,memoria = :memoria WHERE id = :id');
        
        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }else if($armazenamento == "" && $placa_video == '' && $memoria == ''&& $processador == ""&& $os == ''){
        header('location: admin.php');
    }
    else if($armazenamento != "" && $placa_video != '' && $memoria != ''&& $processador != ""&& $os != ''){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os, processador =:processador ,placa_video =:placa_video,memoria = :memoria,armazenamento=:armazenamento WHERE id = :id');
        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        }
    

    // $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_pc SET OS =:os, processador =:processador ,placa_video =:placa_video,memoria = :memoria,armazenamento=:armazenamento WHERE id = :id');
    // $stmt->bindValue(':os',$os);
    // $stmt->bindValue(':processador',$processador);
    // $stmt->bindValue(':placa_video',$placa_video);
    // $stmt->bindValue(':memoria',$memoria);
    // $stmt->bindValue(':armazenamento',$armazenamento);
    // $stmt->bindValue(':id',$id);
    // $stmt->execute();
    // $fk_id = $this->instancia->lastInsertId();
    // return $fk_id;

}

}
?>