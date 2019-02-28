<?php
    try
        {
            $pdo = new PDO('mysql:host=localhost;dbname=tylermca_aithmse', 'tylermca_aithmse', 'Welcomeme12!');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');
        }
        catch (PDOException $e)
        {
            $error = 'Unable to connect.'  . $e->getMessage();
            include 'error.html.php';
            exit();
        }
?>