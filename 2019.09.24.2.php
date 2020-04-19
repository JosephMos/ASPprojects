<html>
  <body>
    Enter how many numbers of the fibonacci you want. (peferably under 30)<br>
  </body>
  <form methods="GET" action="<?=$_SERVER[PHP_SELF]?>">
    <input type= "number" name= "value">
    <input type="submit">
  </form>
  <?php
    $i= 0;
    $num1= 1;
    $num2= 1;
    $oldnum2= $num2;
    if (isset($_GET["value"]) && ($_GET["value"])>=1){
      echo $num1 . "<br>";

      while ($i<= ($_GET["value"])){
        echo $num2 . "<br>";
        $oldnum2= $num2;
        $num2= $num1 + $num2;
        $num1= $oldnum2;
        $i++;
      }
    }
  ?>
</html>
