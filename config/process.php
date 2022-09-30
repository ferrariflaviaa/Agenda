<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if ((!empty($data))) {

  //CRIAR CONTATO:
  if ($data["type"] === "create") {
    $name = $data["name"];
    $phone = $data["phone"];
    $observations = $data["observations"];

    $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato criado com sucesso!";
      
    } catch (PDOException $e) {
      //VERIFICAR ERRO:
      $erro = $e->getMessage();
      echo "Erro: $erro";
    }
  }
  // Redirect HOME
  header("Location: " . $BASE_URL . "../index.php");
} else {

  $id;

  if (!empty($_GET)) {
    $id = $_GET["id"];
  }

  //Retorna dado de um post específico
  if (!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $contact = $stmt->fetch();
  } else {
    //Retorna todos os contatos
    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
  }
}

//FECHAR CONEXÃO:
$conn = null;
