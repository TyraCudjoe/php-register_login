<?php

    include("./connectdb.php");
    include("./functions.php");

    $id = intval($_GET["id"]);

    $sql = "DELETE FROM `register` WHERE `ID` = $id";

    mysqli_query($conn, $sql);
    header("Location: ./index.php?content=message&alert=delete_succes");

?>