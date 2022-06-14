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
    <img src="../img/hp.png" width="20%" href="">
    <a href="../pagina/login.php">Login</a>
  </header>
  <div class="container">
    <form method="post" action="../controle/dbcadastro.php">
      <h2>Cadastre-se: </h2>
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
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <div class="contner">
        <a href="https://www.instagram.com/hpeletromoveis_caririacu/" ><img src="../img/ins.jpg" width="4%"></a>
        <a href="#" ><img src="../img/fc.png" width="4%"></a>
        <a href="#" ><img src="../img/tt.png" width="4%"></a>
  </div>
</body>