<?php

include 'includes/db.inc.html.php';

if ((isset($_POST['fname'])) && (empty ($_POST['honeypot']))){
    $athletevolun = $_POST['athletevolun'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $econtactname = $_POST['econtactname'];
    $econtactphone = $_POST['econtactphone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $event = $_POST['event'];
    $event2 = $_POST['event2'];
    $comments = $_POST['comments'];
    try {
        $sql = 'INSERT INTO registration SET
          athletevolun = :athletevolun,
          fname = :fname,
          lname = :lname,
          email = :email,
          econtactname = :econtactname,
          econtactphone = :econtactphone,
          gender = :gender,
          age = :age,
          event = :event,
          event2 = :event2,
          comments = :comments';
        $s = $pdo->prepare($sql);
        $s->bindValue(':athletevolun', $athletevolun);
        $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':email', $email);
        $s->bindValue(':econtactname', $econtactname);
        $s->bindValue(':econtactphone', $econtactphone);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':age', $age);
        $s->bindValue(':event', $event);
        $s->bindValue(':event2', $event2);
        $s->bindValue(':comments', $comments);
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