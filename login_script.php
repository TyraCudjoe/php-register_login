<?php
    var_dump($_POST);

    include("./connectdb.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if(empty($email) || empty($password)) {
        header("Location: ./index.php?content=message&alert=login-form-empty");
    }else {
        $sql = "SELECT * FROM `register` WHERE `Email` = '$email'";
        $result = mysqli_query($conn, $sql);
        

        // var_dump(mysqli_num_rows($result));

        if (!mysqli_num_rows($result)) {
            //Email unknown
            header("Location: ./index.php?content=message&alert=email-unknown");
        }else {
            $record = mysqli_fetch_assoc($result);

            // var_dump($record["Activated"]);

            if (!$record["Activated"]) {
                //Not activated account
                header("Location: ./index.php?content=message&alert=not-activated&email=$email");
            }else if (!password_verify($password, $record["Password"])) {
                //No password match
                header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");
            }else {
                //Password match

                $_SESSION["id"] = $record["ID"];
                $_SESSION["userrole"] = $record["Userrole"];

                switch($record["Userrole"]) {
                    case 'Customer':
                        header("Location: ./index.php?content=c-home");
                    break;

                    case 'Root':
                        header("Location: ./index.php?content=r-home");
                    break;

                    case 'Admin':
                        header("Location: ./index.php?content=a-home");
                    break;

                    case 'Moderator':
                        header("Location: ./index.php?content=m-home");
                    break;

                    case 'Default':
                        header("Location: ./index.php?content=home");
                    break;
                }
            }
        }
    }
