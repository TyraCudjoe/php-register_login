<?php
    //Empties $_SESSION array
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);


    //Destroys session_start() file
    session_destroy();

    header("Location: ./index.php?content=message&alert=logout");
?>