<!DOCTYPE HTML>
<html>
<body>
<h1>Who will you invite to your party?</h1>

<form action="<?=$_SERVER["PHP_SELF"]?>"" method="get">
 <?php

    foreach ($_GET as $name => $choice){
      if ($name != "submit" && $name != "newName" && $name != "addName"){
        echo "$name: <input type='radio' name='$name' value='invited'";
        echo ($choice=='invited')? 'checked':'';
        echo "> Invited  <input type='radio' name='$name' value='not invited' ";
        echo ($choice=='not invited')? 'checked':'';
        echo "> Not invited<br> ";
      }
    }
 ?>


    <br>
Add a name to your list:<br>
  <input type="text" name="newName">

  <input type="submit" name="addName" value="Add Name"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
  if (isset($_GET["submit"])){
    foreach ($_GET as $name => $invited){
      echo "$name is $invited.<br>";
    }
  }
  elseif (isset($_GET["addName"])){

  }
?>
</body>
</html>
