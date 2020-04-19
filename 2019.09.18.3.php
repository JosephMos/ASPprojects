<html>
  <body>

    <?php

      echo '<body style="background-color:#adfffc">';

      $a;
      $b;
      $c;
      if (isset($_GET["submit"])) {
        $a=$_GET["a"];
        $b=$_GET["b"];
        $c=$_GET["c"];
      }
    ?>
    <form action="sept18.2.0.php" method="get">
      ax^2 + bx + c <br>
      a: <input type="number" name="a" required="true" value="<?=$a?>"><br>
      b: <input type="number" name="b" required="true" value="<?=$b?>"><br>
      c: <input type="number" name="c" required="true" value="<?=$c?>"><br>
      <input type="submit" name= "submit">
    </form>
    <?php
      if (isset($_GET["submit"])) {
        echo "You entered <br> $_GET[a]x^2 + $_GET[b]x + $_GET[c] <br>";
        echo "<br>";
        $d = pow($b,2) - 4*$a*$c;
        if($d < 0) {
          echo "The equation has no real solutions.";
        }
        elseif($d = 0) {
          echo "x = ";
          echo (-$b / 2*$a);
        }
        else  {
          echo "x1 = ";
          echo ((-$b + sqrt($d)) / (2*$a));
          echo "<br>";
          echo "x2 = ";
          echo ((-$b - sqrt($d)) / (2*$a));
        }
      }
    ?>

  </body>
</html>
