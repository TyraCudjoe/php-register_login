<?php 
    // var_dump($_GET);

    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email = (isset($_GET["email"]))? $_GET["email"]: "";

    switch ($alert) {
        case "no-email" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    No email adress was entered.
                    Try again...
                  </div>';
            header("Refresh: 3.5; ./index.php?content=register");
        break;

        case "emailexists" :
            echo '<div class="alert alert-info mt-4 w-50 mx-auto text-center" role="alert">
                    The email you entered already exits in our system.
                    Try another email...
                  </div>';
            header("Refresh: 3.5; ./index.php?content=register");
        break;

        case "register-error" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Something wrong. Try agian later or contact the customer service...
                  </div>';
            header("Refresh: 3.5; ./index.php?content=register");
        break;

        case "register-succes" :
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    You have succesfully registered. You will receive an activation link in your email. 
                    <br>
                    You are being redirected to the login page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "hacker-alert" :
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    The page you are trying to reach is not available. You are being redirected to the home page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=home");
        break;

        case "password-empty" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    One or more inputs have not been filled. Try again.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;

        case "no-match" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    Passwords are not the same. Please try again.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;

        case "no-id-pwh-match" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    You are not registered in the database. You are being redirected to the register page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=register");
        break;

        case "update_success" :
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Updating went succesfully. You are being redirected to the users page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=read");
        break;

        case "update-error" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Registering failed. Try again.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=update&id=$id");
        break;

        case "already-active" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Your account is already active. Log in  with your self chosen password and email.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "no-match-pwh" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Your activation link information is not correct. Try registering again.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=register");
        break;

        case "login-form-empty" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    You have not entered info in one of the two inputs.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "email-unkown" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    The email you entered is not in our system. Try again with another email.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "not-activated" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Your account has not been activated. Check your mail <span class="badge bg-danger p-2">'. $email .'</span> for the activation link.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "no-pw-match" :
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    The password for the email <span class="badge bg-danger p-2">'. $email .'</span> is not correct, try again.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=login");
        break;

        case "logout" :
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    You are logged out. You are being redirected to the home page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=home");
        break;

        case "auth-error" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    You are not logged in. Youre being redirected to the home page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=home");
        break;

        case "auth-error-user" :
            echo '<div class="alert alert-warning mt-4 w-50 mx-auto text-center" role="alert">
                    You do not have rights to visit this page. You are being redirected to the home page.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=home");
        break;

        case "delete_succes" :
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    User has been succesfully deleted.
                  </div>';
            header("Refresh: 3.5; ./index.php?content=pre_update");
        break;

        default:
            header("Location: ./index.php?content=home");
        break;
    }
?>