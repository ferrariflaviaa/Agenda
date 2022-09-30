<?php
include_once("templates/header.php");
?>

<div class="container">
  <?php include_once("templates/backbtn.html"); ?>

  <h1 id="main-title">Editar contato</h1>
  <form action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">

    <div class="form-group">
      <label for="name">Nome do contato:</label>
      <input type="text" class="form-control" id="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
    </div>

    <div class="form-group">
      <label for="phone">Telefone do contato:</label>
      <input type="text" class="form-control" id="phone" placeholder="Digite o nome" value="<?= $contact['phone'] ?>" required>
    </div>

    <div class="form-group">
      <label for="observations">Observações</label>
      <input type="text" class="form-control" id="observations" placeholder="Digite o nome" value="<?= $contact['observations'] ?>" required>
    </div>

    <button type="submit">Atualizar</button>

  </form>
</div>
<?php
  include_once("templates/footer.php");
?>