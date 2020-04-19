<html>
<form action="index.php">
  <input type = "text" name="text">
  <input type="submit">
</form>

<?php
  if (isset($_GET["text"])){
    echo "You said: " . $_GET["words"] . "<br>";
    echo "Chatbot says: " . getResponse($_GET["text"]);
  }
  else{
    echo "Welcome to my chatbot. How are you?";
  }
?>

<?php

function getResponse($text) {

if (strpos ($text, "h") == 0) {
  checkHi ($text)
}

?>

<?php
function checkHi ($input) {
  $hiTrue = false;
  $hi = ucfirst(strtolower($input));
  if ($hi = "hi") {
    $hiTrue = true;
  }
  elseif ($hi = "hello") {
    $hiTrue = true;
  }
  elseif ($hi = "hello there") {
    $hiTrue = true;
  }
  elseif ($hi = "hey") {
    $hiTrue = true;
  }
  else {
    $hiTrue = false;
  }

  if ($hiTrue == true) {
    echo "Hi";
  }
  else {
    return false;
  }
}
?>
