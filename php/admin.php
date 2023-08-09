<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once ('conf.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <ul>
                <li> <a href="index.php">Domov</a> </li>
                <li> <a href="admin.php">Admin</a> </li>
            </ul>
        </div>
    </header>
    <div class="admin">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Napiš pizza more"> <br>
            <input type="text" name="type" placeholder="Typ pizze"> <br>
            <input type="text" name="price" placeholder="Cena"> <br>
            <input type="text" name="size" placeholder="Veľkosť/Váha"> <br>
            <button type="submit" name="send">Pošli pizzu</button>
        </form>
    </div>
</body>
</html>