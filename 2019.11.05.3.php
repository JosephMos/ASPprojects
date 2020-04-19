<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    <input type ="text" name="words">

    <input type="submit" name="submit">

    <?php
    if (isset($_GET["words"])){
      echo "You said: " . $_GET["words"] . "<br>";
      echo "Chatbot says: " . respond($_GET["words"]);
    }
    else{
      echo "Welcome to my chatbot. How are you?";
    }
    ?>
  </form>

  <?php
  function respond($text) {
    checkHi ($text);
    HowAreYouResponse ($text);
    IWantTo ($text);
    IWant ($text);


  }
  ?>

  <?php
  function checkHi ($input) {
    $hiTrue = false;
    $hi = ucfirst(strtolower($input));
    if ($hi == "hi") {
      $hiTrue = true;
    }
    elseif ($hi == "hello") {
      $hiTrue = true;
    }
    elseif ($hi == "hello there") {
      $hiTrue = true;
    }
    elseif ($hi == "hey") {
      $hiTrue = true;
    }
    else {
      $hiTrue == false;
    }

    if ($hiTrue == true) {
      echo "Hi";
    }
  }
  ?>

  <?php
  function HowAreYouResponse ($input) {
    $response = strtolower($input);
    if (strpos ($response, "i'm") !== false or strpos ($response, "i'm doing") !== false or strpos ($response, "i am") !== false) {
      echo "Oh. Lovely.";
    }
    elseif ($response == "good" or $response == "fine" or $response == "ok" or $response == "bad" or $response == "i could be better" or $response == "amazing") {
      echo "Thats good.";
    }
  }
  ?>

  <?php
  function IWantTo ($input) {
    $string = strtolower($input);
    if (strpos ($string, "i want to") !== false) {
      $thing = substr ($string, strpos ($string, "i want to") + 9);
      echo "Why do you want to " . $thing;
    }
  }
  ?>

  <?php
  function IWant ($input) {
    $string = strtolower($input);
    if (strpos ($string, "i want") !== false) {
      $thing = substr ($string, strpos ($string, "i want to") + 6);
      echo "Why do you want " . $thing;
    }
  }
  ?>


</body>
</html>
