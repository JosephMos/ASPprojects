<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "imdb";
  //Change the rank of the movies
  $db = mysqli_connect($servername, $username, $password, $database);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  ?>

  <!-- THIS IS PART 2 -->
  <h1> Imdb Database Records</h1>
  <?php
  if (isset($_GET["inputText"]) == FALSE){ // First time loading page
    echo "<form action='$_SERVER[PHP_SELF]' method='get'>
    <input type='text' name='movieName' placeholder='Enter a movie name'><br>
    <input type='float' name='rank' placeholder='Enter rank (0.0 <= # <= 10.0)'><br>
    <input type='submit' name='sumbit' value='update'><br>
    </form><br>";



    if (isset($_GET["submit"]) == TRUE){  // They submitted an update to the database
      echo "Database updated";
      $name = $_GET["movieName"];
      $rank = $_GET["rank"];
      $query= "UPDATE movies SET movies.rank = '$rank' WHERE name = '$name';";
      $result = mysqli_query($db,$query);
      $query2= "SELECT * FROM movies WHERE name = '$name';";
      echo mysqli_query($db,$query2);
    }
    else if (isset($_GET["cancel"]) == TRUE){ // They canceled an update to the database
      echo "Update canceled";
    }
  }
  /*else if (isset($_GET["inputText"]) == TRUE) // They entered a country name
  {
  $name = $_GET["inputText"];
  $query= "SELECT * FROM movies WHERE name = '$name';";
  $result = mysqli_query($db,$query);

  if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  echo "Name: " . $row["name"] .  "<br>";
  echo "<form action='$_SERVER[PHP_SELF]' method='get'>
  Head of State: <input type='text' name='headOfState' value='$row[head_of_state]'>
  <input type='hidden' name='countryName' value='$row[name]'><br>
  <input type='submit' name='update'> <input type='submit' value='Cancel' name='cancel'>
  </form>";

}
else {
echo "Error: Invalid country name. <a href='$_SERVER[PHP_SELF]'> Reload page.</a>";
}
}*/
mysqli_close($db);
?>

</body>
</html>
