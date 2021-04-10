<?php
    session_start();
    include('./pass.php');
    include('./database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <?php
        include('./components/header.php');
    ?>
    
    <div id="indexDesc">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, consequatur. Ut iste tempore quam laboriosam explicabo magnam consequuntur. Officia sint optio voluptates itaque eveniet neque reiciendis sapiente aliquid perferendis tempore.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, dolor atque consectetur possimus iure ratione? Est deleniti, reiciendis modi quos molestias aliquam perspiciatis accusamus sed ratione sunt eos exercitationem. Alias?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quae optio sapiente, ipsam animi dolor ab quisquam. Impedit sit, sint magni optio voluptatum incidunt dignissimos recusandae culpa atque, deleniti non.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ipsa ullam possimus iusto vero accusamus quia in ea quisquam recusandae dolore cumque aliquid fugit sequi, dolorem facere autem. Voluptatibus, cum.
    </div>

    <div id="chooseTable">
        <form action="#" method="post">

            <select name="dropdownTable" id="dropdownTable">
                <option value="1">Table 1</option>
                <option value="2">Table 2</option>
                <option value="3">Table 3</option>
                <option value="4">Table 4</option>
                <option value="5">Table 5</option>
                <option value="6">Table 6</option>
                <option value="7">Table 7</option>
                <option value="8">Table 8</option>
                <option value="9">Table 9</option>
                <option value="10">Table 10</option>
            </select> 

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>