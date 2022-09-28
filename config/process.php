<?php 
  session_start();

  include_once("connection.php");
  include_once("url.php");

  $id;

  if(!empty($_GET)){
    $id = $_GET["id"];
  }

  //Retorna dado de um post específico
  if(!empty($id)){
    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $contact = $stmt->fetch();

    

  }else{
    //Retorna todos os contatos
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
  }

  $contacts = [];

  $query = "SELECT * FROM contacts";

  $stmt = $conn -> prepare($query);

  $stmt-> execute();

  $contacts = $stmt->fetchAll();
