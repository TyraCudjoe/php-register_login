<?php
    include("./connectdb.php");
    include("./functions.php");
    is_authorised(["Admin", "Root", "Moderator"]);

    $sql = "SELECT * FROM `register`";
    $result = mysqli_query($conn, $sql);

    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)) {
      $records .= "<tr>
                    <th scope='row'>". $record["ID"] ."</th>
                    <td>" . $record["Email"] . "</td>
                    <td>". $record["Password"] ."</td>
                    <td>". $record["Userrole"] ."</td>
                    <td>". $record["Activated"] ."</td>
                    <td>
                            <a href='./index.php?content=update&id=". $record["ID"] . "'>
                                <img src='./img/icons/b_edit.png' alt='pencil'>
                            </a>
                        </td>
                        <td>
                            <a href='./index.php?content=delete&id=". $record["ID"] . "'>
                                <img src='./img/icons/b_drop.png' alt='cross'>
                            </a>
                        </td>       
                  </tr>";
    }

?>

<div class="container">
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">userrole</th>
        <th scope="col">activated</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php echo $records ?>
    </tbody>
  </table>
</div>
