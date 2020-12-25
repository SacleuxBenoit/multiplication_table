<?php
session_start();
include('connection_database.php');

$get_cards = $bdd->prepare('INSERT INTO addcards(front,back) VALUES(:front,:back)');
$get_cards->bindParam(':front', $_POST['front']);
$get_cards->bindParam(':back', $_POST['back']);
$get_cards->execute();
?>