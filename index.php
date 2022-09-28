<?php
include_once("templates/header.php");
?>

<div class="container">
  <?php if (isset($printMsg) && $printMsg != "") : ?>
    <p id="msg"><?= $printMsg ?></p>
  <?php endif; ?>
  <h1 id="main-title">Minha agenda</h1>
  <?php if (count($contacts) > 0) : ?>
    <table class="table" id="contacts-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($contacts as $contacts):?>
          <tr>
            <th scope="row"><?=  $contacts["id"]?></th>
            <td><?=$contacts["name"]?></td>
            <td><?=$contacts["phone"]?></td>
            <td class="actions">
              <a href="<?=$BASE_URL?>show.php? id=<?= $contacts['id']?>"><i class="fas fa-eye check-icon"></i></a>
              <a href="<?=$BASE_URL?>edit.php? id=<?= $contacts['id']?>"><i class="far fa-edit edit-icon"></i></a>
              <button type="submit"><i class="fas fa-times delete-icon"></i></button> 
          </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?> create.php">clique aqui para adicionar</a>.</p>
  <?php endif; ?>
</div>