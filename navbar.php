<?php
  if (isset($_GET["content"])) {
    $active = $_GET["content"];
  } else {
    $active = "";
  }
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Navbar</a>
    <button class="navbar-toggler navbar-dark ml-auto" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-dark" id="navbarNav">
      <ul class="navbar-nav main-nav">
        <?php  
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'Admin':
              echo '<li class="nav-item '; echo (in_array($active, ["a-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=a-home">Home</a>
                    </li>';
            break;

            case 'Root':
              echo '<li class="nav-item '; echo (in_array($active, ["r-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-home">Home</a>
                    </li>';
            break;

            case 'Moderator':
              echo '<li class="nav-item '; echo (in_array($active, ["m-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=m-home">Home</a>
                    </li>';
            break;

            case 'Customer':
              echo '<li class="nav-item '; echo (in_array($active, ["c-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=c-home">Home</a>
                    </li>';
            break;

            default:
              echo '<li class="nav-item '; echo (in_array($active, ["c-home", ""])) ? "active" : ""; echo '">
                        <a class="nav-link" href="./index.php?content=c-home">Home</a>
                      </li>';
            break;
          }
        }else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=home">Home</a>
                </li>';
        }
      ?>

        <li class="nav-item <?php if ( $active == "archive" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=archive">Specials</a>
        </li>
        <li class="nav-item <?php if ( $active == "concept" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=concept">Concept cars</a>
        </li>
        <li class="nav-item <?php if ( $active == "oldtimers" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=oldtimers" tabindex="-1">Oldtimers</a>
        </li>
        
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'Admin':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active,["a-users", "a-reset_password"])) ? "active" : ""; echo '" role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item '; echo ($active == "read") ? "active" : ""; echo '" href="./index.php?content=read">Users</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=pre_update">Update</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=calculator">Calculator</a>
                      </div>
                    </li>';
            break;

            case 'Root':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["read", "pre_update"])) ? "active" : ""; echo '" role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Root workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item '; echo ($active == "read") ? "active" : ""; echo '" href="./index.php?content=read">Users</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=pre_update">Update</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=calculator">Calculator</a>
                      </div>                      
                    </li>';
            break;

            case 'Customer':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["c-dashboard", "news"])) ? "active" : ""; echo '" role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Options
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item '; echo ($active == "c-dashboard") ? "active" : ""; echo '" href="./index.php?content=c-dashboard">Dasboard</a>
                        <a class="dropdown-item '; echo ($active == "news") ? "active" : ""; echo '" href="./index.php?content=news">News</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=calculator">calculator</a>
                      </div>                      
                    </li>';
            break;

            case 'Moderator':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["read", "pre_update"])) ? "active" : ""; echo '" role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Root workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item '; echo ($active == "read") ? "active" : ""; echo '" href="./index.php?content=read">Users</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=pre_update">Update</a>
                        <a class="dropdown-item '; echo ($active == "pre_update") ? "active" : ""; echo '" href="./index.php?content=calculator">calculator</a>
                      </div>                      
                    </li>';
            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ( $active == "logout" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">Log out</a>
                </li>';
        }else {
          echo '<li class="nav-item '; echo ( $active == "register" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=register">Register</a>
                </li>
                <li class="nav-item '; echo ( $active == "login" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">Log in</a>
                </li>';
        }
        ?>
      </ul>
    </div>


  </div>

</nav>