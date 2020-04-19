<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    Several people injected themselves with something. Who was injected with what? <br>
    who:
    <input type="text" name="who1">
    <input type="radio" name="gen1" value="m" checked> Male
    <input type="radio" name="gen1" value="f"> Female
    what: <input type="text" name="what1"> <br>
    who:
    <input type="text" name="who2">
    <input type="radio" name="gen2" value="m" checked> Male
    <input type="radio" name="gen2" value="f"> Female
    what: <input type="text" name="what2"> <br>
    who:
    <input type="text" name="who3">
    <input type="radio" name="gen3" value="m" checked> Male
    <input type="radio" name="gen3" value="f"> Female
    what: <input type="text" name="what3"> <br>


    <input type="submit" name="inject"><br>
    <?php

    function inject($who, $what, $gender){
      if($gender == "m"){
        echo "$who injected himself with $what.";
        echo "<br>";
      }
      else {
        echo "$who injected herself with $what.";
        echo "<br>";
      }

    }


    if (isset($_GET["inject"])) {

      inject($_GET["who1"], $_GET["what1"], $_GET["gen1"]);
      inject($_GET["who2"], $_GET["what2"], $_GET["gen2"]);
      inject($_GET["who3"], $_GET["what3"], $_GET["gen3"]);


    }

    ?>
  </form>
</body>
</html>
