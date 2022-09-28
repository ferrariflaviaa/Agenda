<?php
  $host = "localhost";
  $dbname = "agenda";
  $user = "root";
  $pass = "";

  try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //ATIVANDO ERRO MODE:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
    //ERRO NA CONEXÃO:
    $erro = $e->getMessage();
    echo "ERRO: $erro";
  }