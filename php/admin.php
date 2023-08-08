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
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name">
        <input type="text" name="type">
        <input type="text" name="price">
        <input type="text" name="size">
        <button type="submit" name="send">Send</button>
    </form>
    <a href="index.php">Home</a>
</body>
</html>