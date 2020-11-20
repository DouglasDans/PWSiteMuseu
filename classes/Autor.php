<?php

   class Autor{
      private $idAutor;
      private $nomeAutor;
      private $dataNascAutor;

      public function getIdAutor(){
         return $this->idAutor;
      }

      public function setIdAutor($idAutor){
         $this->idAutor = $idAutor;
      }

      public function getNomeAutor(){
         return $this->nomeAutor;
      }

      public function setNomeAutor($nomeAutor){
         $this->nomeAutor = $nomeAutor;
      }

      public function getDataNascAutor(){
         return $this->dataNascAutor;
      }

      public function setNascAutor($dataNascAutor){
         $this->dataNascAutor = $dataNascAutor;
      }

   }

?>