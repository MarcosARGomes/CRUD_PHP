<?php
require 'config.php';

#RECEBENDO AS INFORMAÇÕES
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name'); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){

    $sql = $pdo->prepare("UPDATE usuários SET nome =:name, email= :email WHERE id = :id");
   #enviando os itens da query
   $sql->bindValue(':name', $name);
   $sql->bindValue(':email', $email);
   $sql->bindValue(':id', $id);
   $sql->execute();

   header("Location: index.php");
    exit;
    
}else{
    header("Location: adicionar.php");
    exit;
}
