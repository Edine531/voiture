<?php
try {
    $strConnection = 'mysql:host=localhost;port=3306;dbname=k-rten';
    $pdo = new PDO($strConnection, 'root', '');
} catch (PDOException $e) {
    $msg = 'ERREUR PDO dans' . $e->getMessage();
    die($msg);
}
