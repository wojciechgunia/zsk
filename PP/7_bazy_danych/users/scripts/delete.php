<?php

  if(!empty($_POST["id"]))
  {
    require_once("./connect.php");
    $id = $_POST["id"];
    $baza->query("DELETE FROM `users` WHERE `users`.`id` = ".$id.";");
    if($baza->affected_rows){
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?uid=".$id);
    }
    else {
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?error=".$id);
    }
    $baza->close();
  }
  else {
    header("location: ./../7_5_bazy_tabela_delete_add_edit.php");
  }
 ?>
