c-dashboard
<?php
    include("./functions.php");
    is_authorised(["Admin", "Root", "Moderator", "Customer"]);
?>