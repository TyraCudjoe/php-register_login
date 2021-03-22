<?php
    include("./connectdb.php");
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordCheck = sanitize($_POST["passwordCheck"]);

    if (empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
        header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
    }elseif (strcmp($password, $passwordCheck)) {
        header("Location: ./index.php?content=message&alert=no-match&id=$id&pwh=$pwh");
    } else {
        
        $sql = "SELECT * FROM `register` WHERE `ID` = $id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {

            $record = mysqli_fetch_assoc($result);
            
            if ($record["Activated"]) {
                header("Location: ./index.php?content=message&alert=already-active");
            }else {
                if (!strcmp($record["Password"], $pwh)) {

                    $password_hash = password_hash($password, PASSWORD_BCRYPT);
        
                    $sql = "UPDATE  `register` 
                            SET     `Password` = '$password_hash',
                                    `Activated`= 1
                            WHERE   `ID` = $id
                            AND     `Password` = '$pwh'";
                    
                    if (mysqli_query($conn, $sql)){
                        header("Location: ./index.php?content=message&alert=update-succes");
                    }else {
                        header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
                    }
                }else {
                    header("Location: ./index.php?content=message&alert=no-match-pwh");
                }
            }
        }else {
            header("Location: ./index.php?content=message&alert=no-id-pwh-match");
        }
    }
?>