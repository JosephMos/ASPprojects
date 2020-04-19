<?php
  $maxCol = 20;
  for ($row=0;$row < 40; $row++){
    if ($row % 2 == 0){
      for ($col = 0;$col < $maxCol ;$col++){
        if ($col % 2 == 0){
          echo "n";
        }
        else {
          echo "-";
        }
      }
    }
    else{
      for ($col = 0;$col < $maxCol ;$col++){
        if ($col % 2 == 0){
          echo "-";
        }
        else{
          echo "u";
        }
      }
    }
    echo "<br>";
  }
?>
