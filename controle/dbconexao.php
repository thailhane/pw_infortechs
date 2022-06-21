 <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=dbcad', 'root', '');

        header('location:../index.php');
        return $pdo;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();

    }
