
<html>
<body>
  <h1>High Low Seven</h1>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    Select a value (you will be rolling 2 die and betting on the number)
    <br>
    <select name="number">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <br>
    <input type="submit" name="roll">
    <br>
    <?php
    if (isset($_GET["roll"])) {
      if ($_GET["number"] == 0 || $_GET["number"] == 1) {
        echo "are you dumb? its 2 die. you cant get a 0 or a 1 no matter what.";
      }
      else {
        $num1 = rand(1,6);
        $num2 = rand(1,6);
        $num = $num1 + $num2;
        echo "you bet a " . $_GET["number"];
        echo "<br> <br>you rolled a $num1 and a $num2 your lucky number is $num";
        echo "<br>";
        if ($_GET["number"] == $num1+$num2){
          echo "good job you won <br>";
          echo "go to <a href=https://www.youtube.com/watch?v=dQw4w9WgXcQ>this link</a> to get your prize.";
        }
        else {
          echo "you lost. too bad.";
          echo "<br>go to <a href=https://www.youtube.com/watch?v=dQw4w9WgXcQ>this link</a>.";
        }
      }
    }

    ?>
  </form>
</body>
</html>
