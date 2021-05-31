<?php
    include("./functions.php");
    is_authorised(["Admin", "Root", "Customer", "Moderator"]);
?>

<div class="container">
    <div class="row">
        <form action="./index.php?content=calculator_script" method="POST">
            <div class="card col-5 kmhCard">
                <div>
                    <label for="inputNumber" class="form-label">Km/h to mph and vice versa</label>
                    <div id="numberHelpBlock" class="form-text">
                        Type in any speed in km/h per hour and find out what the speed is in mph.
                    </div>
                    <input type="number" id="inputNumber" name="speed" class="form-control"
                        aria-describedby="numberHelpBlock">
                    <button type="submit" name="submit" class="btn btn-dark mt-3">submit</button>
                </div>
            </div>
        </form>

    </div>
</div>