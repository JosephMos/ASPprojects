<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    <!--this is a comment-->
    Finds obama
    <input type="text" name="bad">
    <input type="submit" name="submit"><br>

    <?php
    function findobama ($text) {
      if (strpos ($text, "Obama") !== false or strpos ($text, "obama") !== false) {
        echo "found it";
      }
    }
    if (isset ($_GET["submit"])) {

      findobama ($_GET["bad"]);

    }
    ?>
  </form>
</body>
</html>
