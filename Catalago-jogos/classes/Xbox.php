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
       
        exit;
        
    }
    public function editarJogoXbox($id){
        $stmt = $this->instancia->prepare('SELECT p.nome,p.descricao,p.nome_imagem,p.genero,p.id,p.fk_id,r.OS,r.processador,r.placa_video,r.memoria,r.armazenamento FROM xbox as p join requisitos_recomendados_xbox as r ON p.fk_id = r.id where fk_id = :id');
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }else{
            header('location: admin.php');
        }
    }

    public function updateJogosXbox($id,$nome,$desc,$img){
        $stmt = $this->instancia->prepare('UPDATE xbox SET nome = :nome, descricao = :descricao, nome_imagem = :img WHERE id = :id');
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue('descricao',$desc);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        //header('location:admin.php');
        
    } public function updateRequisitosXbox($os,$armazenamento,$id){
        $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_xbox SET OS =:os,armazenamento=:armazenamento) Where id = :id');
        $stmt->bindValue(':os',$os);
        // $stmt->bindValue(':processador',$processador);
        // $stmt->bindValue(':placa_video',$placa_video);
        // $stmt->bindValue(':memoria',$memoria);
         $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $fk_id = $this->instancia->lastInsertId();
        return $fk_id;
    
    }

}


?>