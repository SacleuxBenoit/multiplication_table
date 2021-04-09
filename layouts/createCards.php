<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createCards.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        include('../components/header.php')
    ?>

<div class="divForm"> 
    <form action="../database/addCards.php" method="post">
        <p>
            <label for="operation">operation :</label>
            <input type="text" name="operation" id="operation">
        </p>

        <p>
            <label for="result">result :</label>
            <input type="text" name="result" id="result">
        </p>

        <p>
            <label for="tableNumber">table number :</label>
            <input type="text" name="tableNumber" id="tableNumber">
        </p>

        <p>
            <input type="submit" value="submit">
        </p>
    </form>
</div>

</body>
</html>