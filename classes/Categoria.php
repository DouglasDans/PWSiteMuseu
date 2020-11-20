<?php

   class Categoria{
      private $idCategoria;
      private $descCategoria;

      public function getIdCategoria(){
         return $this->idCategoria;
      }

      public function setIdCategoria($idCategoria){
         $this->idCategoria = $idCategoria;
      }

      public function getDescCategoria(){
         return $this->descCategoria;
      }

      public function setDescCategoria($descCategoria){
         $this->descCategoria = $descCategoria;
      }

   }

?>