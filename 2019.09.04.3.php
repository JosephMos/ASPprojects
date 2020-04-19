<?php
/*
         _/      _/_/_/     _/_/_/_/_/    _/     _/
         _/    _/     _/    _/            _/     _/
         _/    _/     _/    _/_/_/_/       _/  _/
 _/      _/    _/     _/    _/               _/
   _/_/_/       _/_/_/      _/_/_/_/_/       _/
*/
//echo "hi" <br> "hi";
echo "hi";
echo "\n hi";
/*
echo   "        _/      _/_/_/     _/_/_/_/_/    _/     _/";
echo "\n        _/    _/     _/    _/            _/     _/";
echo "\n        _/    _/     _/    _/_/_/_/       _/  _/";
echo "\n_/      _/    _/     _/    _/               _/";
echo "\n  _/_/_/       _/_/_/      _/_/_/_/_/       _/";
*/

    $temp = 37;//Put in any number and see what it changes into.
    $units = "c";//Chose either to set it = to "f" or "c" and save and reload the page.

    if ($units == "c") {
      $f = $temp;
      $celsius = ($f - 32) * 5 / 9;
      $cround = round($celsius);
      echo $f . " degrees fahrenheit is equal to about " . $cround . " degrees celsius. (exactly " . $celsius . ")";
    }
    else {
      if ($units == "f") {
        $c = $temp;
        $farhenheit = $c * 9 / 5 + 32;
        $fround = round($farhenheit);
        echo $c . " degrees celsius is equal to about " . $fround . " degrees farhenheit. (exactly " . $farhenheit . ")";
      }
      else {
        echo "Idk what you did here. Uhhh ERROR.";
      }
    }





?>
