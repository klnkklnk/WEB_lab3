<form action = "lab32bf.php" method = 'post'>
    <input type="text" name="surname" placeholder="Введите вашу фамилию">
    <input type="text" name="name" placeholder="Введите ваше имя">
    <input type="text" name="age" placeholder="Введите ваш возраст">
    <input type="submit" name =  "button">
</form>


<?php
session_start();

if (isset($_POST))
{
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
    exit();
}

?>