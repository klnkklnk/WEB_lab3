<?php
session_start();

if (isset($_POST))
{
    $array = [["name", $_POST["name"]],["salary", $_POST["salary"]],
        ["age", $_POST["age"]], ["smth", $_POST["smth"]]];
    $_SESSION["Info"] = $array;

    header('Location: /lab32c.php');
    exit();
}
?>