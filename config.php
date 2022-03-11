<?php

$db_name ='test';
$db_host ='localhost';
$db_user = 'root';
$db_pass = '';

$pdo =new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_user, $db_pass); #nome do banco utilizado, dbname=nomedobanco, host=endereço do banco , usuário e senha para acesso
