<?php
    class controller{
        public $dados;
        public $dados2;

        public function __construct()
        {
            $this->dados = array();

        }
        public function carregarViewNoTemplate($nomeView,$dadosModel=array(),$dados2=array())
        {
            $this->dados = $dadosModel;
            $this->dados2 = $dados2;
            extract($dadosModel);
            require './Views/'.$nomeView.'.php';
        }
    }

?>