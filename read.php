<?php

    $pdo = new PDO("mysql:host=localhost;dbname=inwonweb", "inwon", "bitnami") or die("PDO creation failure");

    $stm = $pdo->prepare("SELECT * FROM board");
    $stm->execute() or die("execute failed");
    $result = $stm->fetchAll();

    foreach ($result as $row) {
        echo $row['id'];
    }
?>