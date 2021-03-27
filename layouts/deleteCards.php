<?php
include('../pass.php');
include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/createCards.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        include('../components/header.php');

        $get_cards = $bdd->query('SELECT * FROM addcards');
        while($show_cards = $get_cards->fetch()){
            ?>
                <div>
                    <p> 
                        <?php echo $show_cards['front'] . " = "  . $show_cards['back']?> 
                        <a href="../database/deleteCards_database.php" class="deleteCards">X</a>
                    </p>
                </div>
            <?php
        }

    ?>

</body>
</html>