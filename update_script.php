<?php
    include("./connectdb.php");
    include("./functions.php");
    
    $id = $_POST["ID"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $userrole = $_POST["Userrole"];

    $sql = "UPDATE `register` 
            SET `Email` = '$email', 
                `Password` = '$password', 
                `Userrole` = '$userrole',
            WHERE `ID` = $id;";

    mysqli_query($conn, $sql);
    header("Location: ./index.php?content=message&alert=update_success");
?>