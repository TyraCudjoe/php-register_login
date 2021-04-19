<?php
    $id = $_GET["id"];

    include("./connectdb.php");
    include("./functions.php");
    is_authorised(["Root", "Admin", "Moderator"]);

    $sql = "SELECT * FROM `register` WHERE `ID` = $id";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);

?>



<div class="container">
    <form action="./index.php?content=update_script" method="post" class="form-card card">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="mb-3 form-group inputRegister">
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="helpEmail"
                        placeholder="name@example.com" value="<?php echo $record["Email"] ?>" autofocus>
                    <label for="inputPassword" class="form-label mt-3">Password:</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="helpPassword"
                        placeholder="password123" value="<?php echo $record["Password"] ?>" disabled>
                    <select class='form-select mt-3' id='floatingSelect' aria-label='Floating label select example' name='userrole'>
                        <option selected>Open this select menu</option>
                        <option value='Root' <?php if($record["Userrole"] == "Root") {echo "selected"; } ?>>Root</option>
                        <option value='Admin' <?php if($record["Userrole"] == "Admin") {echo "selected"; } ?>>Admin</option>
                        <option value='Moderator' <?php if($record["Userrole"] == "Moderator") {echo "selected"; } ?>>Moderator</option>
                        <option value='Customer' <?php if($record["Userrole"] == "Customer") {echo "selected"; } ?>>Customer</option>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="ID">
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <img id="drag-car" src="./img/unnamed.jpg" alt="">
            </div>
        </div>
    </form>
</div>