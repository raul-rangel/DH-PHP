<?php
  include "inc/head.php";
  include "inc/header.php";

  $usuarios = file_get_contents("usuarios.json");
  $usuarios = json_decode($usuarios, true);
?>
  <div class="container">
    <h1>Lista de usuários</h1>
    <table class="table table-horvered">
      <thead>
        <tr class="row">
          <th class="col-md-4">Avatar</th>
          <th class="col-md-4">Nome</th>
          <th class="col-md-4">E-mail</th>
        </tr>
      </thead>           
      <tbody>
        <?php foreach ($usuarios["usuarios"] as $usuario): ?>
          <tr class="row">
              <td class="col-md-4"><img src="<?php echo $usuario['imagem']; ?>" class="img" alt=""></td>
              <td class="col-md-4"><?= $usuario['nome']; ?></td>
              <td class="col-md-4"><?= $usuario['email']; ?></td>
          </tr> 
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php
  include "inc/footer.php";
?>
