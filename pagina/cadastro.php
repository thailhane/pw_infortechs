<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css">
  <title>Cadastro de Cliente</title>
</head>

<body>
  <header>
    <h1>img</h1>
    <a href="../pagina/login.php">Login</a>
  </header>
  <div class="container">
    <form method="post" action="../controle/dbcadastro.php">
      <h1>Cadastre-se: </h1>
      <input name="nome" type="text" placeholder="Nome" required="required">
      <br><br>
      <br><br>
      <input name="email" type="Email" placeholder="Email" required="required">
      <br><br>
      Sexo: <?php
            $sexo = array('Feminino', 'Masculino', 'Outro');
            ?>
      <select name="sexo">
        <?php
        foreach ($sexo as $valor) {
        ?>
          <option value="<?php echo $valor; ?>">
            <?php echo $valor; ?>

          </option>
        <?php
        }
        ?>
      </select>
      <br><br>
      <input name="senha" type="password" placeholder="senha" required="required">
      <br><br>
      <input class="button" type="submit" value="CADASTRAR">
    </form>
  </div>
</body>