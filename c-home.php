<?php
    include("./functions.php");
    is_authorised(["Admin", "Root", "Moderator", "Customer"]);
?>

<div class="container">
    <div class="card" id="welcomeCard">
        <div class="card-body">
            <p>Welcome back</p>
        </div>
    </div>

    <section>
        <div class="row mt-4">
            <div class="col-6">
                <div class="card cardCus" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Dashboard</h5>
                        <p class="card-text">Click here to go the the dashboard.</p>
                        <p class="card-text">Here you will find your personal information and messages meant for only you.</p>
                        <a href="./index.php?content=c-dashboard" class="btn btn-dark">Go to dashboard.</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card cardCus" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">News</h5>
                        <p class="card-text">Click her to go to news.</p>
                        <p class="card-text">Here you will find news about</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>