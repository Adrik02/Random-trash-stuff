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
                <li> <a href="index.php.php">Domov</a> </li>
                <li> <a href="admin.php">Admin</a> </li>
            </ul>
        </div>
    </header>

    <div class="banner">
        <h1>Choose <br> your <br> favorite <br> pizza !</h1>
        <img src="images/pizza.png" alt="">
    </div>

    <div class="sort">
        <form action="" method="post">
            <button class="<?= $press1 ?>" name="type_sort">Typ</button>
            <button class="<?= $press2 ?>" name="price_sort">Cena</button>
            <button class="<?= $press3 ?>" name="size_sort">Veľkosť</button>
            <div id="updown">
                <button class="<?= $sort1 ?>" name="ASC">ASC</button>
                <button class="<?= $sort2 ?>" name="DESC">DESC</button>
            </div>
        </form>
    </div>
    <div class="list">
        <?php 
            foreach ( $select as $value ) {
                echo '<div class="product">';
                echo '<p>ID: '. $value['id'] .'</p>';
                echo '<h3>'. $value['type'] .' Pizza</h3>';
                echo '<h4>'. $value['price'] .' €</h4>';
                echo '<h5>'. $value['size'] .'g</h5>';
                echo '</div>';        
            }
        ?>
    </div>
    <div class="page">
        <form action="" method="post">
            <button type="submit" name="prev">Prev</button>
            <button type="submit" name="next">Next</button>
        </form>
        <?= '<p>page: '. $_SESSION['page'] .'</p>' ?>
    </div>
</body>
<script src="jquery-3.7.0.min.js"></script>
<script src="script.js"></script>
</html>