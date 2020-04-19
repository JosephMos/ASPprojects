<?php

    //Gives letter for a random grade

    $grade = rand(0,105);

    if ($grade == 69) {
      echo $grade . "% is an D - which kinda sucks but its a 69%. So nice.";
    }
    elseif ($grade >= 100){
      echo $grade . "% is an A+.";
    }
    elseif ($grade <= 50){
      echo $grade . "% is an F.";
    }
    elseif ($grade < 60){
      echo $grade . "% is an F.";
    }
    elseif ($grade < 70){
      echo $grade . "% is an D.";
    }
    elseif ($grade < 80){
      echo $grade . "% is an C.";
    }
    elseif ($grade < 90){
      echo $grade . "% is an B.";
    }
    elseif ($grade < 100){
      echo $grade . "% is an A.";
    }

echo "<br>";

    //gives random time that allows or doesn't allows a parrot to chirp
    if (rand(0,1) == 0) {
      $talking = false;
    }
    else {
      $talking = true;
    }
    $time = rand(0,23);

    echo "  It is " . $time . ":00.  ";
    if ($talking && ($time < 7 || $time < 19)) {
      echo "
        Warning - it is " . $time . "-o clock and the parrot is chirping. Stop chirping. *Procedes to assassinate parrot*";
    }


/*
    echo "<br>        _/      _/_/_/     _/_/_/_/_/    _/     _/";
    echo "<br>        _/    _/     _/    _/            _/     _/";
    echo "<br>        _/    _/     _/    _/_/_/_/       _/  _/";
    echo "<br>_/      _/    _/     _/    _/               _/";
    echo "<br>  _/_/_/       _/_/_/      _/_/_/_/_/       _/";
*/

 ?>
