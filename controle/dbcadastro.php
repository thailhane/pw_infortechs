<?php
// $id = 5;
$pdo = require 'dbconexao.php';
$sql = 'insert into usr(nome, email, sexo, senha) values(?,?,?,?)';
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];

try {
  // $pdo = new PDO('mysql:host=localhost;dbname=dbcad', $username, $password);
 // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $prepare = $pdo->prepare($sql);
  $prepare->bindParam(1, $nome);
  $prepare->bindParam(2, $email);
  $prepare->bindParam(3, $sexo);
  $prepare->bindParam(4, $senha);
  $prepare->execute();

  echo $prepare->rowCount();
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

// $consulta = $pdo->query("SELECT nome, usuario FROM login;");


// while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
//   echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
// }
