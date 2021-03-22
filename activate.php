<?php
    if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))) {
        header("Location: ./index.php?content=message&alert=hacker-alert");
    }
?>

<div class="container">
    <form action="./index.php?content=activate_script" method="post" class="form-card card">
        <div class="row">
            <div class="col-12 col-sm-6 inputCheck">
                <div class="mb-3 form-group ">
                    <label for="inputPassword" class="form-label">Choose your new password:</label>
                    <input name="password" type="Password" class="form-control" id="inputPassword"
                        aria-describedby="helpPassword" placeholder="Type password" autofocus>
                </div>
                <div class="mb-3 form-group ">
                    <label for="inputPasswordCheck" class="form-label">Re-type your password:</label>
                    <input name="passwordCheck" type="Password" class="form-control" id="inputPasswordCheck"
                        aria-describedby="helpPasswordCheck" placeholder="Type password">
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"] ?>">
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <img id="drag-car" src="./img/unnamed.jpg" alt="">
            </div>
        </div>
    </form>
</div>