<?php
    var_dump($_POST);

    if (empty($_POST["email"])) {
        header("Location:./index.php?content=message&alert=no-email");
    } else {
        include("./connectdb.php");
        include("./functions.php");
        
        $email = sanitize($_POST["email"]);   

        $sql = "SELECT * FROM `register` WHERE `Email` = '$email'";

        $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
       } else {
        $array = mk_password_hash_from_microtime();

        $sql = "INSERT INTO `register` (`ID`,
                                         `Email`,
                                         `Password`,
                                         `Userrole`,
                                         `Activated`)                                         
                VALUES                  (NULL,
                                         '$email',
                                         '{$array["password_hash"]}',
                                         'Customer',
                                         0)";
        
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);


            $to = $email;
            $subject = "Activationlink for your account";
            include("./alt-email.php");

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: no-reply@cararchive.com\r\n";
            $headers .= "Cc: moderater@cararchive.com\r\n";
            $headers .= "Bcc: root@cararchive.com";

            mail($to, $subject, $message, $headers);
            header("Location: ./index.php?content=message&alert=register-succes");

        }else {
            header("Location: ./index.php?content=message&alert=register-error");
        };
       }
    }
?>