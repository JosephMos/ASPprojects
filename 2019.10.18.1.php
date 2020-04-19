<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    Which question would you like to answer? <br>
    <input type="radio" name="question" value="name">What is your name?<br>
    <input type="radio" name="question" value="want">What do you want?<br>
    <input type="text" name="text">
    <input type="submit" name="submit">

    <?php
    echo '<body style="background-color:#69ab07">';
    if (isset ($_GET["submit"])) {
      echo "<br><br>";
      if ($_GET["question"]=="name") {
        if (strpos($_GET["text"], "My name is")==0) {
          echo "Hello " . substr($_GET["text"], 11) . ".";
        }
        elseif (strpos($_GET["text"], "my name is")==0) {
          echo "Hello " . substr($_GET["text"], 11) . ".";
        }
        else {
          echo "Hello " . $_GET["text"] . ".";
        }
      }
      elseif ($_GET["question"]=="want") {
        if (strpos($_GET["text"]), "Y" or strpos($_GET["text"]), "y")==0) {
          $string = $_GET["text"];
          $index = strpos($string,"I want to") + 9;
          echo "Why do you want to " . substr($string, $index) ."?";
        }
        elseif (strpos($_GET["text"], "N" or strpos($_GET["text"], "n")==0) {
          echo "Oh okay then.";
        }
        else {
          echo '<span style="color:#d90000;">Unreconizable input<br>try again</span>';
        }
      }



    }
    ?>
  </form>
</body>
</html>
