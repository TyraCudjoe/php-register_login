<?php
    include("./functions.php");
    include("./connectdb.php");
    is_authorised(["Admin", "Root", "Moderator", "Customer"]);

    include("./calculator.class.php");

    $number = new Calculator;
    $number->speed_mph($_POST["speed"]);
?>

