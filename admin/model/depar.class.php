<?php

class Depar{
    private $id;
    private $nome;

    public function __construct(){
    
    }
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    }
?>