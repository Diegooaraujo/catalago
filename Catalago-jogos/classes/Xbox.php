<?php
    class Xbox{
        private $instancia;
    
    public function __construct()
    {
        

    }
    public function getJogosXbox(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM xbox join requisitos_recomendados_xbox ON xbox.fk_id = requisitos_recomendados_xbox.id ORDER BY fk_id DESC');

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
        public function cadastrarRequisitosXbox($os,$armazenamento){
        $stmt = $this->instancia->prepare('INSERT INTO requisitos_recomendados_xbox (OS,armazenamento) VALUES (:os,:armazenamento)');
        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->execute();
        $fk_id = $this->instancia->lastInsertId();
        return $fk_id;

    }
    public function cadastrarJogo($nome, $descr, $img,$genero,$fk_id ){
        $stmt = $this->instancia->prepare("INSERT INTO xbox (nome, descricao,nome_imagem,fk_id,genero ) values (:nome, :descr, :img,:fk_id,:genero)");
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':descr',$descr);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':fk_id',$fk_id);
        $stmt->bindValue(':genero',$genero);
            // $stmt->bindValue(':img',$img);
        $stmt->execute();
       
        
        
    }
    public function editarJogoXbox($id){
        $stmt = $this->instancia->prepare('SELECT p.nome,p.descricao,p.nome_imagem,p.genero,p.desenvolvedor,p.id,p.fk_id,r.OS,r.armazenamento FROM xbox as p join requisitos_recomendados_xbox as r ON p.fk_id = r.id where fk_id = :id');
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }else{
            header('location: admin.php');
        }
    }

    public function updateJogosXbox($id,$nome,$desc,$img, $genero,$desenvolvedor){
        // $stmt = $this->instancia->prepare('UPDATE xbox SET nome = :nome, descricao = :descricao, nome_imagem = :img, genero = :genero WHERE fk_id = :id');
        if($nome == ''&& $desc == '' && $genero == ''){
            header('location: admin.php');
        }
        else if($desc != "" && $nome==''  && $genero ==''){
            $stmt = $this->instancia->prepare('UPDATE xbox SET  descricao = :descricao,nome_imagem = :img WHERE fk_id = :id');
            $stmt->bindValue('descricao',$desc);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
        else if($genero != '' && $nome =='' && $desc == ""){
            $stmt = $this->instancia->prepare('UPDATE xbox SET nome_imagem = :img,genero = :genero WHERE fk_id = :id');
            
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':genero',$genero);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
        else if($nome !='' && $desc == '' && $genero ==''){
            $stmt = $this->instancia->prepare('UPDATE xbox SET nome = :nome,  nome_imagem = :img WHERE fk_id = :id');
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
        else if($nome !='' && $desc != '' && $genero !=''){
            $stmt = $this->instancia->prepare('UPDATE xbox SET nome = :nome, descricao = :descricao, nome_imagem = :img, genero = :genero, desenvolvedor = :dev WHERE fk_id = :id');
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue('descricao',$desc);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':genero',$genero);
            $stmt->bindValue(':dev',$desenvolvedor);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
        // $stmt->bindValue(':nome',$nome);
        // $stmt->bindValue('descricao',$desc);
        // $stmt->bindValue(':img',$img);
        // $stmt->bindValue(':genero',$genero);
        // $stmt->bindValue(':id',$id);
        // $stmt->execute();
        //header('location:admin.php');
        
    } public function updateRequisitosXbox($os,$armazenamento,$id){
        if($os == "" && $armazenamento == ''){
            header('location: admin.php');
        }else if($os != '' && $armazenamento != ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_xbox SET OS =:os, armazenamento=:armazenamento Where id = :id');
            $stmt->bindValue(':os',$os);
            $stmt->bindValue(':armazenamento',$armazenamento);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
           
        }else if($os == '' && $armazenamento != ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_xbox SET armazenamento=:armazenamento Where id = :id');
            $stmt->bindValue(':armazenamento',$armazenamento);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }else if($os != '' && $armazenamento == ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_xbox SET OS =:os,  Where id = :id');
            $stmt->bindValue(':os',$os);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
       
    }

}


?>