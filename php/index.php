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
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-down.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-up.css' rel='stylesheet'>
</head>
<body>
    <a class="link" href="admin.php">Admin</a>
    <div class="sort">
        <form action="" method="post">
            <button class="<?= $press1 ?>" name="type_sort">Typ</button>
            <button class="<?= $press2 ?>" name="price_sort">Cena</button>
            <button class="<?= $press3 ?>" name="size_sort">Veľkosť</button>
            <div id="updown">
                <button class="<?= $sort1 ?>" name="ASC"><i class="gg-arrow-down"></i>ASC</button>
                <button class="<?= $sort2 ?>" name="DESC"><i class="gg-arrow-up"></i>DESC</button>
            </div>
        </form>
    </div>
    <div class="list">
        <?php 
            foreach ( $select as $value ) {
                echo '<div class="product">';
                echo '<p>ID: '. $value['id'] .'</p>';
                echo '<p>Pizza '. $value['type'] .'</p>';
                echo '<p>'. $value['price'] .'€</p>';
                echo '<p>'. $value['size'] .'g</p>';
                echo '</div>';        
            }
        ?>
    </div>
    <form action="" method="post">
        <button type="submit" name="prev">Prev</button>
        <button type="submit" name="next">Next</button>
    </form>
</body>
<script src="jquery-3.7.0.min.js"></script>
<script src="script.js"></script>
</html>
