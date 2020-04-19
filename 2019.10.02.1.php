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


    <h1>Select your sign to get your horoscope:</h1>



      <select name="Sign" >
        <option value="Aries">Aries</option>
        <option value="Taurus">Taurus</option>
        <option value="Gemini">Gemini</option>
        <option value="Cancer">Cancer</option>
        <option value="Leo">Leo</option>
        <option value="Virgo">Virgo</option>
        <option value="Libra">Libra</option>
        <option value="Scorprio">Scorprio</option>
        <option value="Sagittarius">Sagittarius</option>
        <option value="Capricornus">Capricornus</option>
        <option value="Aquarius">Aquarius</option>
        <option value="Pisces">Pisces</option>
      </select>
      <input type="submit" name="submit"><br>
      <?php
        if (isset($_GET["submit"])){
          $sign = $_GET["Sign"];

          switch ($sign) {
            case "Aries":
              echo "Your sign is Aries. That means that your day will suck.";
            break;
            case "Taurus":
              echo "Your sign is Taurus. That means that your day will maybe suck.";
            break;
            case "Gemini":
              echo "Your sign is Gemini. That means that your day might suck.";
            break;
            case "Cancer":
              echo "Your sign is Cancer. That means that you will get cancer.";
            break;
            case "Leo":
              echo "Your sign is Leo. That means that your day will go well.";
            break;
            case "Virgo":
              echo "Your sign is Virgo. That means that your day will suck some popsicles.";
            break;
            case "Libra":
              echo "Your sign is Libra. That means that your day will suck some lolipops.";
            break;
            case "Scorprio":
              echo "Your sign is Scorprio. That means that your day will suck miniscule.";
            break;
            case "Sagittarius":
              echo "Your sign is Sagittarius. That means that your day will suck. But just a little.";
            break;
            case "Capricornus":
              echo "Your sign is Capricornus. That means that your day will suck more than usual.";
            break;
            case "Aquarius":
              echo "Your sign is Aquarius. That means that your day will suck a little.";
            break;
            case "Pisces":
              echo "Your sign is Pisces. That means that your day will suck a lot.";
            break;
            default:
              echo "You're DUMB!";
          }

          $color = $_GET["color"];

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
