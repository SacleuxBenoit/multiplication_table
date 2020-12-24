<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/createCards.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('components/header.php')
    ?>
<div class="divForm"> 
    <form action="#" method="post">

        
            <p>
                <label for="front">Front :</label>
                <input type="text" name="front" id="front">
            </p>

            <p>
                <label for="back">Back :</label>
                <input type="text" name="back" id="back">
            </p>

            <p>
                <input type="submit" value="submit">
            </p>
    </form>
    </div>

</body>
</html>