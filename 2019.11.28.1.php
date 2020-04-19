<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <?php
  echo '<body style="background-color:#696969">';
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "world";

  $db = mysqli_connect($servername, $username, $password, $database);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else {
    mysqli_connect($servername, $username, $password, $database);
  }
  ?>
<!--
What are the names of all movies released in 1995?
How many people played a part in the movie "Lost in Translation"?
What are the names of all the people who played a part in the movie "Lost in Translation"?
Who directed the movie "Fight Club"?
How many movies has Clint Eastwood directed?
What are the names of all movies Clint Eastwood has directed?
What are the names of all directors who have directed at least one horror film?
What are the names of every actor who has appeared in a movie directed by Christopher Nolan?
-->
  <h1> World Database </h1>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="radio" name="qry" value="default" checked><br>
    <input type="radio" name="qry" value="1"> show names of all movies released in 1995<br>
    <input type="radio" name="qry" value="2"> show how many people played a part in the movie "Lost in Translation"<br>
    <input type="radio" name="qry" value="3"> show the names of all the people who played a part in the movie "Lost in Translation"<br>
    <input type="radio" name="qry" value="4"> show who directed the movie "Fight Club"<br>
    <input type="radio" name="qry" value="5"> show how many movies has Clint Eastwood directed<br>
    <input type="radio" name="qry" value="6"> show the names of all movies Clint Eastwood has directed<br>
    <input type="radio" name="qry" value="7"> show the names of all directors who have directed at least one horror film<br>
    <input type="radio" name="qry" value="8"> show the names of every actor who has appeared in a movie directed by Christopher Nolan<br>
    <input type="submit" name="submit"><br><br><br> Result: <br><br>

    <?php
    switch ($_GET["qry"]) {
      case "1" :
      $query = "SELECT movies.name FROM movies WHERE movies.year = 1995;";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name1= $row["name"] . " ";
          echo "<font face='monospace' size=5 color='black'>Name: " . $name1 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "2" :
      $query = ""; //<- FIX THIS
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name2= $row["name"] . " ";
          while (strlen ($name2) <= 9) {
            $name2 = $name2 . "-";
          }
          echo "<font face='monospace' size=5 color='black'>Name: " . $name2 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "3" :
      $query = "";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<font face='monospace' size=5 color='black'>Ralph has a " . $row["grade"] . " in " . $row["name"] . ". <br></font>";//<- fix this
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "4" :
      $query = "";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<font face='monospace' size=5 color='black'>" . $row["name"] . " has a " . $row["grade"] . ". His email is " . $row["email"] . " and his password is " . $row["password"] . ".<br></font>";//<- fix this
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "5" :
      $query = "";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name5= $row["name"] . " ";
          while (strlen ($name5) <= 9) {
            $name5 = $name5 . "-";
          }
          echo "<font face='monospace' size=5 color='black'>Name: " . $name5 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      default:
      echo "Choose One of the Choices";
    }
    mysqli_close($db);
    ?>
  </form>
</body>
</html>
