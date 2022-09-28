<?php
include_once("templates/header.php");
?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Criar contato</h1>

  <form id="create-form" action="<? $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">

    <div class="form-group">
      <label for="name">Nome do contato</label>
      <input class="form-control" type="text" name="name" placeholder="Digite o nome" required>
    </div>

    <div class="form-group">
      <label for="phone">Telefone do contato</label>
      <input type="text" name="phone" class="form-control" placeholder="Digite o telefone" required>
    </div>

    <div class="form-group">
      <label for="observations">Observações:</label>
      <textarea type="text" name="observations" class="form-control" row="3" placeholder="Insira as observações" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<?php include_once("templates/footer.php") ?>