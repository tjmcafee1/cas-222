<?php

include 'includes/db.inc.html.php';

if ((isset($_POST['name'])) && (empty ($_POST['honeypot']))){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quescom = $_POST['quescom'];
    $athletevolunteer = $_POST['athletevolunteer'];
    try {
        $sql = 'INSERT INTO contact SET
          name = :name,
          email = :email,
          quescom = :quescom,
          athletevolunteer = :athletevolunteer';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':quescom', $quescom);
        $s->bindValue(':athletevolunteer', $athletevolunteer);
        $s->execute();
    }
    catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include 'includes/error.html.php';
        exit();
    }
    include 'success.html.php';
}   else {
    include 'home/home.html.php';
}