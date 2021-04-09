<?php
session_start();
include('connection_database.php');

if(!empty($_POST['operation']) && !empty($_POST['result']) && !empty($_POST['tableNumber'])){
    $get_cards = $bdd->prepare('INSERT INTO addcards(tableNumber,operation,result) VALUES(:tableNumber, :operation, :result)');
    $get_cards->bindParam(':tableNumber', $_POST['tableNumber']);
    $get_cards->bindParam(':operation', $_POST['operation']);
    $get_cards->bindParam(':result', $_POST['result']);
    $get_cards->execute();
    header('Location: http://localhost:8888/test/multiplication_table/createCards.php');
}else{
    header('Location: http://localhost:8888/test/multiplication_table/createCards.php');
}

?>