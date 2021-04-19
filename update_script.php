<?php
    include("./connectdb.php");
    include("./functions.php");
    
    $id = $_POST["ID"];
    $email = $_POST["email"];
    $userrole = $_POST["userrole"];

    $sql = "UPDATE `register` 
            SET `Email` = '$email',
                `Userrole` = '$userrole'
            WHERE `ID` = $id;";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./index.php?content=message&alert=update_success");
    } else {
        header("Location: ./index.php?content=message&alert=update-error");
    }
?>