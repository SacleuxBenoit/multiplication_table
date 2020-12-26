<?php
session_start();
include('connection_database.php');

if(!empty($_POST['front']) && !empty($_POST['back'])){
    $get_cards = $bdd->prepare('INSERT INTO addcards(front,back) VALUES(:front,:back)');
    $get_cards->bindParam(':front', $_POST['front']);
    $get_cards->bindParam(':back', $_POST['back']);
    $get_cards->execute();
    header('Location: ../createCards.php');
}else{
    header('Location: ../createCards.php');
}

?>