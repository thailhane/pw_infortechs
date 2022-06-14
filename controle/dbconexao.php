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

    }
