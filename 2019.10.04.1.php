<html>
  <body>

   <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    Choose a background color (or not idk):
    <select name="color">
        <option value="white">white</option>
        <option value="pink">pink</option>
        <option value="green">light green</option>
        <option value="blue">light blue</option>
    </select>
    <br>

    <input type="submit" name="submit"><br>

    <?php
    $color = $_GET["color"];

      if (isset($_GET["submit"])) {
        switch ($color) {
          case "white":
            echo '<body style="background-color:white">';
          break;
          case "pink":
            echo '<body style="background-color:#ffa3a3">';
          break;
          case "green":
            echo '<body style="background-color:#70d47c">';
          break;
          case "blue":
            echo '<body style="background-color:#78ebff">';
          break;
          default:
            echo '<body style="background-color:white">';
        }
      }
     ?>
     
   </form>
  </body>
</html>
