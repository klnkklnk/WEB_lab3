<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="lab32cfill.php" method="post">
    <input type="text" name="name" placeholder="Введите данные поля name">
    <input type="text" name="salary" placeholder="Введите данные поля salary">
    <input type="text" name="age" placeholder="Введите данные поля age">
    <input type="text" name="smth" placeholder="Введите данные поля smth">
    <input type="submit" name =  "button">
    <?php
    echo "<br>";
    foreach ($_SESSION["Info"] as $item){
        echo $item[0], " = ", $item[1], "<br>";
    }
    ?>
    </form>
</body>
</html>