 <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=dbcad', 'root', '');

        echo 'sucesso';
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $stmt = $pdo->prepare('INSERT INTO minhaTabela (usr) VALUES(:usr)');
        // $stmt->execute(array(':nome' => 'Usuario'));
        // echo $stmt->rowCount();
        return $pdo;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();

        // $nome = "Novo nome do Usuario";
        // $sobrenome = "Novo sobrenomenome do Usuario";
        // try {
        //     $pdo = new PDO('mysql:host=localhost;dbname=floricultura', $username, $password);
        //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //     $stmt = $pdo->prepare('UPDATE usuario SET nome = :nome SET sebrenome = :sobrenome SET email = :email SET sexo = :sexo WHERE senha = :senha');
        //     $stmt->execute(array(':nome' => $nome,  ':sobrenome' => $sobrenome,   ':email' => $email,   ':sexo' => $sexo,   ':senha' => $senha));
        //     echo $stmt->rowCount();
        // } catch (PDOException $e) {
        //     echo 'Error: ' . $e->getMessage();
        // }
    }
