<?php

   require_once 'global.php';

   try{
      header("Location: area-restrita/cadastrar-obra.php");
      $obra = new Obra();
      $obra->setNomeObra($_POST['txtNomeObra']);
      $obra->setCategoriaObra($_POST['txtCategoriaObra']);
      $obra->setPeriodoObra($_POST['txtPeriodoObra']);
      echo $obra->cadastrar($obra);
   }
   catch(Exception $e){
      echo '<pre>';
         print_r($e);
      echo '</pre>';
      echo $e->getMessage();
   }

?>