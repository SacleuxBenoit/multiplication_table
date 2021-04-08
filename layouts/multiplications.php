<?php
    session_start();
    include('../pass.php');
    include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <?php
        include('../components/header.php');
        $get_cards = $bdd->query('SELECT front,back FROM addcards ORDER BY RAND() LIMIT 1');
        $get_cards->execute();
        while($display_cards = $get_cards->fetch()){
            ?>
                <div class="divButton">
                    <button  onclick="buttonBackVisible()" class="buttonFront"><?php echo $display_cards['front'] ?></button>
                    <button  onclick="buttonBackHidden()" id="buttonBackHidden" class="buttonBack"><?php echo $display_cards['back'] ?></button>
                </div>
            <?php
        }
    ?>

<button id="refresh" onclick="document.location.reload(false)" class="buttonNext">Next</button>

<script src="../js/script.js"></script>
</body>
</html>