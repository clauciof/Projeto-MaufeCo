<?php

class Conexao{
    private $servidor = " ";
    private $usuario = " ";
    private $senha_ = "";
    private $db = " ";
   
    function __construct() {
        $this->servidor = "127.0.0.1";
        $this->usuario = "root";
        $this->senha_ = "";
        $this->db = "cadastro";
        
    }

   public function get_servidor(){
       return $this->servidor;
    }
   public function get_usuario(){
       return $this->usuario;
    }
   public function get_senha(){
       return $this->senha_;
    }
   public function get_db(){
        return$this->db;
    }
//$conexao = mysqli_connect($servidor, $usuario, $senha_, $db);

}
