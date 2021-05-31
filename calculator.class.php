<?php
    
    class Calculator {
        public $result;
        public $input;

        public function speed_mph($speed_kmph) {
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $speed_kmph = $_POST['speed'];
                
                if($speed_kmph >= 15 and $speed_kmph < 30) {
                    echo'<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                This is the speed you should drive in a compound.
                            </div>
                        </div>
                    </div>
                </div>';
                } else if ($speed_kmph >= 30 and $speed_kmph <=50 ) {
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                This is the speed range in the city.
                            </div>
                        </div>
                    </div>
                </div>';
                }else if ($speed_kmph >= 60 and $speed_kmph <= 80) {
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                This is speed range usually driven just outside of the city.
                            </div>
                        </div>
                    </div>
                </div>';
                }else if($speed_kmph >= 80 and $speed_kmph <= 130) {
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                This is typically the speed range for on the freeway.
                            </div>
                        </div>
                    </div>
                </div>';
                }else if($speed_kmph > 130) {
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                This speed is usually only driven on the German autobahn (or you thought it was fun doing something illegal :))
                            </div>
                        </div>
                    </div>
                </div>';
                } else if($speed_kmph < 15 and $speed_kmph > 0) {
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                ' .  'Here is the anwser below:<br>' . $speed_kmph . '  km/h is ' . $speed_kmph * 0.621 . ' mph.<br>
                                I think you are going a little too slow...
                            </div>
                        </div>
                    </div>
                </div>';
                } else if($speed_kmph <= 0){
                    echo '<div class="container">
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
                    <div class="row">
                        <div class="col-5 kmhCard">
                            <div class="alert alert-warning" role="alert">
                                You have to put in a number higher than 0.
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
        }
    }
?>