<?php

   class Obra{
      private $idObra;
      private $nomeObra;
      private $anoObra;
      private $idCategoria;
      private $idPeriodo;
      private $idAutor;

      public function getIdObra(){
         return $this->idObra;
      }

      public function setIdObra($idObra){
         $this->idObra = $idObra;
      }

      public function getNomeObra(){
         return $this->nomeObra;
      }

      public function setNomeObra($nomeObra){
         $this->nomeObra = $nomeObra;
      }

      public function getIdCategoria(){
         return $this->idCategoria;
      }

      public function setIdCategoria($idCategoria){
         $this->IdCategoria = $idCategoria;
      }

      public function getIdPeriodo(){
         return $this->idPeriodo;
      }

      public function setIdPeriodo($idPeriodo){
         $this->idPeriodoObra = $idPeriodo;
      }

      public function getAnoObra(){
         return $this->anoObra;
      }

      public function setAnoObra($anoObra){
         $this->anoObra = $anoObra;
      }

      public function getIdAutor(){
         return $this->idAutor;
      }

      public function setIdAutor($idAutor){
         $this->idAutor = $idAutor;
      }

      public function cadastrar($obra){
         $conexao = Conexao::pegarConexao();
         $stmt = $conexao->prepare("INSERT INTO tbobra (nomeObra, categoriaObra, periodoObra, anoObra)
                                       VALUES (?,?,?,?)");

         $stmt->bindParam(1, $obra->getNomeObra());
         $stmt->bindParam(2, $obra->getCategoriaObra());
         $stmt->bindParam(3, $obra->getPeriodoObra());
         $stmt->bindParam(4, $obra->getAnoObra());
         $stmt->execute();
         return 'Cadastro realizado com sucesso!';
      }

   }

?>