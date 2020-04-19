<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <!--Using the world database updater files, make a webpage that allows a user
  to search for a movie by name and then update the movie's name, year, and rank. -->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "imdb";

  $db = mysqli_connect($servername, $username, $password, $database);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  ?>

  <br>I was unable to get the updated better version to work so here is a program that runs the requirements instead.<br><br>
  <h1> Imdb Database Records</h1>

  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="text" name="movieName" placeholder="Enter a movie name"><br>
    <input type="text" name="change" placeholder="Enter change"><br>
    Which of these would you like to change for the movie inputted above?<br>
    <input type="checkbox" name="changeComp" value="movies.name"> Its name (I would not reccomend this one because it makes for finding the movie again very difficult)<br>
    <input type="checkbox" name="changeComp" value="movies.year"> Its release year<br>
    <input type="checkbox" name="changeComp" value="movies.rank"> Its rank<br>
    <input type="submit" name="update" value="update"><br>
    <input type="submit" name="cancel" value="cancel"><br>



  <?php

  if (isset($_GET["movieName"])){  // They submitted an update to the database
    $name = $_GET["movieName"];

    echo "Database updated";

    $changeVal = $_GET["change"];
    $changeComp = $_GET["changeComp"];
    $query = "UPDATE movies SET $changeComp = '$changeVal' WHERE name = '$name';";
    $result = mysqli_query($db,$query);
  }
  else if (isset($_GET["cancel"]) == TRUE){ // They canceled an update to the database
    echo "Update canceled";
  }

?>
</form><br>
<?php
mysqli_close($db);
?>

</body>
</html>
