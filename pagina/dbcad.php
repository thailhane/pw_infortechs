<?php
$id = 5;

try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbcad', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('DELETE FROM usuario');
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>

<?php
$consulta = $pdo->query("SELECT nome, usuario FROM login;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
}
?> 