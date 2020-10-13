<?php

   class Obra{
      private $idObra;
      private $nomeObra;
      private $categoriaObra;
      private $periodoObra;

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

      public function getCategoriaObra(){
         return $this->categoriaObra;
      }

      public function setCategoriaObra($categoriaObra){
         $this->categoriaObra = $categoriaObra;
      }

      public function getPeriodoObra(){
         return $this->periodoObra;
      }

      public function setPeriodoObra($periodoObra){
         $this->periodoObra = $periodoObra;
      }

      public function cadastrar($obra){
         $conexao = Conexao::pegarConexao();
         $stmt = $conexao->prepare("INSERT INTO tbobra (nomeObra, categoriaObra, periodoObra)
                                       VALUES (?,?,?)");

         $stmt->bindParam(1, $obra->getNomeObra());
         $stmt->bindParam(2, $obra->getCategoriaObra());
         $stmt->bindParam(3, $obra->getPeriodoObra());
         $stmt->execute();
         return 'Cadastro realizado com sucesso!';
      }

   }

?>