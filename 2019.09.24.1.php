<!DOCTYPE html>
<html>
  <form methods="GET" action="<?=$_SERVER[PHP_SELF]?>">
    <input type= "number" name= "value">
    <input type="submit">
  </form>
  <?php
    if (isset($_GET["value"])){
      for ($i=1; $i=$_GET["value"]/4; $i++){
        if ($_GET["value"] % $i == 0){
          echo $i . " " . ($_GET["value"] / $i) . "<br>";
        }
      }
    }
  ?>
</html>
